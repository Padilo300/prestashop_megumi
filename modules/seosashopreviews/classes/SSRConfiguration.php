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

/**
 * Class SSRConfiguration
 */
class SSRConfiguration
{
	/**
	 * @var string
	 */
	private static $prefix = '';
	private static $max_len = 32;
	/**
	 * @var bool
	 */
	private static $initialized = false;

	/**
	 *
	 */
	public static function initialize()
	{
		if (self::$initialized)
			return;

		$regexp = '/modules\/(.*)\/'.preg_quote(basename(__FILE__), '/').'/usi';
		$matches = array();
		$prefix = '';

		if (preg_match($regexp, __FILE__, $matches))
		{
			$match = $matches[1];
			$str_pos = 'strpos';
			$sub_str = 'substr';
			$pos = $str_pos($match, DIRECTORY_SEPARATOR);
			$module = $sub_str($match, 0, $pos);
			$module = Module::getInstanceByName($module);
			$class = get_class($module);
			$prefix = preg_replace('/[a-z]/', '', $class);
		}

		self::$initialized = true;
		self::$prefix = $prefix.'_';
		self::$max_len = 32 - Tools::strlen(self::$prefix);
	}

	/**
	 * @param $name
	 * @return bool|string
	 */
	public static function toConfigurationName($name)
	{
		if (!self::$initialized)
			self::initialize();

		if (version_compare(_PS_VERSION_, '1.6', '<') && Tools::strlen($name) > self::$max_len)
			$name = Tools::substr(md5($name), 0, self::$max_len);

		return Tools::strtoupper(self::$prefix.$name);
	}

	/**
	 * @param $key
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return int
	 */
	public static function getIdByName($key, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::getIdByName(self::toConfigurationName($key), $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param null $id_lang
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return string
	 */
	public static function get($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::get(self::toConfigurationName($key), $id_lang, $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param null $id_lang
	 * @return string
	 */
	public static function getGlobalValue($key, $id_lang = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::getGlobalValue(self::toConfigurationName($key), $id_lang);
	}

	/**
	 * @param $key
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return array
	 */
	public static function getInt($key, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::getInt(self::toConfigurationName($key), $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param null $id_lang
	 * @return array
	 */
	public static function getMultiShopValues($key, $id_lang = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::getMultiShopValues(self::toConfigurationName($key), $id_lang);
	}

	/**
	 * @param $keys
	 * @param null $id_lang
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return array
	 * @throws PrestaShopException
	 */
	public static function getMultiple($keys, $id_lang = null, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		foreach ($keys as &$key)
			$key = self::toConfigurationName($key);
		unset($key);

		return Configuration::getMultiple($keys, $id_lang, $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param null $id_lang
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return bool
	 */
	public static function hasKey($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::hasKey(self::toConfigurationName($key), $id_lang, $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param $values
	 * @param null $id_shop_group
	 * @param null $id_shop
	 */
	public static function set($key, $values, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		Configuration::set(self::toConfigurationName($key), $values, $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @param $values
	 * @param bool|false $html
	 * @return bool
	 */
	public static function updateGlobalValue($key, $values, $html = false)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::updateGlobalValue(self::toConfigurationName($key), $values, $html);
	}

	/**
	 * @param $key
	 * @param $values
	 * @param bool|false $html
	 * @param null $id_shop_group
	 * @param null $id_shop
	 * @return bool
	 */
	public static function updateValue($key, $values, $html = false, $id_shop_group = null, $id_shop = null)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::updateValue(self::toConfigurationName($key), $values, $html, $id_shop_group, $id_shop);
	}

	/**
	 * @param $key
	 * @return bool
	 */
	public static function deleteByName($key)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::deleteByName(self::toConfigurationName($key));
	}

	/**
	 * @param $key
	 */
	public static function deleteFromContext($key)
	{
		if (!self::$initialized)
			self::initialize();

		Configuration::deleteFromContext(self::toConfigurationName($key));
	}

	/**
	 * @param $key
	 * @param $id_lang
	 * @param $context
	 * @return bool
	 */
	public static function hasContext($key, $id_lang, $context)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::hasContext(self::toConfigurationName($key), $id_lang, $context);
	}

	/**
	 * @param $key
	 * @return bool
	 */
	public static function isOverriddenByCurrentContext($key)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::isOverridenByCurrentContext(self::toConfigurationName($key));
	}

	/**
	 * @param $key
	 * @return bool
	 */
	public static function isLangKey($key)
	{
		if (!self::$initialized)
			self::initialize();

		return Configuration::isLangKey(self::toConfigurationName($key));
	}
}