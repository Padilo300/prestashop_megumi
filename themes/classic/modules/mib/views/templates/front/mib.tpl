{**
* PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
*
* @author    VEKIA https://www.prestashop.com/forums/user/132608-vekia/
* @copyright 2010-9999 VEKIA
* @license   This program is not free software and you can't resell and redistribute it
*
* CONTACT WITH DEVELOPER http://mypresta.eu
* support@mypresta.eu
*}





<section class="mg-main-brends">
    <div class="mg-main-brends__inner">
        <div class="container">
            <div class="mg-main-slider-brends">
                {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                    {if $manufacturer.image}

                        <div><a class="mg-main-slider-brends__item" href="{Context::getContext()->link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'} title="{l s='More about %s' sprintf=[$manufacturer.name] mod='mib'}"">
                            <img src="{$urls.base_url}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}" />
                            </a>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
    </div>
    <a class="mg-btn" href="#">Найти бренд</a>
</section>

<script>
    $(document).ready(function () {
        $('.mg-main-slider-brends').slick({
            draggable: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="mg-icon icon-angle-left"></i></button>',
            nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="mg-icon icon-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    });
</script>


{*<div class="block" id="mypresta_mib">*}
{*    <h4 class="text-uppercase h6 hidden-sm-down">{l s='Brands' mod='mib'}</h4>*}
{*    <ul class="MyPrestaBrandsCarousel" id="MyPrestaBrandsCarousel">*}
{*       	{foreach from=$manufacturers item=manufacturer name=manufacturer_list}*}
{*           {if $manufacturer.image}*}
{*        	   <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">*}
{*                   <a href="{Context::getContext()->link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='More about %s' sprintf=[$manufacturer.name] mod='mib'}">*}
{*                      <img src="{$urls.base_url}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>*}
{*                   </a>*}
{*               </li>*}
{*           {/if}*}
{*    	{/foreach}*}
{*    </ul>*}
{*</div>*}