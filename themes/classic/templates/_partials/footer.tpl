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



{block name='hook_footer_before'}
  {if $page.page_name == 'index'}
    {hook h='displayFooterBefore'}
  {/if}
{/block}


{*      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>*}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{*      <script src="https://presta.padilo.pro/themes/classic/assets/js/popper.min.js"    defer></script>*}
{*      <script src="https://presta.padilo.pro/themes/classic/assets/js/bootstrap.min.js" defer></script>*}

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>


{*    <script src="https://presta.padilo.pro/themes/classic/assets/js/slick.min.js"     defer></script>*}
      <script src="https://unpkg.com/shufflejs@5"                                       defer></script>
      <script src="https://presta.padilo.pro/themes/classic/assets/js/main.js"          defer></script>

<script>
  'use strict';

  var Shuffle = window.Shuffle;

  var Demo = function (element) {
    this.element = element;
    this.initShuffle();
    this.setupEvents();
  };

  // Column width and gutter width options can be functions
  Demo.prototype.initShuffle = function () {
    this.shuffle = new Shuffle(this.element, {
      itemSelector: '.box',
      speed: 250,
      sizer: '.my-sizer-element',
      easing: 'ease'
    });
  };

  Demo.prototype.setupEvents = function () {
    document.querySelector('#filterer').addEventListener('change', this.onFilterChange.bind(this));
    // Show off some shuffle events
    this.shuffle.on(Shuffle.EventType.REMOVED, function (data) {
      console.log(data);
    });
  };




  Demo.prototype.toggleActiveClasses = function (event) {
    // Add and remove `active` class from buttons.
    var buttons = Array.from(event.currentTarget.children);
    buttons.forEach(function (button) {
      if (button.querySelector('input').value === event.target.value) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });
  };

  Demo.prototype.getReviews = function (element) {
    return parseInt(element.getAttribute('data-reviews'), 10);
  };


  Demo.prototype.onFilterChange = function (event) {
    this.toggleActiveClasses(event);
    this.filterBy(event.target.value);
  };

  Demo.prototype.filterBy = function (value) {
    var filterBy;
    var _this = this;

    if (value === 'none') {
      filterBy = Shuffle.ALL_ITEMS;
    } else {
      filterBy = function (element) {
        return _this.getReviews(element) == value;
      };
    }

    this.shuffle.filter(filterBy);
  };

  document.addEventListener('DOMContentLoaded', function () {
    window.demo = new Demo(document.getElementById('my-shuffle'));
  });

  $(document).ready(function () {

    $('#mg-main-slider-popular-1').slick({
      arrows: false,
      dots: true,
      draggable: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
          }
        }
      ]
    });

  });
</script>


<footer class="mg-footer">
  <section class="mg-footer__top">
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3">
      <ul class="mg-footer__list">
        <li><a href="#">Партнерская программа</a></li>
        <li><a href="#">Связаться с нами</a></li>
        <li><a href="#">Оферта</a></li>
        <li><a href="ru/content/2-legal-notice">Политика конфиденциальности</a></li>
      </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
      <ul class="mg-footer__list">
        <li><a href="ru/content/4-about-us">О компании</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Акции и Скидки</a></li>
        <li><a href="#">Помощь</a></li>
        <li><a href="#">Ответы на вопросы</a></li>
      </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
      <ul class="mg-footer__list">
        <li><a href="#">Мой аккаунт</a></li>
        <li><a href="#">Мои заказы</a></li>
        <li><a href="#">Отследить заказ</a></li>
        <li><a href="ru/content/1-delivery">Доставка и Оплата</a></li>
      </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
      <ul class="mg-footer__list">
        <li><a class="mg-text-grey" href="/ru/contact-us">Контакты</a></li>
      </ul>
      <ul class="mg-footer__list">
        <li><a href="tel:8-800-123-45-67"><strong>8-800-123-45-67</strong></a></li>
        <li><a href="mailto:info@megumi.ru"><strong>info@megumi.ru</strong></a></li>
      </ul>
    </div>
  </div>
</div>
  </section>
  <section class="mg-footer__bottom">
    <div class="container">
      <a class="mg-footer__logo" href="#"><span class="icon-logo-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
      <span class="mg-footer__copy">©MegumiShop. 2019 Все права защищены</span>
      <div class="mg-footer__socials">
        <a href="#"><i class="mg-icon icon-paper-plane"></i></a>
        <a href="#"><i class="mg-icon icon-instagram"></i></a>
        <a href="#"><i class="mg-icon icon-vk"></i></a>
        <a href="#"><i class="mg-icon icon-facebook"></i></a>
        <a href="#"><i class="mg-icon icon-youtube-play"></i></a>
      </div>
      <a class="mg-footer__totop" id="js-mg-totop" href="#totop"><i class="mg-icon icon-to-top"></i></a>
    </div>
  </section>
</footer>

{*<div class="container">*}
  {*<div class="row">*}
    {*{block name='hook_footer_before'}
  {hook h='displayFooterBefore'}
{/block}*}
  {*</div>*}
{*</div>*}
{*<div class="footer-container">*}
  {*<div class="container">*}
    {*<div class="row">*}
      {*{block name='hook_footer'}*}
        {*{hook h='displayFooter'}*}
      {*{/block}*}
    {*</div>*}
    {*<div class="row">*}
      {*{block name='hook_footer_after'}*}
        {*{hook h='displayFooterAfter'}*}
      {*{/block}*}
    {*</div>*}
    {*<div class="row">*}
      {*<div class="col-md-12">*}
        {*<p class="text-sm-center">*}
          {*{block name='copyright_link'}*}
            {*<a class="_blank" href="http://www.prestashop.com" target="_blank">*}
              {*{l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}*}
            {*</a>*}
          {*{/block}*}
        {*</p>*}
      {*</div>*}
    {*</div>*}
  {*</div>*}
{*</div>*}
