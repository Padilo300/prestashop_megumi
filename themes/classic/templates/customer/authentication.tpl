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

{*<div class="col-lg-8 col-xl-6 mx-auto">
  <form action="#" method="post">
    <fieldset>
      <div class="text-center pb-2 pb-md-5 mg-title">Авторизация</div>
      <div class="mg-fieldset">
        <label for="inp1" class="mg-label">Имя пользователя или E-mail*</label>
        <input type="text" class="mg-input mg-input--transparent" id="inp1" required>
      </div>
      <div class="mg-fieldset">
        <label for="inp4" class="mg-label">Пароль*</label>
        <input type="password" class="mg-input mg-input--transparent" id="inp4" required>
        <div class="d-flex justify-content-between align-items-center pt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
            <label class="custom-control-label" for="customCheck1">Запомнить меня</label>
          </div>
          <a class="mg-text-grey" href="#">Забыли пароль?</a>
        </div>
      </div>
      <div class="mg-fieldset py-2 py-md-5">
        <button class="mg-btn mg-btn--black w-100" type="submit">Авторизация</button>
      </div>
    </fieldset>
  </form>
</div>*}


{extends file='page.tpl'}

{block name='page_content'}
    {block name='login_form_container'}
      <section class="login-form">
        {render file='customer/_partials/login-form.tpl' ui=$login_form}
      </section>
      {block name='display_after_login_form'}
        {hook h='displayCustomerLoginFormAfter'}
      {/block}
    {/block}
{/block}
