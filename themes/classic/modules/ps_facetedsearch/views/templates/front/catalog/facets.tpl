{**
  * 2007-2019 PrestaShop.
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
  * @copyright 2007-2019 PrestaShop SA
  * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *}


{*<a class="mg-catalog-refresh js-search-filters-clear-all"  id="_desktop_search_filters_clear_all" data-search-url="{$clear_all_link}">*}
{*    <i class="mg-icon"></i>*}
{*    {l s='Сбросить фильтры' d='Shop.Theme.Actions'}*}
{*</a>*}

{*<div class="mg-catalog-filter__item">*}
{*    <div class="mg-catalog-filter__item-title">*}
{*        <a>*}
{*            {l s='Filter By' d='Shop.Theme.Actions'}*}
{*        </a>*}
{*    </div>*}
{*</div>*}

{*{assign var='childCategories' value=Category::getChildren(4, 1, true, false)}*}
{*<pre>*}
{*    {$childCategories|print_r}*}
{*</pre>*}

{if 0}
<div class="d-none d-xl-block" id="search_filters">

    <a class="mg-catalog-refresh js-search-filters-clear-all"  id="_desktop_search_filters_clear_all" data-search-url="{$clear_all_link}" style="cursor: pointer;">
        <i class="mg-icon"></i>
        {l s='Сбросить фильтры' d='Shop.Theme.Actions'}
    </a>

    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title">
            <a>
                {l s='Filter By' d='Shop.Theme.Actions'}
            </a>
        </div>
    </div>

    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title mg-catalog-filter__item-title--active"><a href="#">Кожа и тело</a></div>
        <div class="mg-catalog-filter__item-list">
            <div class="mg-catalog-filter__item-list-title mg-catalog-filter__item-list-title--active"><a href="#">Уход за кожей лица</a></div>

            {foreach from=$displayedFacets item="facet"}

                {assign var=_expand_id value=10|mt_rand:100000}
                {assign var=_collapse value=true}

                {foreach from=$facet.filters item="filter"}
                    {if $filter.active}
                        {assign var=_collapse value=false}
                    {/if}
                {/foreach}

                {if $facet.filters[0].type != 'manufacturer'}
                    {continue}
                {/if}

                {if in_array($facet.widgetType, ['checkbox'])}
                    {block name='facet_item_other-2'}
                        <div class="mg-catalog-filter__item-list-box" id="facet_{$_expand_id}" class="collapse{if !$_collapse} in{/if}">
                            {foreach from=$facet.filters key=filter_key item="filter"}
                                {if !$filter.displayed}
                                    {continue}
                                {/if}

                                {if $facet.multipleSelectionAllowed}
                                    <div class="custom-control custom-checkbox">
                                            <input
                                                id="p-facet_input_{$_expand_id}_{$filter_key}"
                                                data-search-url="{$filter.nextEncodedFacetsURL}"
                                                type="checkbox"
                                                class="custom-control-input"
                                                {if $filter.active }checked{/if}
                                            >
                                            <label class="custom-control-label" for="p-facet_input_{$_expand_id}_{$filter_key}">
                                                <a
                                                        href="{$filter.nextEncodedFacetsURL}"
                                                        class="search-link js-search-link"
                                                        rel="nofollow"
                                                >
                                                    {$filter.label}
                                                    {if $filter.magnitude and $show_quantities}
                                                        <span class="magnitude">({$filter.magnitude})</span>
                                                    {/if}
                                                </a>
                                            </label>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/block}
                {/if}

            {/foreach}

            <div class="mg-catalog-filter__item-list-title"><a href="#">Уход за телом</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Солнечная линия</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Для детей</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Идеи для подарков</a></div>
        </div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">волосы</a></div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">ногти</a></div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">Аксессуары</a></div>
    </div>
    <hr class="mb-4">
    <div class="mg-catalog-filter__brands">
        <div class="mg-catalog-filter__brands-form">
            <form action="#" method="post">
                <fieldset>
                    <input type="text" class="mg-input" placeholder="Название бренда" />
                    <button class="mg-btn" type="submit"><i class="mg-icon icon-search"></i></button>
                </fieldset>
            </form>
        </div>
        <div class="mg-catalog-filter__brands-list">
            {foreach from=$displayedFacets item="facet"}

                {assign var=_expand_id value=10|mt_rand:100000}
                {assign var=_collapse value=true}

                {foreach from=$facet.filters item="filter"}
                    {if $filter.active}
                        {assign var=_collapse value=false}
                    {/if}
                {/foreach}

                {if $facet.filters[0].type != 'manufacturer'}
                    {continue}
                {/if}

                {if in_array($facet.widgetType, ['checkbox'])}
                    {block name='facet_item_other-2'}
                        <div class="mg-catalog-filter__item-list-box" id="facet_{$_expand_id}" class="collapse{if !$_collapse} in{/if}">
                            {foreach from=$facet.filters key=filter_key item="filter"}
                                {if !$filter.displayed}
                                    {continue}
                                {/if}

                                {if $facet.multipleSelectionAllowed}
                                    <div class="custom-control custom-checkbox">
                                        <input
                                                id="p-facet_input_{$_expand_id}_{$filter_key}"
                                                data-search-url="{$filter.nextEncodedFacetsURL}"
                                                type="checkbox"
                                                class="custom-control-input"
                                                {if $filter.active }checked{/if}
                                        >
                                        <label class="custom-control-label" for="p-facet_input_{$_expand_id}_{$filter_key}">
                                            <a
                                                    href="{$filter.nextEncodedFacetsURL}"
                                                    class="search-link js-search-link"
                                                    rel="nofollow"
                                            >
                                                {$filter.label}
                                                {if $filter.magnitude and $show_quantities}
                                                    <span class="magnitude">({$filter.magnitude})</span>
                                                {/if}
                                            </a>
                                        </label>
                                    </div>


                                {/if}
                            {/foreach}
                        </div>
                    {/block}
                {/if}

            {/foreach}


        </div>
    </div>
    <hr class="my-4">
    <div class="mg-diff">
        <label>ЦЕНА</label>
        <div class="range_inputs" id="slide_build_price">
            <div class="row">
                <div class="col-xl-12 mt-2 mb-4"><div class="range range_build_price"></div></div>
                <div class="col-xl-5"><input class="before mg-input text-center" type="text" placeholder="0 ₽"/></div>
                <div class="col-xl-2">&nbsp;</div>
                <div class="col-xl-5"><input class="after mg-input text-center" type="text" placeholder="1000 ₽"/></div>
            </div>
        </div>
    </div>
    <div class="mg-catalog-filter__more-box">
        <h3>вы недавно смотрели</h3>
        <div class="mg-catalog-filter__more-list">
            <div class="mg-product-cart__wrapper">
                <img class="mg-product-cart__image" src="images/uploads/img-4.jpg" alt="" />
                <span class="mg-product-cart__name">kiehl’s</span>
                <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                <span class="mg-product-cart__price">3890<i class="mg-ruble">₽</i></span>
                <div class="mg-product-cart__btns">
                    <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                    <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                </div>
            </div>
            <div class="mg-product-cart__wrapper">
                <img class="mg-product-cart__image" src="images/uploads/img-4.jpg" alt="" />
                <span class="mg-product-cart__name">kiehl’s</span>
                <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                <span class="mg-product-cart__price">3890<i class="mg-ruble">₽</i></span>
                <div class="mg-product-cart__btns">
                    <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                    <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}


