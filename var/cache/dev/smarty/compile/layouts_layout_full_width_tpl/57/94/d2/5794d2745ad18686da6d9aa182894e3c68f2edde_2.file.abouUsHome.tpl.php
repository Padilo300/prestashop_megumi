<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:03
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/abouUsHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc1ba61457_56713063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5794d2745ad18686da6d9aa182894e3c68f2edde' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/abouUsHome.tpl',
      1 => 1559399130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc1ba61457_56713063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="mg-main-about">
  <div class="container">
    <h2>О компании</h2>
    <img class="d-none d-xl-inline" src="/themes/classic/img/megumi-text.jpg" alt="" />
    <div class="mg-main-about__row">
      <div class="mg-main-about__col order-2 order-xl-1"><strong>В MegumiShop мы уверены: люди, увлеченные своей работой, делают ее лучше. Поэтому мы с готовностью обсуждаем новые идеи и поощряем профессиональное развитие. У нас ценятся дружеские отношения в коллективе. Мы не только работаем, но и отдыхаем вместе: играем в футбол, отмечаем праздники и веселимся на наших вечеринках.</strong></div>
      <div class="mg-main-about__col order-1 order-xl-2"><img src="/themes/classic/img/img-1.jpg" alt="" /></div>
      <div class="mg-main-about__col d-none d-xl-block"> <img src="/themes/classic/img/img-2.jpg" alt="" /></div>

    </div>
    <a class="mg-btn" href="/about-us">Узнать больше</a>
  </div>
</section>

<?php echo '<script'; ?>
>
  $(document).ready(function () {
    $('#mg-main-slider-bannerHome').slick({
      arrows: false,
      dots: true,
      draggable: true,
      slidesToShow: 3,
      slidesToScroll: 3,
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
<?php echo '</script'; ?>
><?php }
}
