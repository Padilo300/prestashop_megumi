<?php

class RbsPaymentPaymentFailModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    public $display_column_right = false;

    public function initContent()
    {
        if (Tools::version_compare(_PS_VERSION_, '1.6', '<')) {
            $this->display_column_right = true;
        }

        parent::initContent();

        if (Configuration::get('PS_RBS_STATE') != Configuration::get('PS_RBS_STATE_ERROR')) {

            parent::__construct();

            $order_id = Tools::getValue('orderId');

            $curl_data = array('userName' => $this->module->getLogin(), 'password' => $this->module->getPassword(), 'orderId' => $order_id);

            $return_gate = $this->module->gateway('getOrderStatus' . $this->module->ext, $curl_data, $this->module->getLink(), $this->module->write_log);
            $return = $this->module->noCamelCase($return_gate);

            $id_order = Db::getInstance()->getValue('SELECT `id_order` FROM `'
                . _DB_PREFIX_ . 'rbs_payment` WHERE `id_order` = \'' . pSQL($return['ordernumber']) . '\'');

            $order = new Order($id_order);

            $this->module->logger("In this case we change orderState (PS_RBS_STATE_ERROR)\n");
            $order->setCurrentState((int)Configuration::get('PS_RBS_STATE_ERROR'));

        }

        $this->context->smarty->assign(
            array(
                'presta15' => Tools::version_compare(_PS_VERSION_, '1.6', '<'),
            )
        );

        //$this->setTemplate('paymentfail.tpl');
        $this->setTemplate('module:rbspayment/views/templates/front/paymentfail.tpl');
    }

}
