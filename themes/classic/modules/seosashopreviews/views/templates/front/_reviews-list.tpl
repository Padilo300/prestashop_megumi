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
{strip}
{if $reviews->count()}
    <div class="reviews-list">
        
        {foreach from=$reviews item="review" name="reviews"}
            <div class="review">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="star_content">
                            {assign var='ratings' value=array(1,2,3,4,5)}
                            {foreach from=$ratings item='rating'}
                                <div class="star_sr{if $rating <= $review->rating} star_sr_on{/if}"></div>
                            {/foreach}
                        </div>
                        <label class="text">{$review->name|no_escape}</label>
                        <div class="clearfix"></div>
                        <div class="text">{$review->text|no_escape}</div>
                    </div>

                    <div class="col-lg-6 text-center">
                        {if $review->hasImage()}
                            <a href="{$review->getImageLink()|escape:'quotes':'UTF-8'}" class="fancybox">
                                <img src="{$review->getImageLink('standalone')|escape:'quotes':'UTF-8'}"/>
                            </a>
                        {/if}
                    </div>

                </div>
            </div>
        {/foreach}
    </div>
{/if}
    {include file="../hook/_form.tpl"}
{/strip}

