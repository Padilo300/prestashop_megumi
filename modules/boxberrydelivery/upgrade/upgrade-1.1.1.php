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
function upgrade_module_1_1_1($module)
{
    $carrier = new Carrier(Configuration::get('boxberry_boxberry'));
    if (!Validate::isLoadedObject($carrier)) {
        return false;
    }

    $carrier->shipping_external = false;
    if (!$carrier->save()) {
        return false;
    }

    Configuration::deleteByName('boxberry_boxberry');
    Configuration::deleteByName('boxberry_boxberry_reference');

    Configuration::updateValue($module::CONF_CARRIER_ID, $carrier->id);
    Configuration::updateValue($module::CONF_CARRIER_REF, $carrier->id_reference);

    return true;
}
