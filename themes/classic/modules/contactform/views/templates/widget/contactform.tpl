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
{*<section class="mg-contact-form">
  <div class="container"  style="padding: 0 0!important;">
    <div class="mg-top">
      <span class="mg-title">Контакты</span>
    </div>
    <form action="#" method="post">
      <fieldset class="mg-form">
        <div class="row">
          <div class="order-2 col-lg-6 order-lg-1">
            <div class="mg-fieldset">
              <p>По общим вопросам и заказам продукции</p>
            </div>
            <div class="mg-fieldset">
              <label for="inp1" class="mg-label">Ваше имя</label>
              <input type="text" class="mg-input" id="inp1">
            </div>
            <div class="mg-fieldset">
              <label for="inp4" class="mg-label">E-mail</label>
              <input type="email" class="mg-input" id="inp4">
            </div>
            <div class="mg-fieldset">
              <label for="inp2" class="mg-label">Ваш вопрос</label>
              <textarea rows="1" cols="1" class="mg-textarea" id="inp2" placeholder="Задайте вопрос"></textarea>
            </div>

          </div>
          <div class="order-1 col-lg-6 order-lg-2 d-flex align-items-center pb-0 pb-lg-5 mb-4">
            <div class="ml-0 ml-lg-5 mg-contact-info">
              <div class="mb-3">Ленинград, 3я улица строителей 25, кв. 12</div>
              <a href="tel:+7 920 123-45-67">+7 920 123-45-67</a><br/>
              <a href="mailto:info@megumushop.com">info@megumushop.com</a>
            </div>
          </div>
        </div>
      </fieldset>

    </form>
    <footer class="form-footer text-sm-right">
      <style>
        input[name=url] {
          display: none !important;
        }
      </style>
      <input type="text" name="url" value=""/>
      <input type="hidden" name="token" value="{$token}" />
      <input class="mg-btn mg-btn--black w-100 w-lg-auto" type="submit" name="submitMessage" value="{l s='Send' d='Shop.Theme.Actions'}">
    </footer>
    {if isset($id_module)}
      <div class="form-group row">
        <div class="offset-md-3">
          {hook h='displayGDPRConsent' id_module=$id_module}
        </div>
      </div>
    {/if}
  </div>
</section>*}

<section class="contact-form">
  <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>

    {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}

    {if !$notifications || $notifications.nw_error}
      <section class="form-fields">

        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <h3>{l s='Contact us' d='Shop.Theme.Global'}</h3>
          </div>
        </div>

        <div class="form-group row" style="display: none!important;">
          <label class="col-md-3 form-control-label">{l s='Subject' d='Shop.Forms.Labels'}</label>
          <div class="col-md-6">
            <select name="id_contact" class="form-control form-control-select">
                <option value="1"></option>
            </select>
          </div>
        </div>
        <style>
          .nopaddingleft{
            padding-left: 0!important;
          }
        </style>
        <div class="mg-fieldset">
          <label class="nopaddingleft col-md-3 form-control-label">{l s='Email address' d='Shop.Forms.Labels'}</label>
          <div class="nopaddingleft col-md-9">
            <input
              class="form-control"
              name="from"
              type="email"
              value="{$contact.email}"
              placeholder="{l s='your@email.com' d='Shop.Forms.Help'}"
            >
          </div>
        </div>

        {if $contact.orders}
          <div class="mg-fieldset">
            <label class="col-md-3 form-control-label">{l s='Order reference' d='Shop.Forms.Labels'}</label>
            <div class="col-md-6">
              <select name="id_order" class="form-control form-control-select">
                <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
                {foreach from=$contact.orders item=order}
                  <option value="{$order.id_order}">{$order.reference}</option>
                {/foreach}
              </select>
            </div>
            <span class="col-md-3 form-control-comment">
              {l s='optional' d='Shop.Forms.Help'}
            </span>
          </div>
        {/if}

        <div class="mg-fieldset">
          <label class="nopaddingleft col-md-3 form-control-label">{l s='Message' d='Shop.Forms.Labels'}</label>
          <div class="nopaddingleft col-md-9">
            <textarea
              class="form-control"
              name="message"
              placeholder="{l s='How can we help?' d='Shop.Forms.Help'}"
              rows="3"
            >{if $contact.message}{$contact.message}{/if}</textarea>
          </div>
        </div>

{*        {if isset($id_module)}
          <div class="form-group row">
            <div class="offset-md-3">
              {hook h='displayGDPRConsent' id_module=$id_module}
            </div>
          </div>
        {/if}*}

      </section>

      <footer class="form-footer text-sm-right" style="display: flex;justify-content: left">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="{$token}" />
        <input class="mg-btn mg-btn--black w-100 w-lg-auto" type="submit" name="submitMessage" value="{l s='Send' d='Shop.Theme.Actions'}">
      </footer>
    {/if}

  </form>
</section>
<div style="height: 20px"></div>