{if $displayedFacets|count}
    <div id="search_filters">

        {block name='facets_clearall_button'}
            {if $activeFilters|count}
                <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
                    <button data-search-url="{$clear_all_link}" class="btn btn-tertiary js-search-filters-clear-all">
                        <i class="material-icons">&#xE14C;</i>
                        {l s='Clear all' d='Shop.Theme.Actions'}
                    </button>
                </div>
            {/if}
        {/block}

        {block name='facets_title'}
            <p class="text-uppercase h6 hidden-sm-down">{l s='Filter By' d='Shop.Theme.Actions'}</p>
        {/block}


        {hook h='displayPaymentTop'}

        {foreach from=$displayedFacets item="facet"}
            <section class="facet clearfix">
                <p class="h6 facet-title hidden-sm-down">{$facet.label}</p>

                {assign var=_expand_id value=10|mt_rand:100000}
                {assign var=_collapse value=true}

                {foreach from=$facet.filters item="filter"}
                    {if $filter.active}
                        {assign var=_collapse value=false}
                    {/if}
                {/foreach}

{*                <div class="title hidden-md-up" data-target="#facet_{$_expand_id}" data-toggle="collapse"{if !$_collapse} aria-expanded="true"{/if}>*}
{*                    <p class="h6 facet-title">{$facet.label}</p>*}
{*                    <span class="float-xs-right">*}
{*                        <span class="navbar-toggler collapse-icons">*}
{*                          <i class="material-icons add">&#xE313;</i>*}
{*                          <i class="material-icons remove">&#xE316;</i>*}
{*                        </span>*}
{*                    </span>*}
{*                </div>*}

                {if in_array($facet.widgetType, ['radio', 'checkbox'])}
                    {block name='facet_item_other'}
                        <ul id="facet_{$_expand_id}" class="collapse{if !$_collapse} in{/if}">
                            {foreach from=$facet.filters key=filter_key item="filter"}
                                {if !$filter.displayed}
                                    {continue}
                                {/if}

                                <li>
                                    <label class="facet-label{if $filter.active} active {/if}" for="facet_input_{$_expand_id}_{$filter_key}">
                                        {if $facet.multipleSelectionAllowed}
                                            <span class="custom-checkbox">
                                                <input
                                                        id="facet_input_{$_expand_id}_{$filter_key}"
                                                        data-search-url="{$filter.nextEncodedFacetsURL}"
                                                        type="checkbox"
                                                        {if $filter.active }checked{/if}
                                                >
                                                {if isset($filter.properties.color)}
                                                    <span class="color" style="background-color:{$filter.properties.color}"></span>
                                                {elseif isset($filter.properties.texture)}
                                                  <span class="color texture" style="background-image:url({$filter.properties.texture})"></span>
                                                {else}
                                                  <span {if !$js_enabled} class="ps-shown-by-js" {/if}><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                                {/if}
                                            </span>
                                        {else}
                                            <span class="custom-radio">
                                                <input
                                                        id="facet_input_{$_expand_id}_{$filter_key}"
                                                        data-search-url="{$filter.nextEncodedFacetsURL}"
                                                        type="radio"
                                                        name="filter {$facet.label}"
                                                        {if $filter.active }checked{/if}
                                                >
                                                <span {if !$js_enabled} class="ps-shown-by-js" {/if}></span>
                                            </span>
                                        {/if}

                                            <a
                                                href="{$filter.nextEncodedFacetsURL}"
                                                class="_gray-darker search-link js-search-link"
                                                rel="nofollow"
                                            >
                                            {$filter.label}
                                            {if $filter.magnitude and $show_quantities}
                                                <span class="magnitude">({$filter.magnitude})</span>
                                            {/if}
                                            </a>
                                    </label>
                                </li>
                            {/foreach}
                        </ul>
                    {/block}

                {elseif $facet.widgetType == 'dropdown'}
                    {block name='facet_item_dropdown'}
                        <ul id="facet_{$_expand_id}" class="collapse{if !$_collapse} in{/if}">
                            <li>
                                <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {$active_found = false}
                                        <span>
                      {foreach from=$facet.filters item="filter"}
                          {if $filter.active}
                              {$filter.label}
                              {if $filter.magnitude and $show_quantities}
                                  ({$filter.magnitude})
                              {/if}
                              {$active_found = true}
                          {/if}
                      {/foreach}
                                            {if !$active_found}
                                                {l s='(no filter)' d='Shop.Theme.Global'}
                                            {/if}
                    </span>
                                        <i class="material-icons float-xs-right">&#xE5C5;</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        {foreach from=$facet.filters item="filter"}
                                            {if !$filter.active}
                                                <a
                                                        rel="nofollow"
                                                        href="{$filter.nextEncodedFacetsURL}"
                                                        class="select-list"
                                                >
                                                    {$filter.label}
                                                    {if $filter.magnitude and $show_quantities}
                                                        ({$filter.magnitude})
                                                    {/if}
                                                </a>
                                            {/if}
                                        {/foreach}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    {/block}

                {elseif $facet.widgetType == 'slider'}
                    {block name='facet_item_slider'}
                        {foreach from=$facet.filters item="filter"}
                            <ul id="facet_{$_expand_id}"
                                class="faceted-slider"
                                data-slider-min="{$facet.properties.min}"
                                data-slider-max="{$facet.properties.max}"
                                data-slider-id="{$_expand_id}"
                                data-slider-values="{$filter.value|@json_encode}"
                                data-slider-unit="{$facet.properties.unit}"
                                data-slider-label="{$facet.label}"
                                data-slider-specifications="{$facet.properties.specifications|@json_encode}"
                                data-slider-encoded-url="{$filter.nextEncodedFacetsURL}"
                            >
                                <li>
                                    <p id="facet_label_{$_expand_id}">
                                        {$filter.label}
                                    </p>

                                    <div id="slider-range_{$_expand_id}"></div>
                                </li>
                            </ul>
                        {/foreach}
                    {/block}
                {/if}
            </section>
        {/foreach}
    </div>
{/if}
