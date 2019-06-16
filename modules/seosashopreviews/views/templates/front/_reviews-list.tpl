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
    <style>
        .mg-main-customers__item-info{
            position: absolute;
            bottom: 0;
        }
    </style>
    <section class="mg-banner mg-reviews-banner">
        <section class="mg-crumbs mg-crumbs--banner">
            <div class="container">
                <a href="/">Главная</a>
                <span> Отзывы</span>
            </div>
        </section>
        <div class="container d-flex align-items-center"><div class="mg-faq-title">megumi <b>reviews</b></div></div>
    </section>

    <section class="mg-reviews-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <h1>Отзывы</h1>
                    <p>Будем признательны, если вы уделите немного времени и оставите отзыв об ассортименте и ценах товара, о работе отдела клиентского сервиса и курьерской службы и любые другие. <br/>Ваши отзывы помогут улучшить клиентский сервис и радовать вас еще больше.</p>
                    <hr class="my-4">
                </div>
            </div>
            <div class="mg-top mb-4">
                <span class="mg-title text-uppercase">Оставить отзыв</span>
            </div>
            {include file="../hook/_form.tpl"}
        </div>
    </section>
    <div class="container">
        <hr>

{if $reviews->count()}
    <div class="reviews-list">
        <div class="row">
        {foreach from=$reviews item="review" name="reviews"}
            <div class="col-md-6 col-xl-4 mb-5">
                <div class="mg-main-customers__item">
                    <p>{$review->text|no_escape}</p>
                    <div class="mg-main-customers__item-info">
                        <div class="mg-main-customers__item-avatar"><img src="
http://presta.padilo.pro/img/seosashopreviews/1-standalone.jpg
{*{$review->getImageLink('standalone')|escape:'quotes':'UTF-8'}*}

" alt="" /></div>
                        <div class="mg-main-customers__item-rating">
                            {assign var='ratings' value=array(1,2,3,4,5)}
                                {foreach from=$ratings item='rating'}
                            <i class="{if $rating <= $review->rating} active{/if}"> </i>
                            {/foreach}
                        </div>
                        <div class="mg-main-customers__item-name">{$review->name|no_escape}</div>
                    </div>
                </div>
            </div>

        {/foreach}
        </div>

    </div>
{/if}
    </div>
{/strip}

