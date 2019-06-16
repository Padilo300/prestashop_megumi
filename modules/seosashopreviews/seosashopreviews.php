<?php
/**
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    SeoSA <885588@bk.ru>
*  @copyright 2012-2017 SeoSA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (version_compare(PHP_VERSION, '5.3', '<'))
	require_once dirname(__FILE__).'/php5.2.inc.php__';
if (!class_exists('TransModSR'))
	require_once(dirname(__FILE__).'/classes/TransModSR.php');
class SeosaShopReviews extends Module
{

	protected $config_form = false;

	/**
	 * @var bool Autoloader Registered
	 */
	protected static $autoloader_registered = false;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->name = 'seosashopreviews';
		$this->tab = 'front_office_features';
		$this->version = '2.1.3';
		$this->author = 'SeoSA';
		$this->need_instance = 0;
		$this->bootstrap = true;
		$this->module_key = '3d08398e69f2a01065b49f95cb2f06cd';

		parent::__construct();

		$this->displayName = $this->l('SeoSA Shop reviews');
		$this->description = $this->l('Adds a block with the reviews about your store.');
	}

	/**
	 * @void
	 */
	public static function registerAutoloader()
	{
		if (self::$autoloader_registered)
			return;

		require_once dirname(__FILE__).'/classes/SSRFolderAutoloader.php';
		self::$autoloader_registered = SSRFolderAutoloader::create(dirname(__FILE__).'/classes');
	}

	/**
	 * @void
	 */
	public static function registerSmartyFunction()
	{
		self::registerAutoloader();

		$smarty = Context::getContext()->smarty;

		if (!array_key_exists('ssr_json_encode', $smarty->registered_plugins['modifier']))
			smartyRegisterFunction(
			    $smarty,
                'modifier',
                'ssr_json_encode',
                version_compare(_PS_VERSION_, '1.7.0.0', '>=')
                    ? 'json_encode' : array('Tools', 'jsonEncode')
            );

		if (!array_key_exists('ssr_json_decode', $smarty->registered_plugins['modifier']))
			smartyRegisterFunction(
			    $smarty,
                'modifier',
                'ssr_json_decode',
                version_compare(_PS_VERSION_, '1.7.0.0', '>=')
                    ? 'json_decode' : array('Tools', 'jsonDecode')
            );

		if (!array_key_exists('no_escape', $smarty->registered_plugins['modifier']))
			smartyRegisterFunction($smarty, 'modifier', 'no_escape', array('SSRTools', 'returnValue'));

        if (!array_key_exists('renderTemplate', $smarty->registered_plugins['function'])) {
            smartyRegisterFunction(
                $smarty, 'function',
                'renderTemplate',
                array(__CLASS__, 'renderTemplate')
            );
        }
	}

	/**
	 * {@inheritdoc}
	 */
	public function install()
	{
		self::registerAutoloader();

		$defaults = array (
			'SPLIT_BY_LANG' => true,
			'ALLOW_ANONYMOUS' => false,
			'AUTO_VALIDATION' => false,
			'RANDOM_REVIEWS' => false,

			'HOME_BLOCK_SHORT_TEXT_LENGTH' => 400,
			'HOME_BLOCK_REVIEWS_COUNT' => 5,
			'HOME_BLOCK_IMAGE_WIDTH' => 410,
			'HOME_BLOCK_SLIDER_TYPE' => 'horizontal',
			'HOME_BLOCK_SLIDER_SPEED' => 500,
			'HOME_BLOCK_SLIDER_RESPONSIVE' => true,
			'HOME_BLOCK_SLIDER_PRELOAD_IMAGES' => 'visible',
			'HOME_BLOCK_SLIDER_RANDOM_START' => false,
			'HOME_BLOCK_SLIDER_INFINITE_LOOP' => false,
			'HOME_BLOCK_SLIDER_HIDE_CONTROL_ON_END' => true,
			'HOME_BLOCK_SLIDER_EASING' => 'ease',
			'HOME_BLOCK_SLIDER_TOUCH_ENABLED' => true,
			'HOME_BLOCK_SLIDER_SWIPE_THRESHOLD' => 50,
			'HOME_BLOCK_SLIDER_AUTO' => false,
			'HOME_BLOCK_SLIDER_PAUSE' => 4000,
			'HOME_BLOCK_SLIDER_AUTO_START' => true,
			'HOME_BLOCK_SLIDER_AUTO_DIRECTION' => 'next',
			'HOME_BLOCK_SLIDER_AUTO_HOVER' => false,
			'HOME_BLOCK_SLIDER_AUTO_DELAY' => 0,
			'HOME_BLOCK_SLIDER_CONTROLS' => true,
			'HOME_BLOCK_SLIDER_AUTO_CONTROLS' => false,
			'HOME_BLOCK_SLIDER_PAGER' => true,
			'HOME_BLOCK_SLIDER_PAGER_TYPE' => 'full',

			'LEFT_BLOCK_SHORT_TEXT_LENGTH' => 250,
			'LEFT_BLOCK_REVIEWS_COUNT' => 5,
			'LEFT_BLOCK_IMAGE_WIDTH' => 260,
			'LEFT_BLOCK_SLIDER_TYPE' => 'fade',
			'LEFT_BLOCK_SLIDER_SPEED' => 500,
			'LEFT_BLOCK_SLIDER_RESPONSIVE' => true,
			'LEFT_BLOCK_SLIDER_PRELOAD_IMAGES' => 'visible',
			'LEFT_BLOCK_SLIDER_RANDOM_START' => true,
			'LEFT_BLOCK_SLIDER_INFINITE_LOOP' => true,
			'LEFT_BLOCK_SLIDER_HIDE_CONTROL_ON_END' => true,
			'LEFT_BLOCK_SLIDER_EASING' => 'ease',
			'LEFT_BLOCK_SLIDER_TOUCH_ENABLED' => true,
			'LEFT_BLOCK_SLIDER_SWIPE_THRESHOLD' => 50,
			'LEFT_BLOCK_SLIDER_AUTO' => false,
			'LEFT_BLOCK_SLIDER_PAUSE' => 4000,
			'LEFT_BLOCK_SLIDER_AUTO_START' => true,
			'LEFT_BLOCK_SLIDER_AUTO_DIRECTION' => 'next',
			'LEFT_BLOCK_SLIDER_AUTO_HOVER' => false,
			'LEFT_BLOCK_SLIDER_AUTO_DELAY' => 0,
			'LEFT_BLOCK_SLIDER_CONTROLS' => true,
			'LEFT_BLOCK_SLIDER_AUTO_CONTROLS' => false,
			'LEFT_BLOCK_SLIDER_PAGER' => false,
			'LEFT_BLOCK_SLIDER_PAGER_TYPE' => 'full',

			'STANDALONE_PAGE_IMAGE_WIDTH' => 305,
		);

		foreach ($defaults as $key => $value)
			SSRConfiguration::updateValue($key, $value);

		$img_dir = _PS_IMG_DIR_.'seosashopreviews';

		return parent::install()
			&& SSRShopReview::createTable()
			&& $this->installTab()
			&& $this->registerHook('displayHome')
			&& $this->registerHook('displayHeader')
			&& $this->registerHook('displayProductTab')
			&& $this->registerHook('displayProductTabContent')
			&& $this->registerHook('displayContentWrapperBottom')
			&& $this->registerHook('displayLeftColumn')
            && $this->registerHook('registerGDPRConsent')
            && $this->registerHook('actionDeleteGDPRCustomer')
            && $this->registerHook('actionExportGDPRData')
			&& (!SSRTools::isPs15() || $this->registerHook('displayFooter'))
			&& (file_exists($img_dir) || mkdir($img_dir))
			&& SSRShopReview::installDemo();
	}

	/**
	 * {@inheritdoc}
	 */
	public function uninstall()
	{
		self::registerAutoloader();

		SSRConfiguration::deleteByName('RANDOM_REVIEWS');
		SSRConfiguration::deleteByName('AUTO_VALIDATION');
		SSRConfiguration::deleteByName('SHORT_TEXT_LENGTH');
		SSRConfiguration::deleteByName('REVIEWS_COUNT_IN_BLOCK');
		SSRConfiguration::deleteByName('REVIEWS_BLOCK_ANIMATION_DELAY');

		$img_dir = _PS_IMG_DIR_.'seosashopreviews';

		return parent::uninstall()
			&& $this->uninstallTab()
			&& SSRShopReview::dropTable()
			&& SSRShopReview::dropTable()
			&& (!file_exists($img_dir) || SSRTools::removeRecursive(_PS_IMG_DIR_.'seosashopreviews'));
	}

	/**
	 * @return Tab
	 */
	public function installTab()
	{
		return SSRTools::createTab($this, 'Reviews', 'AdminSSRShopReviews', Tab::getIdFromClassName('AdminCatalog'));
	}

	/**
	 * @return Tab
	 */
	public function uninstallTab()
	{
		return SSRTools::deleteTabByClass('AdminSSRShopReviews');
	}

	/**
	 * Load the configuration form
	 */
	public function getContentWrap()
	{
		self::registerAutoloader();

		/**
		 * If values have been submitted in the form, process.
		 */
		$this->postProcess();

		return $this->renderForm($this->getConfigurationForm(), $this->getConfigurationFormValues());
	}

	/**
	 * @param           $label
	 * @param           $name
	 * @param bool|true $is_bool
	 * @param array     $values
	 *
	 * @return array
	 */
	public function createSwitchInput($label, $name, $is_bool = true, $values = array())
	{
		if ($is_bool)
		{
			$values = array(
				array(
					'id' => $name.'_ON',
					'value' => 1,
					'label' => $this->l('Enabled')
				),
				array(
					'id' => $name.'_OFF',
					'value' => 0,
					'label' => $this->l('Disabled')
				)
			);
		}
		return array(
			'label' => $label,
			'name' => $name,
			'type' => (_PS_VERSION_ < 1.6 ? 'radio' : 'switch'),
			'class' => 't',
			'values' => $values,
			'is_bool' => $is_bool,
		);
	}

	/**
	 * @param $type
	 *
	 * @return array
	 */
	protected function getBlockConfigurationFormFields($type)
	{
		$type = Tools::strtoupper($type);

		return array(
			array(
				'type' => 'text',
				'label' => $this->l('Text length before cut'),
				'desc' => $this->l('Text is longer than would be split into two parts, before and after the cut.'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SHORT_TEXT_LENGTH'),
			),
			array(
				'type' => 'text',
				'label' => $this->l('Display reviews'),
				'desc' => $this->l('Count of reviews displayed in blocks.'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_REVIEWS_COUNT'),
			),
			array(
				'type' => 'text',
				'label' => $this->l('Image width'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_IMAGE_WIDTH'),
			),
			array(
				'type' => 'select',
				'label' => $this->l('Slider type'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_TYPE'),
				'required' => false,
				'col' => '4',
				'default_value' => 'fade',
				'options' => array(
					'query' => array(
						array('type' => 'fade'),
						array('type' => 'horizontal'),
						array('type' => 'vertical'),
					),
					'id' => 'type',
					'name' => 'type',
				)
			),
			array(
				'type' => 'text',
				'label' => $this->l('Slider speed:'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_SPEED'),
			),
			$this->createSwitchInput($this->l('Responsive'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_RESPONSIVE')),
			array(
				'type' => 'select',
				'label' => $this->l('Preload images'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_PRELOAD_IMAGES'),
				'required' => false,
				'col' => '4',
				'default_value' => 'visible',
				'options' => array(
					'query' => array(
						array('type' => 'all'),
						array('type' => 'visible'),
					),
					'id' => 'type',
					'name' => 'type',
				)
			),
			$this->createSwitchInput($this->l('Random start'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_RANDOM_START')),
			$this->createSwitchInput($this->l('Infinite loop'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_INFINITE_LOOP')),
			$this->createSwitchInput($this->l('Hide control on end'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_HIDE_CONTROL_ON_END')),
			array(
				'type' => 'select',
				'label' => $this->l('Slider easing'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_EASING'),
				'required' => false,
				'col' => '4',
				'default_value' => 'ease',
				'options' => array(
					'query' => array(
						array('type' => 'linear'),
						array('type' => 'ease'),
						array('type' => 'ease-in'),
						array('type' => 'ease-out'),
						array('type' => 'ease-in-out')
					),
					'id' => 'type',
					'name' => 'type',
				)
			),
			$this->createSwitchInput($this->l('Touch enabled'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_TOUCH_ENABLED')),
			array(
				'type' => 'text',
				'label' => $this->l('Swipe threshold'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_SWIPE_THRESHOLD'),
			),
			$this->createSwitchInput($this->l('Auto'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO')),
			array(
				'type' => 'text',
				'label' => $this->l('pause'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_PAUSE'),
			),
			$this->createSwitchInput($this->l('Auto start'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO_START')),
			array(
				'type' => 'select',
				'label' => $this->l('Auto direction'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO_DIRECTION'),
				'required' => false,
				'col' => '4',
				'default_value' => 'next',
				'options' => array(
					'query' => array(
						array('type' => 'next'),
						array('type' => 'prev'),
					),
					'id' => 'type',
					'name' => 'type',
				)
			),
			$this->createSwitchInput($this->l('Auto on hover'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO_HOVER')),
			array(
				'type' => 'text',
				'label' => $this->l('Auto delay'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO_DELAY'),
			),
			$this->createSwitchInput($this->l('Controls'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_CONTROLS')),
			$this->createSwitchInput($this->l('Auto controls'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_AUTO_CONTROLS')),
			$this->createSwitchInput($this->l('Pager'), SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_PAGER')),
			array(
				'type' => 'select',
				'label' => $this->l('Pager type'),
				'name' => SSRConfiguration::toConfigurationName($type.'_BLOCK_SLIDER_PAGER_TYPE'),
				'required' => false,
				'col' => '4',
				'default_value' => 'full',
				'options' => array(
					'query' => array(
						array('type' => 'full'),
						array('type' => 'short'),
					),
					'id' => 'type',
					'name' => 'type',
				)
			),

		);
	}

	/**
	 * Create the structure of your form.
	 */
	protected function getConfigurationForm()
	{
		return array(
			array(
				'form' => array(
					'legend' => array(
						'title' => $this->l('Global settings'),
						'icon' => 'icon-cogs',
					),
					'input' => array(
						$this->createSwitchInput(
							$this->l('Split reviews by language'),
							SSRConfiguration::toConfigurationName('SPLIT_BY_LANG'),
							true
						),
						$this->createSwitchInput(
							$this->l('Allow anonymous'),
							SSRConfiguration::toConfigurationName('ALLOW_ANONYMOUS'),
							true
						),
						$this->createSwitchInput(
							$this->l('Auto moderation'),
							SSRConfiguration::toConfigurationName('AUTO_VALIDATION'),
							true
						),
						$this->createSwitchInput(
							$this->l('Random reviews on home'),
							SSRConfiguration::toConfigurationName('RANDOM_REVIEWS'),
							true
						)
					),
					'submit' => array(
						'title' => $this->l('Save'),
					),
				),
			),
			array(
				'form' => array(
					'legend' => array(
						'title' => $this->l('Home block settings'),
						'icon' => 'icon-cogs',
					),
					'input' => $this->getBlockConfigurationFormFields('HOME'),
					'submit' => array(
						'title' => $this->l('Save'),
					),
				),
			),
			array(
				'form' => array(
					'legend' => array(
						'title' => $this->l('Left block settings'),
						'icon' => 'icon-cogs',
					),
					'input' => $this->getBlockConfigurationFormFields('LEFT'),
					'submit' => array(
						'title' => $this->l('Save'),
					),
				),
			),
			array(
				'form' => array(
					'legend' => array(
						'title' => $this->l('Standalone page settings'),
						'icon' => 'icon-cogs',
					),
					'input' => array(
						array(
							'type' => 'text',
							'label' => $this->l('Image width'),
							'name' => SSRConfiguration::toConfigurationName('STANDALONE_PAGE_IMAGE_WIDTH'),
						),
					),
					'submit' => array(
						'title' => $this->l('Save'),
					),
				),
			),
		);
	}

	/**
	 * @return array
	 */
	protected function getConfigurationFormFieldsNames()
	{
		$names = array();

		foreach ($this->getConfigurationForm() as $form)
			foreach ($form['form']['input'] as $field)
				$names[] = $field['name'];

		return $names;
	}

	/**
	 * @param $type
	 *
	 * @return array
	 */
	protected function getBlockConfigurationValues($type)
	{
		return array(
			'type' => Tools::strtolower($type),
			'short_text_length' => (int)SSRConfiguration::get($type.'_BLOCK_SHORT_TEXT_LENGTH'),
			'mode' => SSRConfiguration::get($type.'_BLOCK_SLIDER_TYPE'),
			'speed' => (int)SSRConfiguration::get($type.'_BLOCK_SLIDER_SPEED'),
			'responsive' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_RESPONSIVE'),
			'preloadImages' => SSRConfiguration::get($type.'_BLOCK_SLIDER_PRELOAD_IMAGES'),
			'randomStart' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_RANDOM_START'),
			'infiniteLoop' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_INFINITE_LOOP'),
			'hideControlOnEnd' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_HIDE_CONTROL_ON_END'),
			'easing' => SSRConfiguration::get($type.'_BLOCK_SLIDER_EASING'),
			'touchEnabled' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_TOUCH_ENABLED'),
			'swipeThreshold' => (int)SSRConfiguration::get($type.'_BLOCK_SLIDER_SWIPE_THRESHOLD'),
			'auto' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO'),
			'pause' => (int)SSRConfiguration::get($type.'_BLOCK_SLIDER_PAUSE'),
			'autoStart' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO_START'),
			'autoDirection' => SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO_DIRECTION'),
			'autoHover' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO_HOVER'),
			'autoDelay' => (int)SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO_DELAY'),
			'controls' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_CONTROLS'),
			'autoControls' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_AUTO_CONTROLS'),
			'pager' => (bool)SSRConfiguration::get($type.'_BLOCK_SLIDER_PAGER'),
			'pagerType' => SSRConfiguration::get($type.'_BLOCK_SLIDER_PAGER_TYPE'),
		);
	}

	/**
	 * @return array
	 */
	protected function getConfigurationFormValues()
	{
		return Configuration::getMultiple($this->getConfigurationFormFieldsNames());
	}

	/**
	 * Save form data.
	 */
	protected function postProcess()
	{
		if (Tools::isSubmit('submitSaveSettings'))
		{
			foreach ($this->getConfigurationFormFieldsNames() as $name)
				Configuration::updateValue($name, Tools::getValue($name));

			Tools::redirectAdmin(sprintf(
				'%s&configure=%s&tab_module=&s&module_name=%s',
				$this->context->link->getAdminLink('AdminModules', true),
				$this->name,
				$this->tab,
				$this->name
			));
		}
	}
	
	public function hookDisplayHeader()
	{
		if (version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
			$this->context->controller->addJqueryPlugin('fancybox');
			self::registerAutoloader();
			$this->addBxSlider();
			$this->context->controller->registerJavascript('modules-sr-script', 'modules/' . $this->name . '/views/js/seosashopreviews.js', ['position' => 'bottom', 'priority' => 150]);
			$this->context->controller->registerJavascript('modules-sr-rating', 'modules/' . $this->name . '/views/js/jquery.rating.pack.js', ['position' => 'bottom', 'priority' => 150]);
			$this->context->controller->registerJavascript('modules-sr-slider', 'modules/' . $this->name . '/views/js/jquery.bxslider.min.js', ['position' => 'bottom', 'priority' => 150]);
		}
	}

	public function hookDisplayHome()
	{
		return $this->renderHook('HOME');
	}

	public function hookDisplayLeftColumn()
	{

		return $this->renderHook('LEFT');
	}

	public function hookDisplayRightColumn()
	{
		return $this->renderHook('LEFT');
	}

	public function hookDisplayProductTab()
	{
		self::registerAutoloader();
		if (SSRTools::isPs15())
			return $this->display(__FILE__, 'tab.tpl');
	}

	public function hookDisplayProductTabContent($params)
	{
		$product = $params['product'];
		return $this->renderHook('HOME', (int)$product->id);
	}
	
	public function hookDisplayContentWrapperBottom()
	{
		if ($this->context->controller->php_self == 'product')
		return $this->renderHook('HOME', Tools::getValue('id_product'));
	}

	/**
	 * @param $type
	 * @param $id_product
	 *
	 * @return string
	 * @throws \Exception
	 * @throws \PrestaShopException
	 * @throws \SmartyException
	 */
	protected function renderHook($type, $id_product = null)
	{
		self::registerAutoloader();
		self::registerSmartyFunction();

		$this->context->controller->addJqueryPlugin('fancybox');

		$this->addBxSlider();
		$this->context->controller->addJS($this->getPathUri().'views/js/'.$this->name.'.js');
        $this->context->controller->addCSS(
            $this->getPathUri().'views/css/'.$this->name.(
                version_compare(_PS_VERSION_, '1.7.0.0', '>=') ? '' : ''
            ) .'.css'
        );
        $this->context->controller->addJS($this->getPathUri().'views/js/jquery.rating.pack.js');

		$reviews = SSRShopReview::collection($this->context->language->id);
		$reviews->where('active', '=', '1');

		if (!is_null($id_product))
		{
			$reviews->where('id_product', '=', (int)$id_product);
			$this->context->smarty->assign(array(
				'id_product' => $id_product
			));
			$show_all_link = $this->context->link->getModuleLink($this->name, 'review', array(
				'id_product' => (int)$id_product
			));
			$form_url = $this->context->link->getModuleLink($this->name, 'review', array(
				'id_product' => (int)$id_product
			));
		}
		else
		{
			$show_all_link = $this->context->link->getModuleLink($this->name, 'review');
			$form_url = $this->context->link->getModuleLink($this->name, 'review');
		}

		if ((bool)SSRConfiguration::get('SPLIT_BY_LANG'))
			$reviews->where('id_lang', '=', (int)$this->context->language->id);

		$reviews->setPageNumber(1);

		if (in_array($type, array('HOME', 'LEFT')) && is_null($id_product))
		{
			if (SSRConfiguration::get('RANDOM_REVIEWS'))
				$reviews->orderBy('RAND()');
			else
				$reviews->orderBy('id_ssr_shop_review', 'desc');
		}

		$reviews->setPageSize((int)SSRConfiguration::get($type.'_BLOCK_REVIEWS_COUNT'));

		$this->context->smarty->assign(array(
			'reviews' => $reviews->getAll(),
			'slider_config' => $this->getBlockConfigurationValues($type),
			'form_url' => $form_url,
			'show_all_link' => $show_all_link,
			'hook_type' => Tools::strtolower($type),
            'gdpr' => Module::isEnabled('psgdpr'),
            'id_module' => $this->id
		));

		return $this->context->smarty->fetch($this->local_path.'views/templates/hook/hook.tpl');
	}

	protected function renderForm($form, $values)
	{
		$helper = new HelperForm();

		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$helper->module = $this;
		$helper->default_form_language = $this->context->language->id;
		$allow_employee_form_lang = (int)(bool)Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
		$helper->allow_employee_form_lang = $allow_employee_form_lang ?: 0;

		$helper->identifier = $this->identifier;
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
			.'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->submit_action = 'submitSaveSettings';

		/** @noinspection PhpUndefinedMethodInspection */
		$helper->tpl_vars = array(
			'fields_value'             => $values, /* Add values for your inputs */
			'languages'                => $this->context->controller->getLanguages(),
			'allow_employee_form_lang' => $allow_employee_form_lang,
			'id_language'              => $this->context->language->id,
		);

		return $helper->generateForm($form);
	}

	/**
	 * @return bool
	 */
	public static function canAddReview()
	{
		self::registerAutoloader();

		$allow_anon = (bool)SSRConfiguration::get('ALLOW_ANONYMOUS');

		if ($allow_anon) return true;

		return Context::getContext()->customer && Context::getContext()->customer->isLogged();
	}

	/**
	 * @void
	 */
	public function addBxSlider()
	{
		if (SSRTools::isPs15())
		{
			$this->context->controller->addJS($this->getPathUri().'views/js/jquery.bxslider.min.js');
			$this->context->controller->addCSS($this->getPathUri().'views/css/jquery.bxslider.css');
		}
		else
			$this->context->controller->addJqueryPlugin('bxslider');
	}

	/**
	 * @void
	 */
	public function hookDisplayFooter()
	{
		self::registerAutoloader();

		if (!SSRTools::isPs15())
			return;

		$this->removeJsFromController(__PS_BASE_URI__.'modules/homeslider/js/jquery.bxSlider.min.js');
		$this->removeCssFromController(__PS_BASE_URI__.'modules/homeslider/bx_styles.css');
	}

	public function removeJsFromController($js_uri)
	{
		$index = array_search($js_uri, $this->context->controller->js_files, true);

		if (false !== $index)
			unset($this->context->controller->js_files[$index]);
	}

	public function removeCssFromController($css_uri)
	{
		if (array_key_exists($css_uri, $this->context->controller->css_files))
			unset($this->context->controller->css_files[$css_uri]);
	}

	public function getContent()
	{
		$this->registerSmartyFunctions();
		$this->context->controller->addJS('https://seosaps.com/ru/module/seosamanager/manager?ajax=1&action=script&iso_code='
			.Context::getContext()->language->iso_code
		);
		$this->context->smarty->assign(array(
			'content_tab' => $this->getContentWrap(),
			'documentation' => $this->getDocumentation()
		));

		return $this->context->smarty->fetch(_PS_MODULE_DIR_.$this->name.'/views/templates/admin/content.tpl');
	}

	public function assignDocumentation()
	{
		$this->registerSmartyFunctions();

		$this->context->controller->addCSS($this->getLocalPath().'views/css/documentation.css');
		$documentation_folder = $this->getLocalPath().'views/templates/admin/documentation';
		$documentation_pages = self::globRecursive($documentation_folder.'/**.tpl');
		natsort($documentation_pages);

		if (version_compare(_PS_VERSION_, '1.6.0', '<'))
			$this->context->controller->addCSS(_MODULE_DIR_.'seosashopreviews/views/css/admin-theme.css');
			$this->context->controller->addCSS(_MODULE_DIR_.'seosashopreviews/views/css/documentation.css');

		$tree = array();
		if (is_array($documentation_pages) && count($documentation_pages))
			foreach ($documentation_pages as &$documentation_page)
			{
				$name = str_replace(array($documentation_folder.'/', '.tpl'), '', $documentation_page);
				$path = explode('/', $name);

				$tmp_tree = &$tree;
				foreach ($path as $key => $item)
				{
					$part = $item;
					if ($key == (count($path) - 1))
						$tmp_tree[$part] = $name;
					else
					{
						if (!isset($tmp_tree[$part]))
							$tmp_tree[$part] = array();
					}
					$tmp_tree = &$tmp_tree[$part];
				}
			}

		$this->context->smarty->assign('tree', $tree);
		$this->context->smarty->assign('documentation_pages', $documentation_pages);
		$this->context->smarty->assign('documentation_folder', $documentation_folder);
	}

	public function getDocumentation()
	{
		$this->assignDocumentation();
		return $this->context->smarty->fetch(_PS_MODULE_DIR_.$this->name.'/views/templates/admin/documentation.tpl');
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

		foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir)
			/** @noinspection SlowArrayOperationsInLoopInspection */
			$files = array_merge($files, self::globRecursive($dir.'/'.basename($pattern), $flags));

		return $files;
	}

	public static function noEscape($value)
	{
		return $value;
	}
	public function registerSmartyFunctions()
	{
		$smarty = $this->context->smarty;
		if (!array_key_exists('get_image_lang', $smarty->registered_plugins['function']))
			smartyRegisterFunction($smarty, 'function', 'get_image_lang', array($this, 'getImageLang'));
		if (!array_key_exists('no_escape', $smarty->registered_plugins['modifier']))
			smartyRegisterFunction($smarty, 'modifier', 'no_escape', array(__CLASS__, 'noEscape'));
		if (class_exists('TransModSR'))
		{
			if (!array_key_exists('ld', $smarty->registered_plugins['modifier']))
				smartyRegisterFunction($smarty, 'modifier', 'ld', array(TransModSR::getInstance(), 'ld'));
		}
	}

	public function getImageLang($smarty)
	{
		if (_PS_VERSION_ < 1.5)
			$cookie = &$GLOBALS['cookie'];
		else
		{
			$cookie = $this->context->cookie;
			$cookie->id_lang = $this->context->language->id;
		}

		$path = $smarty['path'];
		$module_path = $this->name.'/views/img/';
		$current_language = new Language($cookie->id_lang);
		$module_lang_path = $module_path.$current_language->iso_code.'/';
		$module_lang_default_path = $module_path.'en/';
		$path_image = false;
		if (file_exists(_PS_MODULE_DIR_.$module_lang_path.$path))
			$path_image = _MODULE_DIR_.$module_lang_path.$path;
		elseif (file_exists(_PS_MODULE_DIR_.$module_lang_default_path.$path))
			$path_image = _MODULE_DIR_.$module_lang_default_path.$path;

		if ($path_image)
			return '<img class="thumbnail" src="'.$path_image.'">';
		else
			return '[can not load image "'.$path.'"]';
	}

	public static function renderTemplate($params)
    {
        if (isset($params['vars'])) {
            Context::getContext()->smarty->assign($params['vars']);
        }
        return Context::getContext()->smarty->fetch(
            _PS_MODULE_DIR_.'seosashopreviews/views/templates/'.$params['path']
        );
    }

    public function hookActionDeleteGDPRCustomer ($customer)
    {
        if (!empty($customer['email']) && Validate::isEmail($customer['email'])) {
            $sql = "DELETE FROM "._DB_PREFIX_."ssr_shop_review WHERE id_customer = '".(int)$customer['id_customer']."'";
            if (Db::getInstance()->execute($sql)) {
                return json_encode(true);
            }
            return json_encode($this->l('Newsletter Popup : Unable to delete customer using email.'));
        }
    }

    public function hookActionExportGDPRData ($customer)
    {
        if (!Tools::isEmpty($customer['email']) && Validate::isEmail($customer['email'])) {
            $sql = "SELECT * FROM "._DB_PREFIX_."ssr_shop_review WHERE id_customer = '".(int)$customer['id_customer']."'";
            if ($res = Db::getInstance()->ExecuteS($sql)) {
                return json_encode($res);
            }
            return json_encode($this->l('Newsletter Popup : Unable to export customer using email.'));
        }
    }
}
