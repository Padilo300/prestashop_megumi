<?php
require_once 'include.php';

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_'))
    exit;

class RbsPayment extends PaymentModule
{
    const _REGISTERED_BUT_NOT_PAID_FOR_ = 0;
    const _PRE_AUTHORIZATION_ = 1;
    const _AUTHORIZATION_ = 2;
    const _AUTHORIZATION_CANCELED_ = 3;
    const _ORDER_RETURN_ = 4;
    const _ACS_INITIATED_AUTHORIZATION_THROUGH_THE_ISSUING_BANK_ = 5;
    const _AUTHORIZATION_FAILED_ = 6;
    static $cache = array();
    public $default_order_state;
    public $test_mode;
    public $send_order = 0;
    public $ext = '.do';
    public $write_log;
    protected $login;
    protected $password;
    protected $real_link = RBS_PROD_URL;
    protected $debug_link = RBS_TEST_URL;


    public function __construct()
    {
        $this->name = 'rbspayment';
        $this->tab = 'payments_gateways';
        $this->version = '2.3';
        $this->author = 'RBS';
        $this->controllers = array('payment', 'validation');
        $this->currencies = true;
        $this->currencies_mode = 'checkbox';
        $this->bootstrap = true;
        $this->default_vat = 0;

        parent::__construct();

        $this->displayName = 'Оплата банковской картой';
        $this->description = 'Модуль оплаты банковской картой через платежный шлюз';
        $this->confirmUninstall = 'Вы действительно хотите удалить модуль?';
        $this->default_order_state = Configuration::get('PS_RBS_STATE_DEFAULT');
        $this->login = Configuration::get('PS_RBS_LOGIN');
        $this->password = Configuration::get('PS_RBS_PASSWORD');
        $this->test_mode = Configuration::get('PS_RBS_TEST_MODE');
        $this->send_order = Configuration::get('PS_RBS_SEND_ORDER');
        $this->default_vat = Configuration::get('PS_RBS_DEFAULT_VAT');
        $this->stage = Configuration::get('PS_RBS_STAGE');
        $this->write_log = Configuration::get('PS_RBS_WRITE_LOG');

        $this->ffd_version = Configuration::get('PS_RBS_DEFAULT_FFD_VERSION');
        $this->ffd_paymentObjectType = Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_OBJECT_TYPE');
        $this->ffd_paymentMethodType = Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_METHOD_TYPE');

    }

    /**
     * @param string $pattern
     * @param int $flags
     * @return array
     */
    public static function globRecursive($pattern, $flags = 0)
    {
        $files = glob($pattern, $flags);
        if (!$files)
            $files = array();

        foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir)
            /** @noinspection SlowArrayOperationsInLoopInspection */
            $files = array_merge($files, self::globRecursive($dir . '/' . basename($pattern), $flags));

