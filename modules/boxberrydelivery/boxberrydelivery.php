<?php
/**
 * BoxberryDelivery: модуль для PrestaShop 1.5-1.7
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2015-2019 Maksim T.
 * @license   https://prestashop.modulez.ru/en/content/3-terms-and-conditions-of-use#proprietary-clean EULA: Proprietary license without copy-protection
 * @link      https://prestashop.modulez.ru/en/ Модули для PrestaShop CMS
 */

if (!defined('_PS_VERSION_')) {
    exit;
}
$vendorAutoloader = _PS_MODULE_DIR_ . 'boxberrydelivery/vendor/autoload.php';
if (false === file_exists($vendorAutoloader)) {
    $vendorAutoloader = _PS_ROOT_DIR_ . '/vendor/autoload.php';
}
require_once $vendorAutoloader;
class BoxberryDelivery extends CarrierModule
{
    const CONF_CARRIER_ID  = 'BOXBERRYDELIVERY_CARRIER_ID';

    const CONF_CARRIER_REF = 'BOXBERRYDELIVERY_CARRIER_REF';

    const CONF_API_KEY     = 'BOXBERRYDELIVERY_API_KEY';

    private $confDefault = array(
        self::CONF_CARRIER_ID  => '',
        self::CONF_CARRIER_REF => '',
        self::CONF_API_KEY     => '',
    );

    public function __construct()
    {
        $this->name           = 'boxberrydelivery';
        $this->tab            = 'shipping_logistics';
        $this->version        = '2.3.4';
        $this->author         = 'zapalm';
        $this->bootstrap      = true;
        $this->module_key     = '8b5b67232eb090dbdd7dbd5b03027747';
        $this->author_address = '0x7ed2b1129c17640127da45bf157b8e445bdf711e';

        parent::__construct();

        $this->displayName = $this->l('Delivery by Boxberry');
        $this->description = $this->l('Adds Boxberry delivery method.');
    }

    public function install()
    {
        if (!parent::install()) {
            return false;
        }

        foreach ($this->confDefault as $confName => $confValue) {
            Configuration::updateValue($confName, $confValue);
        }

        if (false === $this->installDB()) {
            return false;
        }

        if (false === $this->createCarrier()) {
            return false;
        }

        $hookRegistrationResult = $this->registerHook('displayHeader')
            && $this->registerHook('displayOrderDetail')
            && $this->registerHook('displayAdminOrder')
            && $this->registerHook('actionCarrierUpdate')
        ;

        if (false === $hookRegistrationResult) {
            return false;
        }

        (new \zapalm\prestashopHelpers\components\qualityService\QualityService($this, true))
            ->setTicketData(array(
                'new' => $this->name . '-' . $this->version,
                'h'   => \zapalm\prestashopHelpers\helpers\UrlHelper::getShopDomain(),
            ))
            ->registerModule(true)
        ;

        return true;
    }

