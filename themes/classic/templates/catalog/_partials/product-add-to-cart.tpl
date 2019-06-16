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
{block name='product_quantity'}
  <div class="d-flex justify-content-between align-items-center w-100 my-5">
      <div class="number-spinner mx-0">
        <span class="ns-btn"><a data-dir="dwn">-</a></span>
        <input
                type="text"
                name="qty"
                id="quantity_wanted"
                value="{$product.quantity_wanted}"
                class="pl-ns-value"
                min="{$product.minimal_quantity}"
                aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
        >
        <span class="ns-btn"><a data-dir="up">+</a></span>
      </div>

      <div class="mg-product-cart__btns mg-product-cart__btns-2 my-0">
        <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
        <button
                class="mg-btn mg-btn--black mg-product-cart__btn--buy"
                data-button-action="add-to-cart"
                type="submit"
                {if !$product.add_to_cart_url}
                  disabled
                {/if}
        >
          {l s='Add to cart' d='Shop.Theme.Actions'}

        </button>
      </div>
  </div>
{/block}

{*


<div class="product-add-to-cart">
  {if !$configuration.is_catalog}
    <span class="control-label">{l s='Quantity' d='Shop.Theme.Catalog'}</span>

    {block name='product_quantity'}
      <div class="product-quantity clearfix">
        <div class="qty">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="{$product.quantity_wanted}"
            class="input-group"
            min="{$product.minimal_quantity}"
            aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            {if !$product.add_to_cart_url}
              disabled
            {/if}
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            {l s='Add to cart' d='Shop.Theme.Actions'}
          </button>
        </div>
      </div>
    {/block}

    {block name='product_availability'}
      <span id="product-availability">
        {if $product.show_availability && $product.availability_message}
          {if $product.availability == 'available'}
            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
          {elseif $product.availability == 'last_remaining_items'}
            <i class="material-icons product-last-items">&#xE002;</i>
          {else}
            <i class="material-icons product-unavailable">&#xE14B;</i>
          {/if}
          {$product.availability_message}
        {/if}
      </span>
    {/block}
    
    {block name='product_minimal_quantity'}
      <p class="product-minimal-quantity">
        {if $product.minimal_quantity > 1}
          {l
          s='The minimum purchase order quantity for the product is %quantity%.'
          d='Shop.Theme.Checkout'
          sprintf=['%quantity%' => $product.minimal_quantity]
          }
        {/if}
      </p>
    {/block}
  {/if}
</div>

*}


{*<div class="product-add-to-cart">*}
{*  {if !$configuration.is_catalog}*}
{*    <span class="control-label">{l s='Quantity' d='Shop.Theme.Catalog'}</span>*}

{*    {block name='product_quantity'}*}
{*      <div class="product-quantity clearfix">*}
{*        <div class="qty">*}
{*          <input*}
{*                  type="text"*}
{*                  name="qty"*}
{*                  id="quantity_wanted"*}
{*                  value="{$product.quantity_wanted}"*}
{*                  class="input-group"*}
{*                  min="{$product.minimal_quantity}"*}
{*                  aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"*}
{*          >*}
{*        </div>*}

{*        <div class="add">*}
{*          <button*}
{*                  class="btn btn-primary add-to-cart"*}
{*                  data-button-action="add-to-cart"*}
{*                  type="submit"*}
{*                  {if !$product.add_to_cart_url}*}
{*                    disabled*}
{*                  {/if}*}
{*          >*}
{*            <i class="material-icons shopping-cart">&#xE547;</i>*}
{*            {l s='Add to cart' d='Shop.Theme.Actions'}*}
{*          </button>*}
{*        </div>*}
{*      </div>*}
{*    {/block}*}

{*    {block name='product_availability'}*}
{*      <span id="product-availability">*}
{*        {if $product.show_availability && $product.availability_message}*}
{*          {if $product.availability == 'available'}*}
{*            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>*}
{*          {elseif $product.availability == 'last_remaining_items'}*}
{*            <i class="material-icons product-last-items">&#xE002;</i>*}
{*          {else}*}
{*            <i class="material-icons product-unavailable">&#xE14B;</i>*}
{*          {/if}*}
{*          {$product.availability_message}*}
{*        {/if}*}
{*      </span>*}
{*    {/block}*}

{*    {block name='product_minimal_quantity'}*}
{*      <p class="product-minimal-quantity">*}
{*        {if $product.minimal_quantity > 1}*}
{*          {l*}
{*          s='The minimum purchase order quantity for the product is %quantity%.'*}
{*          d='Shop.Theme.Checkout'*}
{*          sprintf=['%quantity%' => $product.minimal_quantity]*}
{*          }*}
{*        {/if}*}
{*      </p>*}
{*    {/block}*}
{*  {/if}*}
{*</div>*}
