<?php
/**
* Copyright (C) 2017-2019 Petr Hucik <petr@getdatakick.com>
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@getdatakick.com so we can send you a copy immediately.
*
* @author    Petr Hucik <petr@getdatakick.com>
* @copyright 2017-2019 Petr Hucik
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

use \Revws\Settings;
use \Revws\Visitor;
use \Revws\Permissions;
use \Revws\FrontApp;

class RevwsMyReviewsModuleFrontController extends ModuleFrontController {
  public $module;

  public function __construct() {
    parent::__construct();
    $this->context = Context::getContext();
    $this->php_self = 'module-revws-MyReviews';
  }

  public function initContent() {
    parent::initContent();
    if ($this->isLoggedIn()) {
      $this->renderContent($this->module->getVisitor(), $this->module->getPermissions());
    } else {
      Tools::redirect('index.php?controller=authentication&back='.urlencode($this->selfLink()));
    }
  }

  private function renderContent(Visitor $visitor, Permissions $permissions) {
    $frontApp = $this->module->getFrontApp();
    $widget = $frontApp->addMyReviewsWidget();
    $list = $frontApp->getList($widget['listId']);
    $params = $this->getParams();
    $reviewProduct = (isset($params['review-product'])) ? (int)$params['review-product'] : null;
    if ($reviewProduct && $permissions->canCreateReview('product', $reviewProduct)) {
      $frontApp->addEntity('product', $reviewProduct);
      $frontApp->addInitAction([
        'type' => 'TRIGGER_CREATE_REVIEW',
        'entityType' => 'product',
        'entityId' => $reviewProduct
      ]);
    }

    $this->context->smarty->assign([
      'widget' => $widget,
      'reviewList' => $list->getData(),
      'visitor' => $frontApp->getVisitorData(),
      'reviewEntities' => $frontApp->getEntities(),
      'reviewsData' => $frontApp->getStaticData()
    ]);
    $this->setTemplate('module:revws/views/templates/front/my-reviews.tpl');
  }

  private function isLoggedIn() {
    return $this->context->customer->isLogged();
  }

  private function selfLink() {
    return $this->module->getUrl('MyReviews', $this->getParams());
  }

  private function getParams() {
    $params = [];
    if (Tools::getValue('review-product')) {
      $params['review-product'] = (int)Tools::getValue('review-product');
    }
    return $params;
  }

  public function getBreadcrumbLinks() {
    $breadcrumb = parent::getBreadcrumbLinks();
    $breadcrumb['links'][] = $this->addMyAccountToBreadcrumb();
    $breadcrumb['links'][] = [
      'title' => $this->l('My reviews'),
      'url' => $this->selfLink()
    ];
    return $breadcrumb;
  }

}
