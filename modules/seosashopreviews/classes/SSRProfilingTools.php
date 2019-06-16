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
 * Class SSRProfilingTools
 */
class SSRProfilingTools
{
	public static $memory_units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');

	/**
	 * @param $size
	 * @return bool
	 */
	public static function convertMemory($size)
	{
		if (!$size) return '0B';

		$i = floor(log($size, 1024));
		$size = round($size / pow(1024, $i), 2);

		return $size.' '.self::$memory_units[(int)$i];
	}

	/**
	 * (PHP 4 &gt;= 4.3.2, PHP 5)<br/>
	 * Returns the amount of memory allocated to PHP
	 * @link http://php.net/manual/en/function.memory-get-usage.php
	 * @param bool $real_usage [optional] <p>
	 * Set this to true to get the real size of memory allocated from
	 * system. If not set or false only the memory used by
	 * emalloc() is reported.
	 * </p>
	 * @return int the memory amount in bytes.
	 */
	public static function getMemoryUsage($real_usage = null)
	{
		return self::convertMemory(memory_get_usage($real_usage));
	}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns the peak of memory allocated by PHP
	 * @link http://php.net/manual/en/function.memory-get-peak-usage.php
	 * @param bool $real_usage [optional] <p>
	 * Set this to true to get the real size of memory allocated from
	 * system. If not set or false only the memory used by
	 * emalloc() is reported.
	 * </p>
	 * @return int the memory peak in bytes.
	 */
	public static function getMemoryPeakUsage($real_usage = null)
	{
		return self::convertMemory(memory_get_peak_usage($real_usage));
	}

	/**
	 * @return callback|null
	 */
	public static function timer()
	{
		$time_start = microtime(true);
		return create_function('', 'return  microtime(true) - '.$time_start.';');
	}
}