        return $files;
    }

    public static function noEscape($value)
    {
        return $value;
    }

    public function install()
    {

        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rbs_payment` (
                  `id_order` int(11) NOT NULL,
                  `order_number` text COLLATE utf8_unicode_ci NOT NULL,
                  `rbs_order_id` text COLLATE utf8_unicode_ci NOT NULL,
                  `form_url` text COLLATE utf8_unicode_ci NOT NULL,
                  PRIMARY KEY (`id_order`),
                  UNIQUE KEY `id_order` (`id_order`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;';

        if (!parent::install()
            || !$this->registerHook('payment')
            || !$this->registerHook('paymentReturn')
            || !$this->registerHook('paymentOptions')
            || !Db::getInstance()->execute($sql)
        ) {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        $sql = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rbs_payment`';
        if (!parent::uninstall()
            || !Db::getInstance()->execute($sql)
        )
            return false;
        return true;
    }

    public function hookDisplayPaymentReturn()
    {
        $this->hookPayment();
    }

    public function hookPayment()
    {
        if (!$this->active)
            return;

        $this->smarty->assign(array(
            'module' => $this,
            'this_path' => $this->_path,
            'this_path_ssl' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . $this->name . '/'
        ));

        $this->context->controller->addCSS($this->_path . 'views/css/rbspayment.css', 'all');
        return $this->display(__FILE__, 'payment.tpl');
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $this->smarty->assign(array(
            'module' => $this,
            'this_path' => $this->_path,
            'this_path_ssl' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . $this->name . '/'
        ));

        $newOption = new PaymentOption();
        $newOption->setCallToActionText("Оплата картой банка")
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
            ->setAdditionalInformation($this->fetch('module:rbspayment/views/templates/hook/payment.tpl'));
        $payment_options = array(
            $newOption
        );

        return $payment_options;
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module))
            foreach ($currencies_module as $currency_module)
                if ($currency_order->id == $currency_module['id_currency'])
                    return true;
        return false;
    }

    public function checkCartAmount($cart = null)
    {
        if (empty($cart)) {
            return false;
        }

        if (!(int)Configuration::get('PS_RBS_SEND_ORDER')) {
            return true;
        }

        $discounts = $cart->getOrderTotal(true, Cart::ONLY_DISCOUNTS);
        $shipping = $cart->getOrderTotal(true, Cart::ONLY_SHIPPING);

        if (($discounts == $shipping) || ($discounts == 0)) {
            return true;
        }

        return false;
    }

    public function registerInPaymentGate($id_order)
    {
        $cache_key = 'getPaymentGateValues_' . $id_order;

        if (isset(self::$cache[$cache_key]))
            unset(self::$cache[$cache_key]);

        $order = new Order((int)$id_order);
        $order_number = Db::getInstance()->getValue('SELECT IFNULL(`order_number`, 0) FROM `'
                . _DB_PREFIX_ . 'rbs_payment` WHERE `id_order` = \'' . (int)$order->id . '\'') + 1;

        $rbs_description = "Оплата заказа " . $id_order . " \n " . $order->getFirstMessage();

        $curl_data = array(
            'userName' => $this->getLogin(),
            'password' => $this->getPassword(),
            'amount' => $order->total_paid * 100,
            'orderNumber' => (int)$order->id . '_' . $order_number . '.' . time(),
            'description' => $rbs_description,
            'returnUrl' => $this->context->link->getModuleLink($this->name, 'paymentsuccess', array(), true),
            'failUrl' => $this->context->link->getModuleLink($this->name, 'paymentfail', array(), true),

            'jsonParams' => json_encode(
                array(
                    'CMS:' => 'PrestaShop ' . _PS_VERSION_,
                    'Module-Version: ' => $this->version
                )
            ),
        );

        //collect orderBundle data
        if ($this->send_order) {
            $ProductDetailObject = new OrderDetail;
            $product_detail = $ProductDetailObject->getList($id_order);

            $items = array();
            $itemsCnt = 1;

            $amountFix = 0;

            /* Заполнение массива данных корзины */
            foreach ($product_detail as $value) {
                $item = array();

                $item['positionId'] = $itemsCnt++;
                $item['name'] = $value['product_name'];
                $item['quantity'] = array(
                    'value' => $value['product_quantity'],
                    'measure' => 'piece'
                );
                $item['itemAmount'] = round(($value['unit_price_tax_incl']) * 100) * $value['product_quantity'];
                $item['itemCode'] = $value['product_id'];

                $item['itemPrice'] = round(($value['unit_price_tax_incl']) * 100);

                // TAX calculation
                if ($value['id_tax_rules_group'] > 0) {

                    if (Validate::isLoadedObject(new TaxRulesGroup($value['id_tax_rules_group']))) {
                        $address = $this->context->shop->getAddress();
                        $tax_manager = TaxManagerFactory::getManager($address, $value['id_tax_rules_group']);
                        $product_tax_calculator = $tax_manager->getTaxCalculator();
                        $item_rate = $product_tax_calculator->getTotalRate();
                    }

                    if ($item_rate == 20) {
                        $tax_type = 6;
                    } else if ($item_rate == 18) {
                        $tax_type = 3;
                    } else if ($item_rate == 10) {
                        $tax_type = 2;
                    } else if ($item_rate == 0) {
                        $tax_type = 1;
                    } else {
                        $tax_type = $this->default_vat;
                    }

                } else {
                    $tax_type = $this->default_vat;
                }

                $item['tax'] = array(
                    'taxType' => $tax_type
                );

                // FIX Presta-shop AMOUNT BUG
                $amountFix += $item['itemAmount'];

                // FFD 1.05 added
                if ($this->ffd_version == 'v105') {

                    $attributes = array();
                    $attributes[] = array(
                        "name" => "paymentMethod",
                        "value" => $this->ffd_paymentMethodType
                    );
                    $attributes[] = array(
                        "name" => "paymentObject",
                        "value" => $this->ffd_paymentObjectType
                    );

                    $item['itemAttributes']['attributes'] = $attributes;
                }


                $items[] = $item;

            }

            // DELIVERY calculation new position add
            if ($order->total_shipping > 0) {
                $itemShipment['positionId'] = $itemsCnt;
                $itemShipment['name'] = 'Доставка';
                $itemShipment['quantity'] = array(
                    'value' => 1,
                    'measure' => 'piece'
                );
                $itemShipment['itemAmount'] = $itemShipment['itemPrice'] = $order->total_shipping * 100;
                $itemShipment['itemCode'] = 'Delivery';

//                    $itemShipment['tax'] = array(
//                        'taxType' => $this->ofd_taxType
//                    );

                // FIX presta-shop AMOUNT BUG
                $amountFix += $itemShipment['itemAmount'];


                // FFD 1.05 added
                if ($this->ffd_version == 'v105') {
                    $attributes = array();
                    $attributes[] = array(
                        "name" => "paymentMethod",
                        "value" => 4
                    );
                    $attributes[] = array(
                        "name" => "paymentObject",
                        "value" => 4
                    );

                    $itemShipment['itemAttributes']['attributes'] = $attributes;

                }

                $items[] = $itemShipment;
            }

            // Customer data
            $id_customer = $order->id_customer;
            $customer = new Customer((int)$id_customer);
            $order_bundle = array(
                'orderCreationDate' => strtotime($order->date_add),
                'customerDetails' => array(
                    'email' => $customer->email
                ),
                'cartItems' => array('items' => $items)
            );

            /* Заполнение массива данных для запроса c фискализацией */
            $curl_data['orderBundle'] = json_encode($order_bundle);

            // FIX Presta-shop AMOUNT BUG
            $curl_data['amount'] = $amountFix;

        }

        if ($this->getStage() == 1) {
            $result_gate = $this->gateway('registerPreAuth' . $this->ext, $curl_data, $this->getLink(), $this->write_log);
        } else {
            $result_gate = $this->gateway('register' . $this->ext, $curl_data, $this->getLink(), $this->write_log);
        }

        $result = $this->noCamelCase($result_gate);

        //todo logging here response

        if (!isset($result['errorcode']) || !$result['errorcode']) {

            $sql = 'INSERT INTO `' . _DB_PREFIX_ . 'rbs_payment` (`id_order`, `order_number`, `rbs_order_id`, `form_url`)
                        VALUES (\'' . (int)$order->id . '\', \'' . pSQL($order_number) . '\' , \'' . pSQL($result['orderid']) . '\', \'' . pSQL($result['formurl']) . '\')
                        ON DUPLICATE KEY UPDATE
                            `order_number` = \'' . pSQL($order_number) . '\',
                            `rbs_order_id` = \'' . (int)$result['orderid'] . '\',
                            `form_url` = \'' . pSQL($result['formurl']) . '\'';
            return Db::getInstance()->execute($sql);

        }
        return false;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getStage()
    {
        return $this->stage;
    }

    public function gateway($method, $data, $url, $log = true)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data, '', '&'),
            CURLOPT_HTTPHEADER => array('CMS: PrestaShop ' . _PS_VERSION_, 'Module-Version: ' . $this->version),
            CURLOPT_SSLVERSION => 6
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, true);

        if ($log == true)
            $this->logger('Request: ' . $url . $method . ': ' . print_r($data, true) . 'Response: ' . print_r($response, true));

        curl_close($curl);

        return $response;
    }

    public function logger($message)
    {
        $logger = new FileLogger();
        $dir = version_compare(_PS_VERSION_, '1.7', '<') ? '/log/' : '/app/logs/';
        $logger->setFilename(_PS_ROOT_DIR_ . $dir . date('Y-m-d') . '_rbspayment.log');
        $logger->logInfo(date('H:i:s') . "\n" . $message);
    }

    public function getLink()
    {
        return ((int)$this->test_mode) ? $this->debug_link : $this->real_link;
    }

    public function noCamelCase($obj)
    {
        $return = array();
        if (is_object($obj) || is_array($obj)) {
            foreach ($obj as $key => $value) {
                $k = Tools::strtolower($key);
                $return[$k] = $value;
            }
            return $return;
        }
        return false;
    }

    public function getAdditionalActions($params)
    {
        if ($params['id_order_state'] != Configuration::get('PS_RBS_STATE'))
            if ($params['id_order_state'] != Configuration::get('PS_RBS_STATE_DEFAULT'))
                return;

        $info = $this->getPaymentGateValues($params['id_order']);

        $this->context->smarty->assign(array(
            'payment_link' => $this->context->link->getModuleLink($this->name, 'PaymentGate'),
            'id_order' => $params['id_order'],
            'order_status' => $info['order_status']
        ));
        return $this->display(__FILE__, 'views/templates/front/additional_action.tpl');
    }

    public function getPaymentGateValues($id_order)
    {
        $cache_key = 'getPaymentGateValues_' . $id_order;

        if (!isset(self::$cache[$cache_key])) {

            $result = Db::getInstance()->getRow('SELECT * FROM `' . _DB_PREFIX_ . 'rbs_payment` WHERE `id_order` = \'' . (int)$id_order . '\'');

            if ($result) {
                $curl_data = array('userName' => $this->getLogin(), 'password' => $this->getPassword(), 'orderId' => $result['rbs_order_id']);
                $return_gate = $this->gateway('getOrderStatus' . $this->ext, $curl_data, $this->getLink(), $this->write_log);

                $return = $this->noCamelCase($return_gate);

                if (isset($return['orderstatus'])) {
                    $result['order_status'] = $return['orderstatus'];
                    self::$cache[$cache_key] = $result;
                }
            } else
                self::$cache[$cache_key] = false;
        }
        return self::$cache[$cache_key];
    }

    public function getRedirectLink()
    {
        return $this->context->link->getModuleLink($this->name, 'PaymentGate', array(
            'id_order' => $this->currentOrder
        ));
    }

    public function getContent()
    {
        $this->registerSmartyFunctions();
        $this->context->controller->addJS('http://#'
            . Context::getContext()->language->iso_code
        );
        $this->context->smarty->assign(array(
            'content_tab' => $this->getContentWrap(),
//			'documentation' => $this->getDocumentation()
        ));

        return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->name . '/views/templates/admin/content.tpl');
    }

    public function registerSmartyFunctions()
    {
        $smarty = $this->context->smarty;
        if (!array_key_exists('get_image_lang', $smarty->registered_plugins['function']))
            smartyRegisterFunction($smarty, 'function', 'get_image_lang', array($this, 'getImageLang'));
        if (!array_key_exists('no_escape', $smarty->registered_plugins['modifier']))
            smartyRegisterFunction($smarty, 'modifier', 'no_escape', array(__CLASS__, 'noEscape'));
        if (class_exists('TransModRbs')) {
            if (!array_key_exists('ld', $smarty->registered_plugins['modifier']))
                smartyRegisterFunction($smarty, 'modifier', 'ld', array(TransModRbs::getInstance(), 'ld'));
        }
    }

    /**
     * @return string
     */
    public function getContentWrap()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/rbspayment.css', 'all');
        if (Tools::isSubmit('saveSettings')) {
            $this->login = Tools::getValue('api-login');
            $this->password = Tools::getValue('password');
            $this->stage = Tools::getValue('stage');
            $this->test_mode = Tools::getValue('test_mode');
            $this->send_order = Tools::getValue('send_order');
            $this->write_log = Tools::getValue('write_log');
            $this->default_vat = Tools::getValue('default_vat');

            Configuration::updateValue('PS_RBS_LOGIN', $this->login);
            Configuration::updateValue('PS_RBS_PASSWORD', $this->password);
            Configuration::updateValue('PS_RBS_STAGE', $this->stage);
            Configuration::updateValue('PS_RBS_TEST_MODE', $this->test_mode);
            Configuration::updateValue('PS_RBS_STATE', Tools::getValue('authorization_state'));
            Configuration::updateValue('PS_RBS_STATE_DEFAULT', Tools::getValue('default_state'));
            Configuration::updateValue('PS_RBS_STATE_ERROR', Tools::getValue('error_state'));

            Configuration::updateValue('PS_RBS_SEND_ORDER', $this->send_order);
            Configuration::updateValue('PS_RBS_DEFAULT_TAX_SYSTEM', Tools::getValue('default_taxSystem'));
            Configuration::updateValue('PS_RBS_DEFAULT_VAT', $this->default_vat);

            Configuration::updateValue('PS_RBS_DEFAULT_FFD_VERSION', Tools::getValue('ffd_version'));
            Configuration::updateValue('PS_RBS_DEFAULT_FFD_PAYMENT_OBJECT_TYPE', Tools::getValue('ffd_paymentObjectType'));
            Configuration::updateValue('PS_RBS_DEFAULT_FFD_PAYMENT_METHOD_TYPE', Tools::getValue('ffd_paymentMethodType'));

            Configuration::updateValue('PS_RBS_WRITE_LOG', $this->write_log);
        }

        $query = 'SELECT `id_order_state`, `name` FROM `' . _DB_PREFIX_ . 'order_state_lang` WHERE `id_lang` = "' . (int)$this->context->language->id . '"';
        $order_state = DB::getInstance()->executeS($query);

        return $this->adminForm($order_state);
    }

    public function adminForm($order_state)
    {
        $fields_form = array(
            array(
                'label' => 'Логин',
                'desc' => 'Логин платежной системы, выданный банком',
                'required' => true,
                'type' => 'text',
                'name' => 'api-login',
                'class' => 'fixed-width-lg',
                'tab' => 'basic',
            ),
            array(
                'label' => 'Пароль',
                'desc' => 'Пароль платежной системы, выданный банком',
                'required' => true,
                'type' => 'text',
                'name' => 'password',
                'class' => 'fixed-width-lg',
                'tab' => 'basic',
            ),
            array(
                'label' => 'Тестовый режим',
                'desc' => 'Выключите чтобы перевести модуль в боевой режим работы',
                'type' => 'switch',
                'name' => 'test_mode',
                'values' => array(
                    array(
                        'value' => 1
                    ),
                    array(
                        'value' => 0
                    )
                ),
                'tab' => 'basic',
            ),
            array(
                'label' => 'Включить двухстадийность платежа',
                'desc' => 'Заказ проверяется после оплаты, а потом происходит реальное списание средств',
                'type' => 'switch',
                'name' => 'stage',
                'values' => array(
                    array(
                        'value' => 1
                    ),
                    array(
                        'value' => 0
                    )
                ),
                'tab' => 'basic',
            ),
            array(
                'label' => 'Статус по умолчанию',
                'desc' => 'Статус заказа по умолчанию, когда выбран текущий метод оплаты',
                'type' => 'select',
                'name' => 'default_state',
                'options' => array(
                    'id' => 'id_order_state',
                    'name' => 'name',
                    'query' => $order_state
                ),
                'tab' => 'basic',
            ),
            array(
                'label' => 'Статус оплаченного заказа',
                'desc' => 'Статус заказа после успешной авторизации и оплаты',
                'type' => 'select',
                'name' => 'authorization_state',
                'options' => array(
                    'id' => 'id_order_state',
                    'name' => 'name',
                    'query' => $order_state
                ),
                'tab' => 'basic',
            ),
            array(
                'label' => 'Статус ошибки',
                'desc' => 'Статус заказа при ошибке оплаты',
                'type' => 'select',
                'name' => 'error_state',
                'options' => array(
                    'id' => 'id_order_state',
                    'name' => 'name',
                    'query' => $order_state
                ),
                'tab' => 'basic',
            ),

            array(
                'label' => 'Передача товарной корзины',
                'desc' => 'При выборе опции, будет сформирован и отправлен в налоговую и клиенту чек. Опция платная, за подключением обратитесь в сервисную службу банка. При использовании необходимо настроить НДС продаваемых товаров. НДС рассчитывается согласно законодательству РФ, возможны расхождения в размере НДС с суммой рассчитанной магазином.',
                'type' => 'switch',
                'name' => 'send_order',
                'values' => array(
                    array(
                        'value' => 1
                    ),
                    array(
                        'value' => 0
                    )
                ),
                'tab' => 'fl54',
            ),
            array(
                'label' => 'Система налогообложения',
//                'hint' => '',
                'type' => 'select',
                'name' => 'default_taxSystem',
                'options' => array(
                    'id' => 'id',
                    'name' => 'name',
                    'query' => array(
                        array('id' => 0, 'name' => 'Общая'),
                        array('id' => 1, 'name' => 'Упрощённая, доход'),
                        array('id' => 2, 'name' => 'Упрощённая, доход минус расход'),
                        array('id' => 3, 'name' => 'Eдиный налог на вменённый доход'),
                        array('id' => 4, 'name' => 'Eдиный сельскохозяйственный налог'),
                        array('id' => 5, 'name' => 'Патентная система налогообложения')
                    )
                ),
                'tab' => 'fl54',
            ),
            array(
                'label' => 'Ставка НДС по умолчанию',
//                'hint' => '',
                'type' => 'select',
                'name' => 'default_vat',
                'options' => array(
                    'id' => 'id',
                    'name' => 'name',
                    'query' => array(
                        array('id' => 0, 'name' => 'Без НДС'),
                        array('id' => 1, 'name' => 'НДС по ставке 0%'),
                        array('id' => 2, 'name' => 'НДС чека по ставке 10%'),
                        array('id' => 3, 'name' => 'НДС чека по ставке 18%'),
                        array('id' => 6, 'name' => 'НДС чека по ставке 20%'),
                        array('id' => 4, 'name' => 'НДС чека по расчетной ставке 10/110'),
                        array('id' => 5, 'name' => 'НДС чека по расчетной ставке 10/118'),
                        array('id' => 7, 'name' => 'НДС чека по расчетной ставке 20/120')
                    ),
                ),
                'tab' => 'fl54',
            ),
            array(
                'label' => 'Формат фискальных документов',
                'desc' => 'Формат версии требуется указать в личном кабинете банка и в кабинете сервиса фискализации',
                'type' => 'select',
                'name' => 'ffd_version',
                'options' => array(
                    'id' => 'id',
                    'name' => 'name',
                    'query' => array(
                        array('id' => 'v10', 'name' => 'ФФД 1.0'),
                        array('id' => 'v105', 'name' => 'ФФД 1.05'),
//                        array('id' => 'v11', 'name' => 'ФФД 1.1'),
                    ),
                ),
                'tab' => 'fl54',
            ),


            array(
                'label' => 'Тип оплаты',
                'desc' => 'Используется в версих ФФД, начиная с 1.05',
                'type' => 'select',
                'name' => 'ffd_paymentMethodType',
                'options' => array(
                    'id' => 'id',
                    'name' => 'name',
                    'query' => array(
                        array('id' => 1, 'name' => 'Полная предварительная оплата до момента передачи предмета расчёта'),
                        array('id' => 2, 'name' => 'Частичная предварительная оплата до момента передачи предмета расчёта'),
                        array('id' => 3, 'name' => 'Аванс'),
                        array('id' => 4, 'name' => 'Полная оплата в момент передачи предмета расчёта'),
                        array('id' => 5, 'name' => 'Частичная оплата предмета расчёта в момент его передачи с последующей оплатой в кредит'),
                        array('id' => 6, 'name' => 'Передача предмета расчёта без его оплаты в момент его передачи с последующей оплатой в кредит'),
                        array('id' => 7, 'name' => 'Оплата предмета расчёта после его передачи с оплатой в кредит'),
                    ),
                ),
                'tab' => 'fl54',
            ),
            array(
                'label' => 'Тип оплачиваемой позиции ',
                'desc' => 'Используется в версих ФФД, начиная с 1.05',
                'type' => 'select',
                'name' => 'ffd_paymentObjectType',
                'options' => array(
                    'id' => 'id',
                    'name' => 'name',
                    'query' => array(
                        array('id' => 1, 'name' => 'Товар'),
                        array('id' => 2, 'name' => 'Подакцизный товар'),
                        array('id' => 3, 'name' => 'Работа'),
                        array('id' => 4, 'name' => 'Услуга'),
                        array('id' => 5, 'name' => 'Ставка азартной игры'),
//                        array('id' => 6, 'name' => 'Выигрыш азартной игры'),
                        array('id' => 7, 'name' => 'Лотерейный билет'),
//                        array('id' => 8, 'name' => 'Выигрыш лотереи'),
                        array('id' => 9, 'name' => 'Предоставление РИД'),
                        array('id' => 10, 'name' => 'Платёж'),
                        array('id' => 11, 'name' => 'Агентское вознаграждение'),
                        array('id' => 12, 'name' => 'Составной предмет расчёта'),
                        array('id' => 13, 'name' => 'Иной предмет расчёта'),
                    ),
                ),
                'tab' => 'fl54',
            ),

            array(
                'label' => 'Вести логирование запросов и ответов от шлюза',
                'type' => 'switch',
                'name' => 'write_log',
                'values' => array(
                    array(
                        'value' => 1
                    ),
                    array(
                        'value' => 0
                    ),
                ),
                'tab' => 'basic',
            ),
        );


        $fields_value = array(
            'api-login' => Configuration::get('PS_RBS_LOGIN') ? Configuration::get('PS_RBS_LOGIN') : null,
            'password' => Configuration::get('PS_RBS_PASSWORD') ? Configuration::get('PS_RBS_PASSWORD') : null,
            'test_mode' => Configuration::get('PS_RBS_TEST_MODE') ? Configuration::get('PS_RBS_TEST_MODE') : '0',
            'stage' => Configuration::get('PS_RBS_STAGE') ? Configuration::get('PS_RBS_STAGE') : '0',

            'default_state' => Configuration::get('PS_RBS_STATE_DEFAULT') ? Configuration::get('PS_RBS_STATE_DEFAULT') : null,
            'authorization_state' => Configuration::get('PS_RBS_STATE') ? Configuration::get('PS_RBS_STATE') : null,
            'error_state' => Configuration::get('PS_RBS_STATE_ERROR') ? Configuration::get('PS_RBS_STATE_ERROR') : null,

            'send_order' => Configuration::get('PS_RBS_SEND_ORDER') ? Configuration::get('PS_RBS_SEND_ORDER') : '0',
            'default_taxSystem' => Configuration::get('PS_RBS_DEFAULT_TAX_SYSTEM') ? Configuration::get('PS_RBS_DEFAULT_TAX_SYSTEM') : null,
            'default_vat' => Configuration::get('PS_RBS_DEFAULT_VAT') ? Configuration::get('PS_RBS_DEFAULT_VAT') : null,
            'ffd_version' => Configuration::get('PS_RBS_DEFAULT_FFD_VERSION') ? Configuration::get('PS_RBS_DEFAULT_FFD_VERSION') : null,

            'ffd_paymentObjectType' => Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_OBJECT_TYPE') ? Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_OBJECT_TYPE') : null,
            'ffd_paymentMethodType' => Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_METHOD_TYPE') ? Configuration::get('PS_RBS_DEFAULT_FFD_PAYMENT_METHOD_TYPE') : null,

            'write_log' => Configuration::get('PS_RBS_WRITE_LOG') ? Configuration::get('PS_RBS_WRITE_LOG') : '0',
        );

        $fields[0]['form'] = array(
//            'setting_fields' => array(
//                'form' => array(
            'legend' => array(
                'title' => 'Настройки плагина'
            ),
            'tabs' => array(
                'basic' => 'Основные настройки',
                'fl54' => 'Передача товарной корзины(ФЗ-54)',

            ),
            'input' => $fields_form,
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'saveSettings',
                'class' => 'button btn btn-default pull-right',
                'desc' => ''
            )
