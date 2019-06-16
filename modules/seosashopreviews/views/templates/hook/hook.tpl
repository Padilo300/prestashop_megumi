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


<section class="mg-main-customers">
    <div class="container">
        <h2>Наши покупатели</h2>
        <div class="mg-main-slider-customers" id="1231234142134">

            {if $reviews->count()}
                {include './_reviews.tpl'}
            {/if}
        </div>
        <a class="mg-btn" href="{$show_all_link|escape:'quotes':'UTF-8'}">
            {l s='Show all reviews' mod='seosashopreviews'}
        </a>
    </div>
</section>


{*{assign var='all_categories' value=Category::getCategories()}*}
{*<pre>{$all_categories|@print_r}</pre>*}

<style>
    .mg-main-customers__item{
        display: flex !important;
        flex-direction: column;
        justify-content: space-between;
        height: 339px;
    }
</style>

<script>
    $(document).ready(function () {
        $('#1231234142134').slick({
            arrows: false,
            dots: true,
            draggable: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
{*<div class="block seosashopreviews {$hook_type|escape:'quotes':'UTF-8'}{if SSRTools::isPs15()} prestashop-1_5{/if}" {if SSRTools::isPs15()}id="idTab18022016"{/if}>*}
{*    <h4 class="title_block">{l s='Reviews' mod='seosashopreviews'}</h4>*}
{*    <div class="block_content form-group ">*}
{*        {if $reviews->count()}*}
{*            <div class="reviews">*}
{*                {include './_reviews.tpl'}*}
{*            </div>*}
{*        {/if}*}
{*        <div class="controls">*}
{*            {if SeosaShopReviews::canAddReview()}*}
{*                <a type="button" class="btn btn-default button button-small" data-show-form>*}
{*                    <span>{l s='Add review' mod='seosashopreviews'}</span>*}
{*                </a>*}
{*            {/if}*}
{*            {if $reviews->count()}*}
{*                <a class="btn btn-default button button-small show-all" href="{$show_all_link|escape:'quotes':'UTF-8'}">*}
{*                    <span>{l s='Show all reviews' mod='seosashopreviews'}<i class="icon-chevron-right right"></i></span>*}
{*                </a>*}
{*            {/if}*}
{*        </div>*}
{*        {include './_form.tpl'}*}
{*    </div>*}
{*</div>*}
