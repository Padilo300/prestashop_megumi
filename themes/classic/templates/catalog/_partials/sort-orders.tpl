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

    <div class="dropdown pa-sort">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Сортировать
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            {foreach from=$listing.sort_orders item=sort_order}
                <a
                        rel="nofollow"
                        href="{$sort_order.url}"
                        class="dropdown-item "
                >
                    {$sort_order.label}
                </a>
            {/foreach}
        </div>
    </div>
<style>
    .pa-sort.dropdown{
        position: absolute;
        right: 0;
        top: 0;
    }
    .pa-sort.dropdown  > a{
        width: 250px !important;
        background: transparent !important;
        color: #495057 !important;
        border-color: rgb(206, 212, 218) !important;
        height: 38px !important;

    }
    .pa-sort.dropdown  > .dropdown-menu{
        max-width: 250px !important;
        background: #fff !important;
        border: 1px solid rgb(206, 212, 218) !important;
    }
</style>



{*

<span class="col-sm-3 col-md-3 hidden-sm-down sort-by">{l s='Sort by:' d='Shop.Theme.Global'}</span>
<div class="{if !empty($listing.rendered_facets)}col-sm-9 col-xs-8{else}col-sm-12 col-xs-12{/if} col-md-9 products-sort-order dropdown">

  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
    {if isset($listing.sort_selected)}{$listing.sort_selected}{else}{l s='Select' d='Shop.Theme.Actions'}{/if}
    <i class="material-icons float-xs-right">&#xE5C5;</i>
  </button>
  <div class="dropdown-menu">
    {foreach from=$listing.sort_orders item=sort_order}
      <a
        rel="nofollow"
        href="{$sort_order.url}"
        class="select-list {['current' => $sort_order.current, 'js-search-link' => true]|classnames}"
      >
        {$sort_order.label}
      </a>
    {/foreach}
  </div>
</div>
*}


{*

<span class="col-sm-3 col-md-3 hidden-sm-down sort-by">{l s='Sort by:' d='Shop.Theme.Global'}</span>
<div class="{if !empty($listing.rendered_facets)}col-sm-9 col-xs-8{else}col-sm-12 col-xs-12{/if} col-md-9 products-sort-order dropdown">
  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
    {if isset($listing.sort_selected)}{$listing.sort_selected}{else}{l s='Select' d='Shop.Theme.Actions'}{/if}
    <i class="material-icons float-xs-right">&#xE5C5;</i>
  </button>
  <div class="dropdown-menu">
    {foreach from=$listing.sort_orders item=sort_order}
      <a
        rel="nofollow"
        href="{$sort_order.url}"
        class="select-list {['current' => $sort_order.current, 'js-search-link' => true]|classnames}"
      >
        {$sort_order.label}
      </a>
    {/foreach}
  </div>
</div>

*}