    protected function uninstallDB()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'boxberry_details`');
    }

    protected function installDB()
    {
        $sql = '
            CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'boxberry_details` (
                `id_boxberry_details` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_order`            INT(11) UNSIGNED NOT NULL,
                `id_cart`             INT(11) UNSIGNED NOT NULL,
                `details`             TEXT             NOT NULL,
                `date_upd`            DATETIME         NOT NULL,
                PRIMARY KEY (`id_boxberry_details`)
            ) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8
        ';

        return Db::getInstance()->execute($sql);
    }

    protected function createCarrier()
    {
        $idLanguageDefault = (int)Configuration::get('PS_LANG_DEFAULT');

        $carrier                            = new Carrier();
        $carrier->name                      = 'Boxberry';
        $carrier->active                    = true;
        $carrier->deleted                   = false;
        $carrier->is_free                   = false;
        $carrier->shipping_handling         = false;
        $carrier->range_behavior            = false;
        $carrier->delay[$idLanguageDefault] = $this->l('Pick up at one of delivery points.');
        $carrier->is_module                 = true;
        $carrier->external_module_name      = $this->name;
        $carrier->need_range                = true;
        $carrier->shipping_external         = false;

        if ($carrier->add()) {
            $groups = Group::getGroups(true);
            foreach ($groups as $group) {
                Db::getInstance()->insert('carrier_group', array(
                    'id_carrier' => (int)$carrier->id,
                    'id_group'   => (int)$group['id_group'],
                ));
            }

            $rangePrice             = new RangePrice();
            $rangePrice->id_carrier = $carrier->id;
            $rangePrice->delimiter1 = '0';
            $rangePrice->delimiter2 = '1000000';
            $rangePrice->add();

            $rangeWeight             = new RangeWeight();
            $rangeWeight->id_carrier = $carrier->id;
            $rangeWeight->delimiter1 = '0';
            $rangeWeight->delimiter2 = '1000000';
            $rangeWeight->add();

            $zones = Zone::getZones(true);
            foreach ($zones as $zone) {
                Db::getInstance()->insert('carrier_zone', array(
                    'id_carrier' => (int)$carrier->id,
                    'id_zone'    => (int)$zone['id_zone'],
                ));

                Db::getInstance()->insert('delivery', array(
                    'id_carrier'      => (int)$carrier->id,
                    'id_range_price'  => (int)$rangePrice->id,
                    'id_range_weight' => null,
                    'id_zone'         => (int)$zone['id_zone'],
                    'price'           => 0,
                ), true);

                Db::getInstance()->insert('delivery', array(
                    'id_carrier'      => (int)$carrier->id,
                    'id_range_price'  => null,
                    'id_range_weight' => (int)$rangeWeight->id,
                    'id_zone'         => (int)$zone['id_zone'],
                    'price'           => 0,
                ), true);
            }

            $this->copyFile(
                dirname(__FILE__) . '/views/img/logo.jpg',
                _PS_SHIP_IMG_DIR_ . '/' . (int)$carrier->id . '.jpg'
            );

            Configuration::updateValue(self::CONF_CARRIER_ID, $carrier->id);
            Configuration::updateValue(self::CONF_CARRIER_REF, $carrier->id);
        }

        return true;
    }

    protected function deleteCarrier()
    {
        $idCarrier = (int)Configuration::get(self::CONF_CARRIER_ID);

        $carrier = new Carrier($idCarrier);
        if (Validate::isLoadedObject($carrier)) {
            $carrier->delete();
        }

        $icon = _PS_SHIP_IMG_DIR_ . '/' . $idCarrier . '.jpg';
        if (file_exists($icon)) {
            unlink($icon);
        }

        Configuration::deleteByName(self::CONF_CARRIER_ID);
        Configuration::deleteByName(self::CONF_CARRIER_REF);

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        if (!$this->uninstallDB()) {
            return false;
        }

        if (!$this->deleteCarrier()) {
            return false;
        }

        foreach (array_keys($this->confDefault) as $confName) {
            Configuration::deleteByName($confName);
        }

        return true;
    }

    public function getContent()
    {
        $output = '';

        if (!empty($_POST['submit_save'])) {
            $hasError = false;

            Configuration::updateValue(self::CONF_API_KEY, Tools::getValue(self::CONF_API_KEY));

            $carrier = new Carrier((int)Tools::getValue(self::CONF_CARRIER_ID));
            if (Validate::isLoadedObject($carrier)) {
                Configuration::updateValue(self::CONF_CARRIER_ID, $carrier->id);
                Configuration::updateValue(self::CONF_CARRIER_REF, $carrier->id_reference);
            } else {
                $hasError = true;
            }

            $output .= (
                $hasError
                ? $this->displayError($this->l('Unsuccessful'))
                : $this->displayConfirmation($this->l('Successful'))
            );
        }

        return $output . $this->displayForm();
    }

    protected function displayForm()
    {
        $carriers = Carrier::getCarriers(
            $this->context->language->id,
            false,
            false,
            false,
            null,
            Carrier::ALL_CARRIERS
        );

        $carriersList = array();
        foreach ($carriers as $carrier) {
            $carriersList[] = array(
                'id'   => $carrier['id_carrier'],
                'name' => '#' . $carrier['id_carrier'] . ' : ' . $carrier['name'],
            );
        }

        $formFields = array();
        $formFields[]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
                'icon'  => 'icon-cogs'
            ),
            'input'  => array(
                array(
                    'type'     => 'text',
                    'label'    => $this->l('API key'),
                    'name'     => self::CONF_API_KEY,
                    'required' => true,
                    'desc'     => implode(' ', array(
                        $this->l('Insert your API key.'),
                        $this->l('Something like this:'),
                        ' gfgiLAIqtr8qn4kciPkUmw==',
                    )),
                ),
                array(
                    'type'    => 'select',
                    'name'    => self::CONF_CARRIER_ID,
                    'label'   => $this->l('Boxberry carrier ID'),
                    'desc'    => $this->l('Select module carrier ID.'),
                    'options' => array(
                        'query' => $carriersList,
                        'id'    => 'id',
                        'name'  => 'name',
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default',
            )
        );

        $form = new HelperForm();

        $form->token         = Tools::getAdminTokenLite('AdminModules');
        $form->currentIndex  = AdminController::$currentIndex . '&configure=' . $this->name;
        $form->show_toolbar  = false;
        $form->submit_action = 'submit_save';

        $form->fields_value[self::CONF_API_KEY]    = Configuration::get(self::CONF_API_KEY);
        $form->fields_value[self::CONF_CARRIER_ID] = (int)Configuration::get(self::CONF_CARRIER_ID);

        $output = $form->generateForm($formFields);

        $output .= (new \zapalm\prestashopHelpers\widgets\AboutModuleWidget($this))
            ->setModuleUri('34-delivery-by-boxberry.html')
            ->setLicenseTitle('EULA: Proprietary license without copy-protection')
            ->setLicenseUrl('https://prestashop.modulez.ru/ru/content/3-terms-and-conditions-of-use#proprietary-clean')
        ;

        return $output;
    }

    public function getOrderShippingCost($cart, $shippingCost)
    {
        throw new PrestaShopModuleException($this->l('Invalid method call.'));
    }

    public function getOrderShippingCostExternal($cart)
    {
        throw new PrestaShopModuleException($this->l('Invalid method call.'));
    }

    public function hookActionCarrierUpdate($params)
    {
        $carrier = $params['carrier'];
        if ((int)$carrier->id_reference === (int)Configuration::get(self::CONF_CARRIER_REF)) {
            Configuration::updateValue(self::CONF_CARRIER_ID, $carrier->id);
        }
    }

    public function hookDisplayHeader($params)
    {
        $allow = false;

        if (isset($this->context->controller->php_self)) {
            $allow = in_array($this->context->controller->php_self, array('order-opc', 'order'));
        }

        if (false === $allow && isset($this->context->controller->module)) {
            if ('supercheckout' === $this->context->controller->module->name) {
                $allow = true;
                $this->smarty->assign('moduleSuperCheckout', true);
            }
        }

        if ($allow) {
            $protocol    = Tools::getCurrentUrlProtocolPrefix();
            $widgetJsUrl = $protocol . 'points.boxberry.de/js/boxberry.js';
            $sslEnabled  = ('https://' === $protocol);

            if (version_compare(_PS_VERSION_, '1.7', '>=')) {
                $this->context->controller->registerJavascript(
                    'module-boxberrydelivery-widget',
                    $widgetJsUrl,
                    array('position' => 'bottom', 'priority' => 100, 'server' => 'remote')
                );
            } else {
                $this->context->controller->addJS($widgetJsUrl);
            }

            $this->context->controller->addCSS($this->_path . 'views/css/boxberrydelivery.css');
            $this->context->controller->addJS($this->_path . 'views/js/boxberrydelivery.js');

            $this->smarty->assign(array(
                'carrierId'        => Configuration::get(self::CONF_CARRIER_ID),
                'controllerAction' => $this->context->link->getModuleLink($this->name, 'ajax', array(), $sslEnabled),
                'apiKey'           => Configuration::get(self::CONF_API_KEY),
            ));

            return $this->display(__FILE__, 'header.tpl');
        }

        return '';
    }

    public function hookDisplayAdminOrder($params)
    {
        $order = new Order($params['id_order']);

        $boxberryDetails = BoxberryDetails::loadByCartId($order->id_cart);
        if (false === Validate::isLoadedObject($boxberryDetails)) {
            $boxberryDetails = BoxberryDetails::loadByOrderId($order->id);
        }

        $carrier = new Carrier($order->id_carrier);
        if ((int)$carrier->id_reference !== (int)Configuration::get(self::CONF_CARRIER_REF)) {
            return '';
        }

        $this->context->smarty->assign(array(
            'details'   => $boxberryDetails,
            'psVersion' => (float)_PS_VERSION_,
        ));

        return $this->display(__FILE__, 'views/templates/hook/admin-order.tpl');
    }

    public function hookDisplayOrderDetail($params)
    {
        $order = $params['order'];

        $boxberryDetails = BoxberryDetails::loadByCartId($order->id_cart);
        if (false === Validate::isLoadedObject($boxberryDetails)) {
            $boxberryDetails = BoxberryDetails::loadByOrderId($order->id);
        }

        $carrier = new Carrier($order->id_carrier);
        if ((int)$carrier->id_reference !== (int)Configuration::get(self::CONF_CARRIER_REF)) {
            return '';
        }

        $this->context->smarty->assign(array(
            'details'   => $boxberryDetails,
            'psVersion' => (float)_PS_VERSION_,
        ));

        return $this->display(__FILE__, 'views/templates/hook/order-detail.tpl');
    }

    protected function copyFile($source, $destination)
    {
        if (version_compare(_PS_VERSION_, '1.5.5', '>=')) {
            Tools::copy($source, $destination);
        } else {
            copy($source, $destination);
        }
    }
}
