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


{foreach from=$reviews item="review" name="reviews"}
        <div class="mg-main-customers__item">
            <p>
                {if $review->hasLongText($slider_config['short_text_length'])}
                    {$review->getShortText($slider_config['short_text_length'])|no_escape}
                    {l s='Read more...' mod='seosashopreviews'}
                    {$review->text|no_escape}
                {else}
                    {$review->text|no_escape}
                {/if}
            </p>
            <div class="mg-main-customers__item-info">
                <div class="mg-main-customers__item-avatar">
                    {if $review->hasImage()}
                        <a href="{$review->getImageLink()|escape:'quotes':'UTF-8'}" class="fancybox">
                            <img src="{$review->getImageLink($hook_type)|escape:'quotes':'UTF-8'}" alt="" />
                        </a>
                    {else}
                        <span class="separator"></span>
                    {/if}

                </div>


                <div class="mg-main-customers__item-rating">
                    {assign var='ratings' value=array(1,2,3,4,5)}
                    {foreach from=$ratings item='rating'}

                        <i class="{if $rating <= $review->rating} active{/if}"></i>
                    {/foreach}
                </div>
                <div class="mg-main-customers__item-name">{$review->name|no_escape}</div>
            </div>
        </div>
{/foreach}





{*<script data-slider-config type="application/json">{$slider_config|ssr_json_encode nofilter}</script>*}
{*<div class="reviews-list reviews-list-slider reviews-list-{$hook_type|escape:'quotes':'UTF-8'}">*}
{*    {foreach from=$reviews item="review" name="reviews"}*}
{*        <div class="review">*}
{*            {if $review->hasImage()}*}
{*                <a href="{$review->getImageLink()|escape:'quotes':'UTF-8'}" class="fancybox">*}
{*                    <img src="{$review->getImageLink($hook_type)|escape:'quotes':'UTF-8'}"/>*}
{*                </a>*}
{*            {else}*}
{*                <span class="separator"></span>*}
{*            {/if}*}
{*            <div class="text">*}
{*                <div class="star_content">*}
{*                    {assign var='ratings' value=array(1,2,3,4,5)}*}
{*                    {foreach from=$ratings item='rating'}*}
{*                        <div class="star_sr{if $rating <= $review->rating} star_sr_on{/if}"></div>*}
{*                    {/foreach}*}
{*                </div>*}
{*                <label class="text">{$review->name|no_escape}</label>*}
{*                <div>*}
{*                    {if $review->hasLongText($slider_config['short_text_length'])}*}
{*                        <div class="short-text">*}
{*                            {$review->getShortText($slider_config['short_text_length'])|no_escape}*}
{*                            <div class="read-more">*}
{*                                <span>{l s='Read more...' mod='seosashopreviews'}</span>*}
{*                            </div>*}
{*                        </div>*}
{*                        <div class="full-text">{$review->text|no_escape}</div>*}
{*                    {else}*}
{*                        {$review->text|no_escape}*}
{*                    {/if}*}
{*                </div>*}
{*                {if $review->id_product}*}
{*                    <div>*}
{*                        <b>{(SSRShopReview::getHtmlProductLink($review->id_product)|no_escape) nofilter}</b>*}
{*                    </div>*}
{*                {/if}*}
{*            </div>*}
{*        </div>*}
{*    {/foreach}*}
{*</div>*}
