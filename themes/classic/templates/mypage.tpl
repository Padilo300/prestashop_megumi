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

                <section class="mg-banner mg-faq-banner">
                    <section class="mg-crumbs mg-crumbs--banner">
                        <div class="container">
                            <a href="/">Главная</a>
                            <span>FAQ</span>
                        </div>
                    </section>
                    <div class="container d-flex align-items-center"><div class="mg-faq-title">megumi <b>Q&A</b></div></div>
                </section>
                <section class="mg-faq-info">
                    <div class="container">
                        <span class="mg-faq-name">Часто задаваемые вопросы</span>
                        <p>Здесь вы можете ознакомиться с ответами на часто задаваемые вопросы. А также вы можете задать свой вопрос, касаемо товара или сервиса нашего магазина.
                            Наша служба поддержки ответит вам в близжайшее время.</p>
                    </div>
                </section>
                <div class="container">
                    <div class="mg-profile-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mg-profile-faq__list">
                                    <div class="mg-profile-faq__item mg-profile-faq__item--active">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте 1! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте 2! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="d-none d-lg-block mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="d-none d-lg-block mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                    <div class="d-none d-lg-block mg-profile-faq__item">
                                        <div class="mg-ask">
                                            <span class="mg-title">Ваш вопрос от 9 января 2019</span>
                                            <p>Не могу понять, как правильно пользоваться губной помадой.<br/>Не подскажите?</p>
                                        </div>
                                        <div class="mg-answer">
                                            <span class="mg-title">Наш ответ</span>
                                            <p>Здравствуйте! Нужно ее открыть и начать красить поверхность ровными движениями.</p>
                                        </div>
                                        <a class="d-block d-lg-none mg-clicker-link" href="#"><i class="mg-icon icon-angle-down"></i></a>
                                    </div>
                                </div>
                                <a class="d-block d-lg-none text-center mg-btn mg-profile-faq__more-link" href="#">Показать еще</a>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="mg-faq-form">
                    <div class="container">
                        <div class="mg-top">
                            <span class="mg-title">Задать вопрос</span>
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
