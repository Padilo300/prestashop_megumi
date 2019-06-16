<?php
/**
 * BoxberryDelivery: модуль для PrestaShop 1.5-1.7
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2015-2019 Maksim T.
 * @license   https://prestashop.modulez.ru/en/content/3-terms-and-conditions-of-use#proprietary-clean EULA: Proprietary license without copy-protection
 * @link      https://prestashop.modulez.ru/en/ Модули для PrestaShop CMS
 */

use zapalm\prestashopHelpers\controllers\AjaxModuleFrontController;

class BoxberryDeliveryAjaxModuleFrontController extends AjaxModuleFrontController
{
    protected function actionSave()
    {
        $data = json_decode(Tools::getValue('data'));
        if (null !== $data) {
            $details          = BoxberryDetails::loadByCartId($this->context->cart->id);
            $details->id_cart = $this->context->cart->id;
            $details->details = $data->address;
            $details->save();

            $this->ajaxResponse->result = true;
            $this->ajaxResponse->data   = $data->address;
        }
    }

    protected function actionGetAddress()
    {
        $address = false;
        $details = BoxberryDetails::loadByCartId($this->context->cart->id);
        if (Validate::isLoadedObject($details)) {
            $address = $details->details;
        }

        $this->ajaxResponse->result = true;
        $this->ajaxResponse->data   = $address;
    }
}
