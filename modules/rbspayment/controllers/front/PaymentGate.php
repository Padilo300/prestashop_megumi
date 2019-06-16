<?php

class RbsPaymentPaymentGateModuleFrontController extends ModuleFrontController
{
    /** @var RbsPaymentPayment */
    public $module;

    public function initContent()
    {

        parent::initContent();
        $id_order = Tools::getValue('id_order');
        $order = new Order($id_order);

        if ($this->context->customer->id != $order->id_customer)
            Tools::redirect($this->context->link->getPageLink('history'));

        $order_module = Module::getInstanceByName($order->module);

        if (!$id_order || $order_module->id != $this->module->id)
            Tools::redirect($this->context->link->getPageLink('history'));

        $info = $this->module->getPaymentGateValues($id_order);

        $auth_canceled = $info['order_status'] == RbsPayment::_AUTHORIZATION_CANCELED_;
        $auth_failed = $info['order_status'] == RbsPayment::_AUTHORIZATION_FAILED_;

        if (!$info || $auth_canceled || $auth_failed) {
            if ($this->module->registerInPaymentGate($id_order)) {
                $response = $this->module->getPaymentGateValues($id_order);

                if (!$response)
                    die(Tools::displayError($this->module->l('Failed to register ordering. Error code #')) . sprintf('%1$05d', __LINE__));
                else {
                    Tools::redirect($response['form_url'], '');
                }

            } else {
                die(Tools::displayError($this->module->l('Failed to register ordering. Error code #')) . sprintf('%1$05d', __LINE__));
            }

        } else {
            Tools::redirect($info['form_url'], '');
        }
    }
}