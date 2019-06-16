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
{extends file=$layout}

{block name='head_seo' prepend}
    <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
    <meta property="og:type" content="product">
    <meta property="og:url" content="{$urls.current_url}">
    <meta property="og:title" content="{$page.meta.title}">
    <meta property="og:site_name" content="{$shop.name}">
    <meta property="og:description" content="{$page.meta.description}">
    <meta property="og:image" content="{$product.cover.large.url}">
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
    {if isset($product.weight) && ($product.weight != 0)}
        <meta property="product:weight:value" content="{$product.weight}">
        <meta property="product:weight:units" content="{$product.weight_unit}">
    {/if}
{/block}

{block name='content'}

<section class="mg-product-content my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mg-product-content__info d-block d-lg-none">
                    {block name='page_header_container'}
                        {block name='page_header'}
                            <h1>{block name='page_title'}{$product.name}{/block}</h1>
                        {/block}
                    {/block}
                    {block name='product_description_short'}
                        <div class="my-2">{$product.description_short nofilter}</div>
                    {/block}
                    <div class="d-flex align-items-center">
                        <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                        <span class="mg-text-grey mr-3">Отзывы (2)</span>
                        <a class="mg-text-grey" href="#">Добавить отзыв</a>
                    </div>
                    <div class="my-3 mg-price">1980<i class="mg-ruble">₽</i></div>
                </div>
                <div class="mg-product-content__image"><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></div>
                <div class="mg-product-content__image-thumbs">
                    <ul>
                        <li class="selected"><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></li>
                        <li><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></li>
                    </ul>
                </div>
                <div class="text-uppercase mg-text-grey my-2 d-none d-lg-block">СОПУТСТВУЮЩИЕ ТОВАРЫ</div>
                <div class="mg-main-slider mg-main-slider-product mg-mini-product mx-0 d-none d-lg-block">
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mg-product-content__info d-none d-lg-block">
                    {block name='page_header_container'}
                        {block name='page_header'}
                            <h1>{block name='page_title'}{$product.name}{/block}</h1>
                        {/block}
                    {/block}
                    {block name='product_description_short'}
                        <div class="my-2">{$product.description_short nofilter}</div>
                    {/block}
                    <div class="d-flex align-items-center">
                        <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                        <span class="mg-text-grey mr-3">Отзывы ({$reviewList.total})</span>
                        <a class="mg-text-grey" href="#" data-revws-entity-type="product"  data-revws-create-trigger="{$product.id}">Добавить отзыв</a>
                    </div>
                    <div class="my-3 mg-price">1980<i class="mg-ruble">₽</i></div>
                </div>
                <div class="mg-order__colors">
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                </div>

                {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                {/block}


                <ul class="nav nav-tabs mg-product-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#mgAbout" role="tab" aria-controls="about" aria-selected="true">Описание товара</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="#mgInfo" role="tab" aria-controls="info" aria-selected="false">состав / хранение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="brand-tab" data-toggle="tab" href="#mgBrand" role="tab" aria-controls="brand" aria-selected="false">о бренде</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="mgAbout" role="tabpanel" aria-labelledby="about-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/><b>1.</b> Насыщенный цвет, точно такой же как на картинке<br/>Благодаря сильному пигменту, помада передает настоящий цвет<br/> и добавляет потрясающего блеска губам.<br/><b>2.</b> Кремовая тающая текстура<br/>Нежная текстура подобна СС крему равно мерно ложиться и обладает высокой стойкостью.<br/><b>3.</b> Глубокий, стойкий цвет и блеск<br/>Высокоэластичная текстура с высокоглянцевыми полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mgInfo" role="tabpanel" aria-labelledby="info-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/><b>1.</b> Насыщенный цвет, точно такой же как на картинке<br/>Благодаря сильному пигменту полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mgBrand" role="tabpanel" aria-labelledby="brand-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/>обладает высокой стойкостью.<br/><b>3.</b> Глубокий, стойкий цвет и блеск<br/>Высокоэластичная текстура с высокоглянцевыми полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5">
    </div>
</section>

    <section class="mg-product-content" id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="{$product.url}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mg-product-content__info d-block d-lg-none">
                        {block name='page_header_container'}
                            {block name='page_header'}
                                <h1>{block name='page_title'}{$product.name}{/block}</h1>
                            {/block}
                        {/block}
                        {block name='product_description_short'}
                            <div class="my-2">{$product.description_short nofilter}</div>
                        {/block}
                        <div class="d-flex align-items-center">
                            <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                            <span class="mg-text-grey mr-3">Отзывы ({$reviewList.total})</span>
                            <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="{$product.id}"><b>Добавить отзыв</b></a>
                        </div>
                        {block name='product_prices'}
                            {include file='catalog/_partials/product-prices.tpl'}
                        {/block}
                    </div>

                    {block name='page_content_container'}
                        {block name='page_content'}

                            {block name='product_cover_thumbnails'}
                                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
                            {/block}

                        {/block}
                    {/block}


                    {hook h='displayProductincat' product=$product}

                </div>
                <div class="col-lg-6">
                    <div class="mg-product-content__info d-none d-lg-block">
                        {block name='page_header_container'}
                            {block name='page_header'}
                                <h1>{block name='page_title'}{$product.name}{/block}</h1>
                            {/block}
                        {/block}
                        {block name='product_description_short'}
                            <div class="my-2">{$product.description_short nofilter}</div>
                        {/block}
                        <div class="d-flex align-items-center">
                            <span class="mg-text-grey mr-3">Отзывы ({$reviewList.total})</span>
                            <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="{$product.id}"><b>Добавить отзыв</b></a>
                        </div>
                        {block name='product_prices'}
                            {include file='catalog/_partials/product-prices.tpl'}
                        {/block}
                    </div>

                    {if $product.is_customizable && count($product.customizations.fields)}
                        {block name='product_customization'}
                            {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                        {/block}
                    {/if}

                    <div class="product-actions">
                        {block name='product_buy'}
                            <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="{$static_token}">
                                <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

                                {block name='product_variants'}
                                    {include file='catalog/_partials/product-variants.tpl'}
                                {/block}

                                {block name='product_add_to_cart'}
                                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                                {/block}

                                {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                                {block name='product_refresh'}{/block}
                            </form>
                        {/block}

                    </div>



                    {block name='product_tabs'}


                        <ul class="nav nav-tabs mg-product-nav" role="tablist">
                            {if $product.description}
                                <li class="nav-item">
                                    <a class="nav-link{if $product.description} active{/if}" id="about-tab" data-toggle="tab" href="#mgAbout" role="tab" aria-controls="about" {if $product.description} aria-selected="true"{/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
                                </li>
                            {/if}
                            <li class="nav-item">
                                <a class="nav-link{if !$product.description} active{/if}" id="info-tab" data-toggle="tab" href="#mgInfo" role="tab" aria-controls="info" {if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
                            </li>
                            {if $product.attachments}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                                </li>
                            {/if}
                            {foreach from=$product.extraContent item=extra key=extraKey}
                                <li class="nav-item" style="display: none">
                                    <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}" role="tab" aria-controls="extra-{$extraKey}">{$extra.title}</a>
                                </li>
                            {/foreach}
                        </ul>
                    {/block}
                    <div class="tab-content">
                        <div class="tab-pane fade show{if $product.description} active{/if}" id="mgAbout" role="tabpanel" aria-labelledby="about-tab">
                            <div class="mg-tab-info">
                                {block name='product_description'}
                                    {$product.description nofilter}
                                {/block}
                            </div>
                        </div>

                        {block name='product_details'}
                            {include file='catalog/_partials/product-details.tpl'}
                        {/block}

                        {block name='product_attachments'}
                            {if $product.attachments}
                                <div class="tab-pane fade" id="mgBrand" role="tabpanel" aria-labelledby="brand-tab">
                                    <div class="mg-tab-info">
                                        <section class="product-attachments">
                                            <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
                                            {foreach from=$product.attachments item=attachment}
                                                <div class="attachment">
                                                    <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                                                    <p>{$attachment.description}</p
                                                    <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                                                        {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                                                    </a>
                                                </div>
                                            {/foreach}
                                        </section>
                                    </div>
                                </div>
                            {/if}
                        {/block}

                        {foreach from=$product.extraContent item=extra key=extraKey}
                        <div class="tab-pane {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                        {$extra.content nofilter}
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <hr class="mt-5">

        {hook h='displayProductincat2' product=$product}

        <section class="mg-product-reviews">
            <div class="container pt-4">
                <div class="text-uppercase mg-text-grey">отзывы ({count($reviewList.reviews)})</div>
                <div class="mb-4" style="display: none"><small><b>Средний рейтинг</b></small> <div class="mg-main-customers__item-rating d-inline-flex"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div></div>
                <div class="row">
                    {foreach from=$reviewList.reviews item=review}
                        <div class="col-md-6 mb-5">
                            <div class="mg-main-customers__item">
                                <p>{$review.content|escape:'html':'UTF-8'|nl2br}</p>
                                <div class="mg-main-customers__item-info">
                                    <div class="mg-main-customers__item-avatar">{mb_substr($review.displayName,0,1)}</div>
                                    <div class="mg-main-customers__item-rating"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                                    <div class="mg-main-customers__item-name">{$review.displayName|escape:'html':'UTF-8'}</div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
                <div class="row justify-content-center align-items-center">
                    <a class="mg-link mg-text-grey mr-3" href="#" style="display: none">Показать больше</a>
                    <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="{$product.id}"><b>Написать отзыв</b></a>
                </div>
                <hr class="mt-5 mb-3">
            </div>
        </section>

        <section class="mg-faq-form border-0 pb-4">
            <div class="container">
                <div class="mg-top">
                    <span class="mg-title">Вопросы</span>
                    <p>Если вас интересует дополнительная информация о товаре или вы не нашли ответ на свой вопрос выше — вы можете задать свой вопрос здесь. Наша служба поддержки ответит вам в близжайшее время.</p>
                </div>
                <form action="#" method="post">
                    <fieldset class="mg-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mg-fieldset">
                                    <label for="inp1" class="mg-label">Ваше имя</label>
                                    <input type="text" class="mg-input" id="inp1">
                                </div>
                                <div class="mg-fieldset">
                                    <label for="inp4" class="mg-label">E-mail</label>
                                    <input type="email" class="mg-input" id="inp4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mg-fieldset">
                                    <label for="inp2" class="mg-label">Ваш вопрос</label>
                                    <textarea rows="1" cols="1" class="mg-textarea" id="inp2" placeholder="Задайте вопрос"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mg-fieldset">
                                    <button type="submit" class="mg-btn mg-faq-btn">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <hr>
            </div>
        </section>

        {*    <section class="mg-product-view-history mb-5">
              <div class="container">
                <div class="text-center"><h2>Вы просматривали</h2></div>
                <div class="mg-main-slider mg-main-slider-popular mx-0">

                </div>
              </div>
            </section>*}

        {block name='product_footer'}
            {hook h='displayFooterProduct' product=$product category=$category}
        {/block}

        {block name='product_images_modal'}
            {include file='catalog/_partials/product-images-modal.tpl'}
        {/block}

        {block name='page_footer_container'}
            <footer class="page-footer">
                {block name='page_footer'} 
                    <!-- Footer content -->
                {/block}
            </footer>
        {/block}
    </section>

{/block}
