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
 * Class SSRShopReview
 */
class SSRShopReview extends SSRObjectModel
{
	/**
	 * @var int
	 */
	public $id;

	/**
	 * @var int
	 */
	public $id_lang;

	/**
	 * @var int
	 */
	public $id_customer;

	/**
	 * @var int
	 */
	public $id_product = 0;

    /**
     * @var string
     */
    public $name = 'Customer';

	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var bool
	 */
	public $active = false;

	public $rating;

	public $date_add;

	/**
	 * @var array
	 */
	public static $definition = array(
		'table'   => 'ssr_shop_review',
		'primary' => 'id_ssr_shop_review',
		'fields'  => array(
			'id_lang'     => array('type' => self::TYPE_INT, 'required' => true, 'validate' => 'isUnsignedId'),
			'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
			'id_product'  => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'name'        => array('type' => self::TYPE_STRING, 'required' => true, 'validate' => 'isCleanHtml'),
			'text'        => array('type' => self::TYPE_STRING, 'required' => true, 'validate' => 'isCleanHtml'),
			'active'      => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add'    => array('type' => self::TYPE_DATE, 'required' => true, 'validate' => 'isDate'),
            'rating'      => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId')
		),
	);

	/**
	 * SSRShopReview constructor.
	 *
	 * @param null $id
	 * @param null $id_lang
	 * @param null $id_shop
	 *
	 * @throws \PrestaShopException
	 */
	public function __construct($id = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id, $id_lang, $id_shop);

		$this->image_dir = _PS_IMG_DIR_.'seosashopreviews/';
	}

	/**
	 * @return bool
	 */
	public static function installDemo()
	{
		$id_lang = (int)Language::getIdByIso('en');
		if (!$id_lang)
			$id_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$texts = array(
			'I like to buy products in your online store. Conveniently, a large and varied assortment.
			All goods ordered and took away itself in paragraph issuing orders.',
			'Good store, happy with everything, except for a very long
			courier delivery (within 2 or even 3 weeks).',
			'Ordered items exactly match the descriptions and photo on the site,
			quality packed. Ordered goods are very happy.',
			'Convenient order from the comfort of home, especially at higher employment during the day.
			 Easily catalog, delivery options. Pleases a wide and high quality range of products.',
		);

		foreach ($texts as $i => $text)
		{
			$id = $i + 1;
			$review = new self;
			$review->id_lang = $id_lang;
			$review->text = $text;
			$review->active = true;
			SSRTools::copy(
				dirname(__FILE__).'/../views/img/demo-'.$id.'.jpg',
				_PS_IMG_DIR_.'seosashopreviews/'.$id.'.jpg'
			);
			$review->save();
			$review->createThumbnails();
		}

		return true;
	}

	/**
	 * @return bool
	 */
	public function hasImage()
	{
		return $this->id && file_exists(_PS_IMG_DIR_.'seosashopreviews/'.$this->id.'.jpg');
	}

	/**
	 * @return null|string
	 */
	public function getImageLocalPath()
	{
		if (!$this->hasImage())
			return null;

		return _PS_IMG_DIR_.'seosashopreviews/'.$this->id.'.jpg';
	}

	/**
	 * @param null $type
	 *
	 * @return null|string
	 */
	public function getImageLink($type = null)
	{
		if (!$this->hasImage())
			return null;

		$uri_path = _PS_IMG_.'seosashopreviews/'.$this->id.($type ? '-'.$type : '').'.jpg';

		return Context::getContext()->link->protocol_content.Tools::getMediaServer($uri_path).$uri_path;
	}

	/**
	 * @param $short_text_length
	 *
	 * @return bool
	 */
	public function hasLongText($short_text_length)
	{
		return Tools::strlen($this->text) > (int)$short_text_length;
	}

	/**
	 * @param $short_text_length
	 *
	 * @return bool|string
	 */
	public function getShortText($short_text_length)
	{
		return Tools::substr(
			$this->text,
			0,
			(int)$short_text_length
		);
	}

	/**
	 * @param null $id_lang
	 *
	 * @return mixed
	 */
	public static function getActiveObjectsCount($id_lang = null)
	{
		$def = static::$definition;
		$sql = 'SELECT COUNT(*) AS c FROM `'._DB_PREFIX_.$def['table'].'` WHERE `active` = 1';
		if ($id_lang)
			$sql .= ' AND `id_lang` = '.(int)$id_lang;

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
	}

	/**
	 * @return mixed
	 */
	public function createThumbnails()
	{
		if (!$this->id)
			return false;

		$image = _PS_IMG_DIR_.'/seosashopreviews/'.$this->id.'.jpg';
		$infos = getimagesize($image);

		if (!file_exists($image) || !$infos)
			return false;

		$sizes = array(
			'home' => SSRConfiguration::get('HOME_BLOCK_IMAGE_WIDTH'),
			'left' => SSRConfiguration::get('LEFT_BLOCK_IMAGE_WIDTH'),
			'standalone' => SSRConfiguration::get('STANDALONE_PAGE_IMAGE_WIDTH')
		);

		$original_width = (int)$infos[0];
		$original_height = (int)$infos[1];
		$aspect = $original_width / $original_height;

		foreach ($sizes as $name => $width)
		{
			$height = round($width / $aspect);
			$thumb = _PS_IMG_DIR_.'/seosashopreviews/'.$this->id.'-'.$name.'.jpg';
			if (!ImageManager::resize($image, $thumb, $width, $height, 'jpg'))
				return false;
		}

		return true;
	}

	public static function getHtmlProductLink($id_product)
	{
		$cache_id = 'SSRShopReview::getHtmlProductLink_'.$id_product;
		if (!Cache::isStored($cache_id))
		{
			Cache::store($cache_id, '<a href="'.Context::getContext()->link->getProductLink($id_product).'">'.Product::getProductName($id_product).'</a>');
			return Cache::retrieve($cache_id);
		}
		else
			Cache::retrieve($cache_id);
	}
}