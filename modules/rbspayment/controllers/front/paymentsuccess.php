<?php


class RbsPaymentPaymentSuccessModuleFrontController extends ModuleFrontController
{
//    public $ssl = true;
//    public $display_column_left = false;
//    public $display_column_right = false;


    public function initContent()
    {

        parent::initContent();

        if (Configuration::get('PS_RBS_STATE') != Configuration::get('PS_RBS_STATE_DEFAULT'))
        {

            parent::__construct();

            $order_id = Tools::getValue('orderId');

            $curl_data = array('userName' => $this->module->getLogin(), 'password' => $this->module->getPassword(), 'orderId' => $order_id);

            $return_gate = $this->module->gateway('getOrderStatus'.$this->module->ext, $curl_data, $this->module->getLink(), $this->module->write_log);
            $return = $this->module->noCamelCase($return_gate);

            $id_order = Db::getInstance()->getValue('SELECT `id_order` FROM `'
                ._DB_PREFIX_.'rbs_payment` WHERE `id_order` = \''.pSQL($return['ordernumber']).'\'');

            $order = new Order($id_order);

            if ($id_order && isset($return['orderstatus']) && ($return['orderstatus'] == 1 || $return['orderstatus'] == 2))
            {

                $this->module->logger("In this step we change orderState (PS_RBS_STATE)\n");

                //if current != settings
                if ($order->current_state != (int)Configuration::get('PS_RBS_STATE')) {
                    $order->setCurrentState((int)Configuration::get('PS_RBS_STATE'));
//                    $this->context->link->getModuleLink($this->module->name, 'paymentsuccess', array(), true);
                }

            }
            else {

                $this->module->logger("In this case we change orderState (PS_RBS_STATE_ERROR)\n");
                $order->setCurrentState((int)Configuration::get('PS_RBS_STATE_ERROR'));
//                $this->context->link->getModuleLink($this->module->name, 'paymentfail', array(), true);

            }

        }

        $this->context->smarty->assign(
            array(
                'presta15' => Tools::version_compare(_PS_VERSION_, '1.6', '<'),
                'order_reference' => $order->reference,
            )
        );

        $this->setTemplate('module:rbspayment/views/templates/front/paymentsuccess.tpl');
    }
}