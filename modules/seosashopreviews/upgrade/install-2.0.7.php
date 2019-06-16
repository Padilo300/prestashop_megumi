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

function upgrade_module_2_0_7($module)
{
	$module->registerHook('displayProductTab');
	$module->registerHook('displayProductTabContent');

	$list_fields = Db::getInstance()->executeS('SHOW FIELDS FROM `'._DB_PREFIX_.'ssr_shop_review`');
    $sql = array();
	if (is_array($list_fields)) {
		foreach ($list_fields as $k => $field)
			$list_fields[$k] = $field['Field'];

		if (!in_array('id_product', $list_fields)) {
            $sql[] = 'ALTER TABLE  `' . _DB_PREFIX_ . 'ssr_shop_review`
				ADD  `id_product` INT NOT NULL DEFAULT  "0"';
        }

		if (!in_array('date_add', $list_fields)) {
		    $sql[] = 'ALTER TABLE  `'._DB_PREFIX_.'ssr_shop_review`
				ADD  `date_add` DATETIME NOT NULL';
        }

        if (!in_array('rating', $list_fields)) {
            $sql[] = 'ALTER TABLE  `'._DB_PREFIX_.'ssr_shop_review`
				ADD  `rating` INT NOT NULL DEFAULT  "3"';
        }

        if (!in_array('name', $list_fields)) {
            $sql[] = 'ALTER TABLE  `'._DB_PREFIX_.'ssr_shop_review`
				ADD  `name` VARCHAR(255) NOT NULL';
        }

        foreach ($sql as $query) {
		    if (!Db::getInstance()->execute($query)) return false;
        }
	} else return false;
	return true;
}