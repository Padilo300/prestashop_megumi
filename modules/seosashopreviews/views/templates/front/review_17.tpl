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
{extends file="page.tpl"}

{block name='page_title'}
    <header class="page-header">
        <h1>{l s="Reviews" mod="seosashopreviews"}</h1>
    </header>
{/block}

{block name='page_content'}
{*{if SSRTools::isPs15()}*}
    {*{if isset($saved_review)}*}
        {*<p class="success">*}
            {*{if $saved_review->active}*}
                {*{l s='Your review has been saved.' mod='seosashopreviews'}*}
            {*{else}*}
                {*{l s='Your review has been saved and now awaiting moderation.' mod='seosashopreviews'}*}
            {*{/if}*}
        {*</p>*}
    {*{/if}*}

    {*{if isset($errors) && count($errors)}*}
        {*<div class="error">*}
            {*<p>{l s='There are %d errors' mod='seosashopreviews' sprintf=$errors|@count}</p>*}
            {*<ol>*}
                {*{foreach from=$errors key=k item=error}*}
                    {*<li>{$error|escape:'htmlall':'UTF-8'}</li>*}
                {*{/foreach}*}
            {*</ol>*}
            {*{if isset($smarty.server.HTTP_REFERER) && !strstr($request_uri, 'authentication') && preg_replace('#^https?://[^/]+/#', '/', $smarty.server.HTTP_REFERER) != $request_uri}*}
                {*<p class="lnk">*}
                    {*<a href="{$smarty.server.HTTP_REFERER|escape:'htmlall':'UTF-8'}"*}
                       {*title="{l s='Back' mod='seosashopreviews'}">&laquo; {l s='Back' mod='seosashopreviews' }</a></p>*}
            {*{/if}*}
        {*</div>*}
    {*{/if}*}
{*{else}*}
    {*{if isset($saved_review)}*}
        {*<div class="alert alert-success">*}
            {*<button type="button" class="close" data-dismiss="alert">×</button>*}
            {*{if $saved_review->active}*}
                {*{l s='Your review has been saved.' mod='seosashopreviews'}*}
            {*{else}*}
                {*{l s='Your review has been saved and now awaiting moderation.' mod='seosashopreviews'}*}
            {*{/if}*}
        {*</div>*}
    {*{/if}*}

    {*{if isset($errors) && count($errors)}*}
        {*<div class="alert alert-danger">*}
            {*<button type="button" class="close" data-dismiss="alert">×</button>*}
            {*<ul>*}
                {*{foreach from=$errors item="error"}*}
                    {*<li>{$error|escape:'htmlall':'UTF-8'}</li>*}
                {*{/foreach}*}
            {*</ul>*}
        {*</div>*}
    {*{/if}*}
{*{/if}*}


{if $reviews}
<div class="seosashopreviews standalone{if SSRTools::isPs15()} prestashop-1_5{/if}">
    {if $nb_reviews > $nb_reviews_per_page}
    <div class="top-pagination-content-sort-pagi-bar content_sortPagiBar clearfix">
        <div class="top-pagination-content clearfix">
            {renderTemplate path=$pagination_tpl_path}
        </div>
    </div>
    {/if}
    <div class="reviews">
        {renderTemplate path='front/_reviews-list.tpl'}
    </div>
    {if $nb_reviews > $nb_reviews_per_page}
    <div class="bottom-pagination-content-sort-pagi-bar content_sortPagiBar">
        <div class="bottom-pagination-content clearfix">
            {renderTemplate path=$pagination_tpl_path}
        </div>
    </div>
    {/if}
</div>
{/if}
{/block}

