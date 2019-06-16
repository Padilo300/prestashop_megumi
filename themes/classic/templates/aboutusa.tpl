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
{extends file='layouts/layout-custom.tpl'}

{block name='content'}

    <section id="mayhin">

        {block name='page_header_container'}
            {block name='page_title' hide}
                <header class="page-header">
                    <h1>{$smarty.block.child}</h1>
                </header>
            {/block}
        {/block}

        {block name='cus'}
            {block name='page_content_top'}{/block}
            {block name='page_content'}
                <section class="mg-banner mg-about-banner">
                    <section class="mg-crumbs mg-crumbs--banner">
                        <div class="container">
                            <a href="/">Главная</a>
                            <span>О компании</span>
                        </div>
                    </section>
                    <div class="container d-flex align-items-center"><div class="mg-faq-title"><b>about</b> megumi</div></div>
                </section>
                <section class="mg-about-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-7">
                                <span class="mg-faq-name">О нас</span>
                                <p>В наших магазинах представлены более десяти тысяч товаров лидеров в области парфюмерии и косметики: Dior, Guerlain, Givenchy, Kenzo, YSL, DG, Clarinsи многие другие. Компания является эксклюзивным продавцом парфюмерии Lulu Castagnette, испанской марки LOEWE, ароматов Banana Republic и многих других продуктов, которые мы выбираем из всего многообразия специально для Вас.</p>
                                <p>Прекрасный дизайн, безупречный узнаваемый стиль, грамотность и вежливость продавцов-консультантов и, конечно же, богатый ассортимент продукции и гибкая система скидок, единые для всей сети, сделали ее популярной среди многочисленных клиентов. На сегодняшний день их миллионы, и количество постоянных покупателей неуклонно растет.</p>
                                <p>Хранение и транспортировка продукции осуществляется в соответствии с требованиями ГОСТ и нормативами государственных органов и производителей.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mg-subscriber mg-subscriber--company">
                    <div class="container">
                        <span class="mg-title">Получите доступ к нашим акциям и новостям</span>
                        <form action="#" method="post">
                            <fieldset class="mg-subscriber-form">
                                <div class="row">
                                    <div class="col-lg-4"><input type="text" class="mg-input--border-bottom mg-input--border-bottom-white" placeholder="Имя" required /></div>
                                    <div class="col-lg-4"><input type="email" class="mg-input--border-bottom" placeholder="E-mail" required /></div>
                                    <div class="col-lg-4">
                                        <div class="pl-0 pl-lg-5">
                                            <button class="mg-btn mg-btn--black" type="submit">Подписаться</button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                <label class="custom-control-label" for="customCheck1">Я согласен с политикой о предоставлении Конфиденциальных данных</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            {/block}
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
