<?php

class MyPageControllerCore extends FrontController
{
    public $php_self = 'mypage';
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('mypage');
    }
}