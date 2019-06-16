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
{block name='login_form'}

    {block name='login_form_errors'}
        {include file='_partials/form-errors.tpl' errors=$errors['']}
    {/block}

    <section class="py-5 mg-signin-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6 mx-auto">
                    <form id="login-form" action="{block name='login_form_actionurl'}{$action}{/block}" method="post">
                        <fieldset>
                            {block name='page_title'}
                                <div class="text-center pb-2 pb-md-5 mg-title">{l s='Log in to your account' d='Shop.Theme.Customeraccount'}</div>
                            {/block}
                            {block name='login_form_fields'}
                                {foreach from=$formFields item="field"}
                                    <div class="mg-fieldset js-parent-focus">
                                        {block name='form_field'}
                                            {form_field field=$field}
                                        {/block}
                                    </div>
                                {/foreach}
                            {/block}
                            <div class="mg-fieldset js-parent-focus">
                                <div class="d-flex justify-content-between align-items-center pt-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Запомнить меня</label>
                                    </div>
                                    <a class="mg-text-grey" href="{$urls.pages.password}" rel="nofollow">{l s='Forgot your password?' d='Shop.Theme.Customeraccount'}</a>
                                </div>
                            </div>
                            {block name='login_form_footer'}
                                <div class="mg-fieldset py-2 py-md-5">
                                    {block name='form_buttons'}
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button id="submit-login" class="mg-btn mg-btn--black w-100" data-link-action="sign-in" type="submit">{l s='Sign in' d='Shop.Theme.Actions'}</button>
                                    {/block}
                                </div>
                            {/block}
                        </fieldset>
                    </form>
                    <div style="text-align: center">
                        <a href="{$urls.pages.register}" data-link-action="display-register-form">
                            {l s='No account? Create one here' d='Shop.Theme.Customeraccount'}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{/block}