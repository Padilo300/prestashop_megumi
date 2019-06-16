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


{block name='product_miniature_item'}
    <div class="col-md-6 col-lg-4 col-xl-4 js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
    <div class="mg-product-cart__wrapper">
      <span class="mg-product-cart__labels">
        <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
        <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
      </span>
        <a href="{$product.url}">
            <img class="mg-product-cart__image" src="{$product.cover.bySize.home_default.url}" alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}">
        </a>
    {block name='product_name'}
    <span class="mg-product-cart__name">{$product.name|truncate:30:'...'}</span>
    {/block}
    <p class="mg-product-cart__desc">{$product.name|truncate:30:'...'}</p>
    {block name='product_price_and_shipping'}
        {if $product.show_price}
            <div class="product-price-and-shipping">
                {if $product.has_discount}
                    <span class="mg-product-cart__price mg-product-cart__price--sale">
                        <span class="mg-product-cart__sale-price">
                            {hook h='displayProductPriceBlock' product=$product type="old_price"}
                        </span>
                        {$product.regular_price}
                    </span>
                {/if}
                <span class="mg-product-cart__price">
                    {$product.price}
                </span>
            </div>
        {/if}
    {/block}

{*        <div class="highlighted-informations no-variants hidden-sm-down">
            <a class="quick-view" href="#" data-link-action="quickview">
                <i class="material-icons search"></i> Быстрый просмотр
            </a>
        </div>*}

    <div class="mg-product-cart__btns">
        <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="{$product.url}"><i class="mg-icon icon-heart"></i></a>
        <a class="mg-btn mg-btn--black mg-product-cart__btn--buy quick-view" href="#" data-link-action="quickview" >Купить</a>
    </div>

{*        <form action="{$urls.pages.cart}" method="post">*}
{*            <input type="hidden" value="product.id_product" name="id_product">*}
{*            <input type="hidden" name="qty" min="1" value="1">*}
{*            <button data-button-action="add-to-cart" class="btn btn-primary add-to-cart">*}
{*                купить*}
{*            </button>*}
{*        </form>*}
</div>
    </div>
{/block}


