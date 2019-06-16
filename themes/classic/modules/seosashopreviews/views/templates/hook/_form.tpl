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

        {if isset($id_product)}
          <input type="hidden" name="id_product" value="{$id_product|intval}">
        {/if}
      <div class="form-group">
        <input type="hidden" name="rating" value="0">
        <div class="seosashopreviews_rating">
          <span class="rating_label">{l s='Rating' mod='seosashopreviews'}:</span>
          <a class="delete_star" title="0"></a>
          <a class="star_sr1 star_sr" title="1"></a>
          <a class="star_sr2 star_sr" title="2"></a>
          <a class="star_sr3 star_sr" title="3"></a>
          <a class="star_sr4 star_sr" title="4"></a>
          <a class="star_sr5 star_sr" title="5"></a>
        </div>
      </div>
      <div class="form-group">
        <label for="seosa_shops_reviews_name">
            {l s='Name' mod='seosashopreviews'}
          <sup>{l s='*' mod='seosashopreviews'}</sup>
        </label>
        <input required="required" type="text" id="seosa_shops_reviews_name" class="form-control" name="name"/>
      </div>
      <div class="form-group">
        <label for="seosa_shops_reviews_left_text">
            {l s='Text' mod='seosashopreviews'}
          <sup>{l s='*' mod='seosashopreviews'}</sup>
        </label>
        <textarea required="required" class="form-control" name="text"
                  placeholder="{l s='Text of your review' mod='seosashopreviews'}"
        ></textarea>
      </div>
      <div class="form-group">
        <label for="seosa_shops_reviews_left_image">
            {l s='Photo' mod='seosashopreviews'}
        </label>
        <input type="file" class="form-control" name="image"/>
      </div>
        {if $gdpr}
          <div class="form-group">
              {hook h='displayGDPRConsent' mod='psgdpr' id_module=$id_module}
          </div>
        {/if}
      <div class="form-group form-group-buttons">
          {if isset($php_self) && $php_self != 'seosa-review'}
            <a type="button" class="btn btn-default button button-small" data-hide-form>
              <span>{l s='cancel' mod='seosashopreviews'}</span>
            </a>
          {/if}
          {if SSRTools::isPs15()}
            <input type="submit" class="button" value="{l s='Submit review' mod='seosashopreviews'}"/>
          {else}
            <button type="submit" class="btn btn-default button button-small">
              <span>{l s='Submit review' mod='seosashopreviews'}</span>
            </button>
          {/if}
      </div>
    </form>
  </div>
    {if isset($php_self) && $php_self == 'seosa-review'}
      </div>
      </div>
    {/if}
{/if}
