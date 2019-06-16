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
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Order history' d='Shop.Theme.Customeraccount'}

{/block}

{block name='page_content'}
  <section class="mg-profile">
    <div class="container">
      <span class="mg-profile__title" id="customer_name"></span>
      <div class="mg-profile__menu">
        <a class="active" href="{$urls.pages.history}">{l s='Order history and details' d='Shop.Theme.Customeraccount'}</a>
        {if $customer.addresses|count}
          <a href="{$urls.pages.addresses}">{l s='Addresses' d='Shop.Theme.Customeraccount'}</a>
        {/if}
        <a href="{$urls.pages.identity}">  {l s='Information' d='Shop.Theme.Customeraccount'}</a>
        <a href="/module/blockwishlist/mywishlist">Избранное</a>
        <a href="reviews/my-reviews"> Вопросы и ответы</a>
      </div>
    </div>

  <div class="container">
  {if $orders}



    <div class="mg-orders">
      <div class="row mg-order__header d-none d-lg-flex">
        <div class="col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-7 text-center">Товар</div>
          </div>
        </div>
        <div class="col-lg-7 col-xl-8">
          <div class="row">
            <div class="col-md-4 text-center">Дата</div>
            <div class="col-md-3 pl-4">Цена</div>
            <div class="col-md-4">Статус</div>
          </div>
        </div>
      </div>

      {foreach from=$orders item=order}
      <div class="row mg-order__body-line">
        <div class="col-12 col-md-9 col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-5 col-lg-7">
              <div class="row align-items-center">
                <div class="col-6 col-md-12"><div class="mg-order__product-image"><img src="http://presta.padilo.pro/img/p/5/6/56-home_default.jpg" alt="" /></div></div>
                <div class="col-6 col-md-12 d-block d-md-none">
                  <div class="row">
                    <div class="col-md-12"><span class="mg-order__date">9 января 2019</span></div>
                    <div class="pt-3 pb-2 col-md-12 col-lg-3 pt-lg-0 pb-lg-0 pl-lg-4"><span class="mg-order__price">1980</span>
                      {*<span class="mg-ruble">₽</span>*}
                    </div>
                    <div class="col-md-12 pr-0"><span class="mg-order__status mg-order__status--process">в обработке</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5 pr-0">

              <a class="mg-order__title" href="{$order.details.details_url}">{$order.details.reference}</a>
              <span class="mg-order__description">Описание</span>
              <div class="mg-order__colors">
                <a class="mg-order__color mg-order__color--boss-pink" href="#">Boss Pink</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block col-md-3 col-lg-7 col-xl-8">
          <div class="row">
            <div class="col-md-12 col-lg-4 text-lg-center"><span class="mg-order__date">{$order.details.order_date}</span></div>
            <div class="col-md-12 pt-md-3 pb-md-2 col-lg-3 pt-lg-0 pb-lg-0 pl-lg-4"><span class="mg-order__price">{$order.totals.total.value}</span>
              {*<span class="mg-ruble">₽</span>*}
            </div>
            <div class="col-md-12 col-lg-4 pr-0"><span class="mg-order__status mg-order__status--process">  {$order.history.current.ostate_name}</span></div>
          </div>
        </div>
      </div>
      {/foreach}
    </div>

  {/if}
  </div>
</section>
{/block}








{*Старая хуйня снизу*}


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
{*{extends file='customer/page.tpl'}*}

{*{block name='page_title'}*}
  {*{l s='Order history' d='Shop.Theme.Customeraccount'}*}
{*{/block}*}

{*{block name='page_content'}*}
  {*<h6>{l s='Here are the orders you\'ve placed since your account was created.' d='Shop.Theme.Customeraccount'}</h6>*}

  {*{if $orders}*}
    {*<table class="table table-striped table-bordered table-labeled hidden-sm-down">*}
      {*<thead class="thead-default">*}
      {*<tr>*}
        {*<th>{l s='Order reference' d='Shop.Theme.Checkout'}</th>*}
        {*<th>{l s='Date' d='Shop.Theme.Checkout'}</th>*}
        {*<th>{l s='Total price' d='Shop.Theme.Checkout'}</th>*}
        {*<th class="hidden-md-down">{l s='Payment' d='Shop.Theme.Checkout'}</th>*}
        {*<th class="hidden-md-down">{l s='Status' d='Shop.Theme.Checkout'}</th>*}
        {*<th>{l s='Invoice' d='Shop.Theme.Checkout'}</th>*}
        {*<th>&nbsp;</th>*}
      {*</tr>*}
      {*</thead>*}
      {*<tbody>*}
      {*{foreach from=$orders item=order}*}
        {*<tr>*}
          {*<th scope="row">{$order.details.reference}</th>*}
          {*<td>{$order.details.order_date}</td>*}
          {*<td class="text-xs-right">{$order.totals.total.value}</td>*}
          {*<td class="hidden-md-down">{$order.details.payment}</td>*}
          {*<td>*}
              {*<span*}
                      {*class="label label-pill {$order.history.current.contrast}"*}
                      {*style="background-color:{$order.history.current.color}"*}
              {*>*}
                {*{$order.history.current.ostate_name}*}
              {*</span>*}
          {*</td>*}
          {*<td class="text-sm-center hidden-md-down">*}
            {*{if $order.details.invoice_url}*}
              {*<a href="{$order.details.invoice_url}"><i class="material-icons">&#xE415;</i></a>*}
            {*{else}*}
              {*-*}
            {*{/if}*}
          {*</td>*}
          {*<td class="text-sm-center order-actions">*}
            {*<a href="{$order.details.details_url}" data-link-action="view-order-details">*}
              {*{l s='Details' d='Shop.Theme.Customeraccount'}*}
            {*</a>*}
            {*{if $order.details.reorder_url}*}
              {*<a href="{$order.details.reorder_url}">{l s='Reorder' d='Shop.Theme.Actions'}</a>*}
            {*{/if}*}
          {*</td>*}
        {*</tr>*}
      {*{/foreach}*}
      {*</tbody>*}
    {*</table>*}

    {*<div class="orders hidden-md-up">*}
    {*{foreach from=$orders item=order}*}
    {*<div class="order">*}
    {*<div class="row">*}
    {*<div class="col-xs-10">*}
    {*<a href="{$order.details.details_url}"><h3>{$order.details.reference}</h3></a>*}
    {*<div class="date">{$order.details.order_date}</div>*}
    {*<div class="total">{$order.totals.total.value}</div>*}
    {*<div class="status">*}
    {*<span*}
    {*class="label label-pill {$order.history.current.contrast}"*}
    {*style="background-color:{$order.history.current.color}"*}
    {*>*}
    {*{$order.history.current.ostate_name}*}
    {*</span>*}
    {*</div>*}
    {*</div>*}
    {*<div class="col-xs-2 text-xs-right">*}
    {*<div>*}
    {*<a href="{$order.details.details_url}" data-link-action="view-order-details" title="{l s='Details' d='Shop.Theme.Customeraccount'}">*}
    {*<i class="material-icons">&#xE8B6;</i>*}
    {*</a>*}
    {*</div>*}
    {*{if $order.details.reorder_url}*}
    {*<div>*}
    {*<a href="{$order.details.reorder_url}" title="{l s='Reorder' d='Shop.Theme.Actions'}">*}
    {*<i class="material-icons">&#xE863;</i>*}
    {*</a>*}
    {*</div>*}
    {*{/if}*}
    {*</div>*}
    {*</div>*}
    {*</div>*}
    {*{/foreach}*}
    {*</div>*}

  {*{/if}*}
{*{/block}*}