//                )
//            )
        );

        $helper_form = new HelperForm();
        $helper_form->fields_value = $fields_value;
        $helper_form->token = Tools::getValue('token');
        $helper_form->currentIndex = 'index.php?controller=AdminModules&configure=' . $this->name
            . '&tab_module=front_office_features&module_name=' . $this->name;

        return $helper_form->generateForm($fields);
    }

    public function getImageLang($smarty)
    {
        if (_PS_VERSION_ < 1.5)
            $cookie = &$GLOBALS['cookie'];
        else {
            $cookie = $this->context->cookie;
            $cookie->id_lang = $this->context->language->id;
        }

        $path = $smarty['path'];
        $module_path = $this->name . '/views/img/';
        $current_language = new Language($cookie->id_lang);
        $module_lang_path = $module_path . $current_language->iso_code . '/';
        $module_lang_default_path = $module_path . 'en/';
        $path_image = false;

        if (file_exists(_PS_MODULE_DIR_ . $module_lang_path . $path))
            $path_image = _MODULE_DIR_ . $module_lang_path . $path;

        elseif (file_exists(_PS_MODULE_DIR_ . $module_lang_default_path . $path))
            $path_image = _MODULE_DIR_ . $module_lang_default_path . $path;

        if ($path_image)
            return '<img class="thumbnail" src="' . $path_image . '">';
        else
            return '[can not load image "' . $path . '"]';
    }
}
