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
 * @author    SeoSA <885588@bk.ru>
 * @copyright 2012-2017 SeoSA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

/**
 * Class AdminSSRShopReviewsController
 */
class AdminSSRShopReviewsController extends ModuleAdminController
{
	/**
	 * @var SeosaShopReviews
	 */
	public $module;
	/**
	 * @var SSRShopReview
	 */
	public $object;

	public function __construct()
	{
		$this->bootstrap = true;
		$this->lang = false;
		$this->table = 'ssr_shop_review';
		$this->className = 'SSRShopReview';

		$this->addRowAction('edit');
		$this->addRowAction('delete');

        if(version_compare(_PS_VERSION_, '1.7.0.0', '>=') && !$this->translator) {
            $this->translator = Context::getContext()->getTranslator();
        }

        parent::__construct();

		$this->bulk_actions = array(
			'delete' => array(
				'text' => $this->l('Delete selected'),
				'confirm' => $this->l('Delete selected reviews?'),
			),
			'enableSelection' => array(
				'text' => $this->l('Enable selected'),
			),
			'disableSelection' => array(
				'text' => $this->l('Disable selected'),
				'confirm' => $this->l('Disable selected reviews?'),
			)
		);

		$this->{'fieldImageSettings'} = array(
			'name' => 'image',
			'dir' => 'seosashopreviews'
		);

		$this->fields_list = array(
			'id_ssr_shop_review' => array(
				'title' => $this->l('ID'),
				'align' => 'center',
				'class' => 'fixed-width-xs'
			),
			'customer' => array(
				'title' => $this->l('Customer'),
				'havingFilter' => true,
			),
            'name' => array(
                'title' => $this->l('Name'),
            ),
            'rating' => array(
                'title' => $this->l('Rating'),
            ),
			'text' => array(
				'title' => $this->l('Text'),
				'search' => true,
				'orderby' => false,
				'filter' => false,
			),
			'language' => array(
				'title' => $this->l('Language'),
				'havingFilter' => true,
			),
			'image' => array(
				'title' => $this->l('Image'),
				'align' => 'center',
				'picture' => true,
				'orderby' => false,
				'filter' => false,
				'search' => false
			),
			'product_name' => array(
				'title' => $this->l('Product name'),
				'orderby' => false,
				'filter' => false,
				'search' => false
			),
			'active' => array(
				'title' => $this->l('Enabled'),
				'align' => 'center',
				'active' => 'status',
				'type' => 'bool'
			)
		);

		SeosaShopReviews::registerAutoloader();
		SeosaShopReviews::registerSmartyFunction();
	}

