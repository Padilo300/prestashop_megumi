<?php
/**
 * BoxberryDelivery: модуль для PrestaShop 1.5-1.7
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2015-2019 Maksim T.
 * @license   https://prestashop.modulez.ru/en/content/3-terms-and-conditions-of-use#proprietary-clean EULA: Proprietary license without copy-protection
 * @link      https://prestashop.modulez.ru/en/ Модули для PrestaShop CMS
 */
class BoxberryDetails extends ObjectModel
{
    public $id_order;

    public $id_cart;

    public $details;

    public $date_upd;

    public static $definition = array(
        'table'   => 'boxberry_details',
        'primary' => 'id_boxberry_details',
        'fields'  => array(
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_cart'  => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'details'  => array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
        ),
    );

    public static function loadByCartId($idCart)
    {
        $collection = self::find()->where('id_cart', '=', (int)$idCart);
        if ($collection->count() > 0) {
            return $collection->getFirst();
        }

        return new self();
    }

    public static function loadByOrderId($idOrder)
    {
        $collection = self::find()->where('id_order', '=', (int)$idOrder);
        if ($collection->getFirst()) {
            return $collection->getFirst();
        }

        return new self();
    }

    public static function find()
    {
        if (version_compare(_PS_VERSION_, '1.6', '>=')) {
            return new PrestaShopCollection(__CLASS__);
        }

        return new Collection(__CLASS__);
    }
}
