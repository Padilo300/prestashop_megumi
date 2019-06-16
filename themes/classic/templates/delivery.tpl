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
                <section class="mg-crumbs">
                    <div class="container">
                        <a href="/">Главная</a>
                        <span>Доставка и оплата</span>
                    </div>
                </section>
                <section class="mg-delivery-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 mx-auto">
                                <div class="mg-top">
                                    <span class="mg-title">Доставка и оплата</span>
                                </div>
                                <ul class="nav nav-pills mb-3 mg-nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Доставка</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Оплата</a>
                                    </li>
                                </ul>
                                <div class="tab-content mg-tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="mg-delivery-content">
                                            <strong>Заказы на сумму от 10 000 руб. Доставляются бесплатно!</strong>
                                            <div class="mg-delivery-block-1 mt-4">
                                                <span class="mg-title mg-text-grey">Москва</span>
                                                <p>Доcтавка в день заказа – 450 руб.</p>
                                            </div>
                                            <div class="mg-delivery-block-1">
                                                <span class="mg-title mg-text-grey">Самовывоз</span>
                                                <p>Для жителей Москвы доступна услуга самовывоза. Самовывоз возможен в день заказа и осуществляется по адресу 3я улица Строителей, 5/2 с 12:00 – 21:00
                                                    каждый день.</p>
                                            </div>
                                            <div class="mg-delivery-block-1">
                                                <span class="mg-title mg-text-grey">Россия и СНГ</span>
                                                <p>Доставка по России и странам СНГ осуществляется курьерской службой. Стоимость и сроки доставки 450 руб. в любой город России. В среднем, с момента оплаты заказа доставка по России длится от 2 до 5 дней.</p>
                                            </div>
                                            <div class="mg-delivery-block-1 mb-4">
                                                <span class="mg-title mg-text-grey">Европа и Америка</span>
                                                <p>Доставка в страны Европы и Америки осуществляется курьерской службой. Стоимость и сроки доставки 1500 руб. в любой город.<br/>В среднем, с момента оплаты заказа международная доставка длится от 10 до 20 дней с учетом подготовки документов.</p>
                                            </div>
                                            <small class="mg-text-grey">* В праздничные и предпраздничные дни срок доставки может <br/>быть увеличен из-за большого спроса.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="mg-payment-content">
                                            <strong>Вы можете оплатить заказ любым из предложенных способов</strong>
                                            <div class="mg-payment-content__item mt-4">
                                                <div class="mg-image"><img src="images/uploads/pay-visa.jpg" alt="" /></div>
                                                <div class="mg-text-grey"><small>Банковская карта</small></div></div>
                                            <div class="mg-payment-content__item">
                                                <div class="mg-image"><img src="images/uploads/pay-yd.jpg" alt="" /></div>
                                                <div class="mg-text-grey"><small>Кошелек Яндекс.Деньги</small></div>
                                            </div>
                                            <div class="mg-payment-content__item">
                                                <div class="mg-image"><img src="images/uploads/pay-sb.jpg" alt="" /></div>
                                                <div class="mg-text-grey"><small>Сбербанк: по sms или Сбербанк онлайн</small></div>
                                            </div>
                                            <div class="mg-payment-content__item">
                                                <div class="mg-image"><img src="images/uploads/pay-wm.jpg" alt="" /></div>
                                                <div class="mg-text-grey"><small>Система электронных платежей WebMoney</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mg-subscriber">
                    <div class="container">
                        <span class="mg-title">Получите доступ к нашим акциям и новостям</span>
                        <form action="#" method="post">
                            <fieldset class="mg-subscriber-form">
                                <div class="row">
                                    <div class="col-lg-4"><input type="text" class="mg-input--border-bottom" placeholder="Имя" required /></div>
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
