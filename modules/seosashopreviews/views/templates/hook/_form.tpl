{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    SeoSA <885588@bk.ru>
*  @copyright 2012-2017 SeoSA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if SeosaShopReviews::canAddReview()}
    {if isset($php_self) && $php_self == 'seosa-review'}
      <div class="block seosashopreviews {$hook_type|escape:'quotes':'UTF-8'}{if SSRTools::isPs15()} prestashop-1_5{/if}" {if SSRTools::isPs15()}id="idTab18022016"{/if}>
      <h4 class="title_block">{l s='Add reviews' mod='seosashopreviews'}</h4>
      <div class="block_content">
    {/if}
  <div class="shopreviews_form">

      {*<form method="post" action="{$form_url|escape:'quotes':'UTF-8'}" enctype="multipart/form-data">*}
    <form method="post" action="
{if isset($form_url)}
{$form_url|escape:'quotes':'UTF-8'}
{else}
{$vars_form.form_url|escape:'quotes':'UTF-8'}
       {/if}
" enctype="multipart/form-data">
      <fieldset class="mg-form">
        <div class="row">
          <div class="col-lg-6">
            <div class="mg-fieldset">
              <label for="inp1" class="mg-label">Ваше имя</label>
              <input type="text" class="mg-input" id="inp1" name="name">
            </div>
            <div class="mg-fieldset">
              <label for="inp4" class="mg-label">E-mail</label>
              <input type="email" class="mg-input" id="inp4" name="mail">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mg-fieldset">
              <label for="inp2" class="mg-label">Текст отзыва</label>
              <textarea name="text" rows="1" cols="1" class="mg-textarea" id="inp2" placeholder="Напишите ваши впечатления о нашем магазине"></textarea>
            </div>
          </div>
          <input type="hidden" name="rating" id="hui-osla">
          <div class="col-lg-12">
            <div class="mg-fieldset">
              <label for="inp2" class="mg-label">Поставьте оценку</label>
              <div class="mg-main-customers__item-rating mg-main-customers__item-rating--active" id="pa-rating">
                <i class="pa-rating" data-val="1"></i>
                <i class="pa-rating" data-val="2"></i>
                <i class="pa-rating" data-val="3"></i>
                <i class="pa-rating" data-val="4"></i>
                <i class="pa-rating" data-val="5"></i>
              </div>
            </div>
            <div class="mg-fieldset">
              <button type="submit" class="mg-btn mg-btn--black w-100 w-lg-auto">Отправить</button>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
    {if isset($php_self) && $php_self == 'seosa-review'}
      </div>
      </div>
    {/if}
{/if}