{*{block name='product_miniature_item'}*}
{*    <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">*}
{*        <div class="thumbnail-container">*}
{*            {block name='product_thumbnail'}*}
{*                {if $product.cover}*}
{*                    <a href="{$product.url}" class="thumbnail product-thumbnail">*}
{*                        <img*}
{*                                src = "{$product.cover.bySize.home_default.url}"*}
{*                                alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"*}
{*                                data-full-size-image-url = "{$product.cover.large.url}"*}
{*                        >*}
{*                    </a>*}
{*                {else}*}
{*                    <a href="{$product.url}" class="thumbnail product-thumbnail">*}
{*                        <img*}
{*                                src = "{$urls.no_picture_image.bySize.home_default.url}"*}
{*                        >*}
{*                    </a>*}
{*                {/if}*}
{*            {/block}*}

{*            <div class="product-description">*}
{*                {block name='product_name'}*}
{*                    {if $page.page_name == 'index'}*}
{*                        <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>*}
{*                    {else}*}
{*                        <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>*}
{*                    {/if}*}
{*                {/block}*}

{*                {block name='product_price_and_shipping'}*}
{*                    {if $product.show_price}*}
{*                        <div class="product-price-and-shipping">*}
{*                            {if $product.has_discount}*}
{*                                {hook h='displayProductPriceBlock' product=$product type="old_price"}*}

{*                                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>*}
{*                                <span class="regular-price">{$product.regular_price}</span>*}
{*                                {if $product.discount_type === 'percentage'}*}
{*                                    <span class="discount-percentage discount-product">{$product.discount_percentage}</span>*}
{*                                {elseif $product.discount_type === 'amount'}*}
{*                                    <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>*}
{*                                {/if}*}
{*                            {/if}*}

{*                            {hook h='displayProductPriceBlock' product=$product type="before_price"}*}

{*                            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>*}
{*                            <span itemprop="price" class="price">{$product.price}</span>*}

{*                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}*}

{*                            {hook h='displayProductPriceBlock' product=$product type='weight'}*}
{*                        </div>*}
{*                    {/if}*}
{*                {/block}*}

{*                {block name='product_reviews'}*}
{*                    {hook h='displayProductListReviews' product=$product}*}
{*                {/block}*}
{*            </div>*}

{*            {block name='product_flags'}*}
{*                <ul class="product-flags">*}
{*                    {foreach from=$product.flags item=flag}*}
{*                        <li class="product-flag {$flag.type}">{$flag.label}</li>*}
{*                    {/foreach}*}
{*                </ul>*}
{*            {/block}*}

{*            <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">*}
{*                {block name='quick_view'}*}
{*                    <a class="quick-view" href="#" data-link-action="quickview">*}
{*                        <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}*}
{*                    </a>*}
{*                {/block}*}

{*                {block name='product_variants'}*}
{*                    {if $product.main_variants}*}
{*                        {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}*}
{*                    {/if}*}
{*                {/block}*}
{*            </div>*}

{*        </div>*}
{*    </article>*}
{*{/block}*}



{*{block name='product_miniature_item'}*}
{*    <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">*}
{*        <div class="thumbnail-container">*}
{*            {block name='product_thumbnail'}*}
{*                {if $product.cover}*}
{*                    <a href="{$product.url}" class="thumbnail product-thumbnail">*}
{*                        <img*}
{*                                src = "{$product.cover.bySize.home_default.url}"*}
{*                                alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"*}
{*                                data-full-size-image-url = "{$product.cover.large.url}"*}
{*                        >*}
{*                    </a>*}
{*                {else}*}
{*                    <a href="{$product.url}" class="thumbnail product-thumbnail">*}
{*                        <img*}
{*                                src = "{$urls.no_picture_image.bySize.home_default.url}"*}
{*                        >*}
{*                    </a>*}
{*                {/if}*}
{*            {/block}*}

{*            <div class="product-description">*}
{*                {block name='product_name'}*}
{*                    {if $page.page_name == 'index'}*}
{*                        <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>*}
{*                    {else}*}
{*                        <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>*}
{*                    {/if}*}
{*                {/block}*}

{*                {block name='product_price_and_shipping'}*}
{*                    {if $product.show_price}*}
{*                        <div class="product-price-and-shipping">*}
{*                            {if $product.has_discount}*}
{*                                {hook h='displayProductPriceBlock' product=$product type="old_price"}*}

{*                                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>*}
{*                                <span class="regular-price">{$product.regular_price}</span>*}
{*                                {if $product.discount_type === 'percentage'}*}
{*                                    <span class="discount-percentage discount-product">{$product.discount_percentage}</span>*}
{*                                {elseif $product.discount_type === 'amount'}*}
{*                                    <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>*}
{*                                {/if}*}
{*                            {/if}*}

{*                            {hook h='displayProductPriceBlock' product=$product type="before_price"}*}

{*                            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>*}
{*                            <span itemprop="price" class="price">{$product.price}</span>*}

{*                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}*}

{*                            {hook h='displayProductPriceBlock' product=$product type='weight'}*}
{*                        </div>*}
{*                    {/if}*}
{*                {/block}*}

{*                {block name='product_reviews'}*}
{*                    {hook h='displayProductListReviews' product=$product}*}
{*                {/block}*}
{*            </div>*}

{*            {block name='product_flags'}*}
{*                <ul class="product-flags">*}
{*                    {foreach from=$product.flags item=flag}*}
{*                        <li class="product-flag {$flag.type}">{$flag.label}</li>*}
{*                    {/foreach}*}
{*                </ul>*}
{*            {/block}*}

{*            <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">*}
{*                {block name='quick_view'}*}
{*                    <a class="quick-view" href="#" data-link-action="quickview">*}
{*                        <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}*}
{*                    </a>*}
{*                {/block}*}

{*                {block name='product_variants'}*}
{*                    {if $product.main_variants}*}
{*                        {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}*}
{*                    {/if}*}
{*                {/block}*}
{*            </div>*}

{*        </div>*}
{*    </article>*}
{*{/block}*}
