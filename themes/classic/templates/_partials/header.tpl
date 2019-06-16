{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}

 <div class="mg-header-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col mg-header-top__phone"><i class="mg-icon icon-phone"></i><a href="tel:8-920-123-45-67"><b>8-920-123-45-67</b> - горячая линия круглосуточно</a></div>
        <div class="col text-right">
          <div class="dropdown mg-header-top__delivery">
            <a class="dropdown-toggle" href="#" role="button" id="cargo-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mg-icon icon-cargo"></i>Доставка и Оплата</a>
            <div class="dropdown-menu" aria-labelledby="cargo-link">
              <a class="dropdown-item" href="#">Доставка</a>
              <a class="dropdown-item" href="#">Оплата</a>
            </div>
          </div>
          <a class="mg-header-top__link" href="/ru/myq">Контакты</a>
        </div>
      </div>
    </div>
  </div>
  
 {*  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav> *}
{/block}

{block name='header_top'}

<div class="container">
    <div class="mg-header__content">

     {if $page.page_name == 'index'}

        <a class="mg-header__logo" href="#"><span class="icon-logo-dark"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
      {else}
        <a class="mg-header__logo" href="{$urls.base_url}"><span class="icon-logo-dark"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
      {/if}

      {hook h='displaySearch'}
      {hook h='displayNav2'}
      {hook h='displayNav3'}
    </div>
</div>

{hook h='displaySlider'}

{/block}