	public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
	{
		$this->{'_select'} .= 'l.`name` as language, CONCAT(LEFT(c.`firstname`, 1), \'. \', c.`lastname`) AS `customer`,
		(SELECT pl.`name` FROM '._DB_PREFIX_.'product_lang pl WHERE pl.`id_lang` = '
			.(int)$this->context->language->id.' AND pl.`id_product` = a.`id_product` LIMIT 0,1) as product_name';
		$this->{'_join'} .= ' LEFT JOIN `'._DB_PREFIX_.'lang` l ON a.`id_lang` = l.`id_lang`';
		$this->{'_join'} .= ' LEFT JOIN `'._DB_PREFIX_.'customer` c ON (c.`id_customer` = a.`id_customer`)';

		parent::getList($id_lang, $order_by, $order_way, $start, $limit, $id_lang_shop);

		$headers = array();
		if (function_exists('getallheaders'))
		{
			$getallheaders = 'getallheaders';
			$headers = $getallheaders();
		}

		foreach ($this->{'_list'} as &$row)
		{
			$row['image'] = false;
			$image = _PS_IMG_DIR_.'/seosashopreviews/'.$row['id_ssr_shop_review'].'.jpg';
			if (file_exists($image))
				$row['image'] = ImageManager::thumbnail(
					_PS_IMG_DIR_.'/seosashopreviews/'.$row['id_ssr_shop_review'].'.jpg',
					$this->module->name.'_mini_'.$row['id_ssr_shop_review'].'_'.$this->context->shop->id.'.jpg',
					45,
					'jpg',
					true,
					array_key_exists('Pragma', $headers) && $headers['Pragma'] === 'no-cache'
				);
		}
	}

	public function renderForm()
	{
		$image = _PS_IMG_DIR_.'/seosashopreviews/'.$this->object->id.'.jpg';
		$image_url = ImageManager::thumbnail(
			$image,
			$this->table.'_'.
			(int)$this->object->id.'.'.
			$this->imageType,
			350,
			$this->imageType,
			true,
			true
		);
		$image_size = file_exists($image) ? filesize($image) / 1000 : false;

		if (SSRTools::isPs15())
		{
			$this->fields_value = array(
				'image' => $image_url ? $image_url : false,
				'size' => $image_size
			);
		}

		$this->fields_form = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->l('Review'),
				'icon' => 'icon-tags'
			),
			'input' => array(
				$this->module->createSwitchInput($this->l('Displayed'), 'active'),
                array(
                    'type' => 'select',
                    'label' => $this->l('Rating'),
                    'name' => 'rating',
                    'col' => '4',
                    'default_value' => 3,
                    'options' => array(
                        'query' => array(
                            array('id' => 0),
                            array('id' => 1),
                            array('id' => 2),
                            array('id' => 3),
                            array('id' => 4),
                            array('id' => 5)),
                        'id' => 'id',
                        'name' => 'id'
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Name'),
                    'name' => 'name',
                    'required' => true,
                    'hint' => $this->l('Invalid characters:').' <>;=#{}'
                ),
				array(
					'type' => 'select',
					'label' => $this->l('Language'),
					'name' => 'id_lang',
					'required' => true,
					'col' => '4',
					'default_value' => (int)Configuration::get('PS_LANG_DEFAULT'),
					'options' => array(
						'query' => $this->getLanguages(),
						'id' => 'id_lang',
						'name' => 'iso_code',
						'default' => array(
							'value' => null,
							'label' => '--',
						),
					)
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Text'),
					'name' => 'text',
					'autoload_rte' => true,
					'rows' => 5,
					'cols' => 40,
					'hint' => $this->l('Invalid characters:').' <>;=#{}'
				),
				array(
					'type' => 'file',
					'label' => $this->l('Image'),
					'name' => 'image',
					'display_image' => true,
					'image' => $image_url ? $image_url : false,
					'size' => $image_size,
					'delete_url' => self::$currentIndex.'&'.$this->identifier.'='.$this->object->id.'&token='.$this->token.'&deleteImage=1',
					'hint' => $this->l('Upload image from your computer.'),
				),
			),
			'submit' => array(
				'title' => $this->l('Save')
			)
		);

		return parent::renderForm();
	}

	/**
	 * @return bool
	 */
	public function postProcess()
	{
		$force_delete = Tools::isSubmit('forcedeleteImage');
		if ($force_delete || (isset($_FILES['image']) && $_FILES['image']['size'] > 0) || Tools::getValue('deleteImage'))
		{
			$this->processForceDeleteImage();
			if ($force_delete)
				Tools::redirectAdmin(self::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminSSRShopReviews').'&conf=7');
		}

		return parent::postProcess();
	}

	/**
	 * @param int $id
	 *
	 * @return bool
	 */
	protected function postImage($id)
	{
		$ret = parent::postImage($id);

		if ($ret)
			$this->object->createThumbnails();

		return $ret;
	}

	/**
	 * @void
	 */
	public function processForceDeleteImage()
	{
		/** @var SSRShopReview $review */
		$review = $this->loadObject(true);
		if (Validate::isLoadedObject($review))
			$review->deleteImage(true);
	}
}