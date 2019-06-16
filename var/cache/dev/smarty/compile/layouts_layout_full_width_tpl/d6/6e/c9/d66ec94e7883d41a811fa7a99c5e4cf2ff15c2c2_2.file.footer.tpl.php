<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:24:22
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065f269f3955_00066527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66ec94e7883d41a811fa7a99c5e4cf2ff15c2c2' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/footer.tpl',
      1 => 1559541555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d065f269f3955_00066527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15289102545d065f269d9145_58519370', 'hook_footer_before');
?>


      <?php echo '<script'; ?>
 src="https://presta.padilo.pro/themes/classic/assets/js/popper.min.js"    defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://presta.padilo.pro/themes/classic/assets/js/bootstrap.min.js" defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://presta.padilo.pro/themes/classic/assets/js/slick.min.js"     defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://unpkg.com/shufflejs@5"                                       defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://presta.padilo.pro/themes/classic/assets/js/main.js"          defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://presta.padilo.pro/themes/classic/assets/js/theme.js"         defer><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


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

                                                                                                                                                                  <?php }
/* {block 'hook_footer_before'} */
class Block_15289102545d065f269d9145_58519370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_15289102545d065f269d9145_58519370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

  <?php }
}
}
/* {/block 'hook_footer_before'} */
}
