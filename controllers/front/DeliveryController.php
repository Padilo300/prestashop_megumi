<?php

class DeliveryControllerCore extends FrontController
{
    public $php_self = 'delivery';
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('delivery');
    }
}