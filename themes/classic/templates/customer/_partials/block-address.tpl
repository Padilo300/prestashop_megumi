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
{block name='address_block_item'}


  {block name='address_block_item_actions'}

  <div class="mg-adress">
    <div class="row">
      <div class="col-lg-8 col-xl-6">
        <form action="#" method="post">
          <fieldset class="mg-fieldset">
            <label for="inp1" class="mg-label">Город</label>
            <input type="text" class="mg-input" value="{$address.city}" id="inp1">
          </fieldset>
          <fieldset class="mg-fieldset">
            <label for="inp2" class="mg-label">Адрес</label>
            <textarea rows="1" cols="1" class="mg-textarea" id="inp2">{$address.address1} {$address.address2} </textarea>
          </fieldset>
          <fieldset class="mg-fieldset">
            <label for="inp3" class="mg-label">Телефон</label>
            <input type="text" class="mg-input" value="{$address.phone  }" id="inp3">
          </fieldset>
          <fieldset class="mg-fieldset">
            <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--change" href="{url entity=address id=$address.id}">Изменить адрес</a></div>
            <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--add" href="{$urls.pages.address}">Добавить новый адрес</a></div>
          </fieldset>
        </form>

      </div>
    </div>
  </div>




  {*<article id="address-{$address.id}" class="address" data-id-address="{$address.id}">*}
    {*<div class="address-body">*}
      {*<h4>{$address.alias}</h4>*}
      {*<address>{$address.formatted nofilter}</address>*}
    {*</div>*}

 {**}
      {*<div class="address-footer">*}
        {*<a href="{url entity=address id=$address.id}" data-link-action="edit-address">*}
          {*<i class="material-icons">&#xE254;</i>*}
          {*<span>{l s='Update' d='Shop.Theme.Actions'}</span>*}
        {*</a>123*}
        {*<a href="{url entity=address id=$address.id params=['delete' => 1, 'token' => $token]}" data-link-action="delete-address">*}
          {*<i class="material-icons">&#xE872;</i>*}
          {*<span>{l s='Delete' d='Shop.Theme.Actions'}</span>*}
        {*</a>*}
      {*</div>*}
      {*123*}
    {/block}
  {*</article>*}
{/block}
