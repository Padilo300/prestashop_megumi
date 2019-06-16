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
{block name='customer_form'}
  {*{block name='customer_form_errors'}*}
    {*{include file='_partials/form-errors.tpl' errors=$errors['']}*}
  {*{/block}*}

  <section>
<form action="{block name='customer_form_actionurl'}{$action}{/block}" id="customer-form" class="js-customer-form" method="post">

    {block "form_fields"}


    <div class="mg-adress">
      <div class="row">
        <div class="col-lg-8 col-xl-6">
          <form action="#" method="post">

            <fieldset class="mg-fieldset">
              <label for="inp1" class="mg-label">Имя</label>
              <input type="text" name="firstname" class="mg-input" value="{$formFields.firstname.value}" id="inp1">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp1" class="mg-label">Фамилия</label>
              <input type="text" name="lastname" class="mg-input" value="{$formFields.lastname.value}" id="inp1">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp3" class="mg-label">Телефон</label>
              <input type="text" disabled name="phone" class="mg-input" value="{$formFields.phone.value}" id="inp3">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp4" class="mg-label">E-mail</label>
              <input class="form-control" name="email" type="email" value="{$formFields.email.value}" class="mg-input" required="">
            </fieldset>
            <fieldset class="mg-fieldset">
              <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--change"  onclick="document.getElementById('customer-form').submit()" href="#">Изменить данные</a></div>
            </fieldset>

        </div>
        <div class="col-lg-4 col-xl-6">
          <fieldset class="mg-fieldset">
              <label for="inp3" class="mg-label">Пароль</label>
              <input type="password" name="password" class="mg-input" value="{$formFields.password.value}" id="inp3">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp4" class="mg-label">Новый пароль</label>
              <input type="password" name="new_password" class="mg-input" value="" id="inp4">
            </fieldset>
        </div>
      </div>
    </div>

        {$formFields.firstname = 0}
        {$formFields.lastname = 0}
        {$formFields.email = 0}
        {$formFields.lastname = 0}
        {$formFields.email = 0}
        {$formFields.password = 0}
        {$formFields.new_password = 0}


<div class="hidd" style="display: none">
    {*<fieldset class="mg-fieldset">*}
      {foreach from=$formFields item="field"}
        {block "form_field"}
          {form_field field=$field}
        {/block}
      {/foreach}
      {*{$hook_create_account_form nofilter}*}
    {*</fieldset>*}
    </div>
  </section>
    {/block}


  {block name='customer_form_footer'}
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      {block "form_buttons"}
        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          {l s='Save' d='Shop.Theme.Actions'}
        </button>
      {/block}
    </footer>
  {/block}

</form>
{/block}
