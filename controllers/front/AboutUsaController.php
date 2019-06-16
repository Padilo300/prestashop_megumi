<?php

class AboutUsaControllerCore extends FrontController
{
    public $php_self = 'aboutusa';
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('aboutusa');
    }
}