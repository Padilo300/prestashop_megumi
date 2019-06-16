<?php
/* Smarty version 3.1.33, created on 2019-06-13 20:59:02
  from '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/front/_reviews-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d028ee6198dc6_08120584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8f480f524f00d83d7e905cef52b686494a2f9a' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/front/_reviews-list.tpl',
      1 => 1559629367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../hook/_form.tpl' => 1,
  ),
),false)) {
function content_5d028ee6198dc6_08120584 (Smarty_Internal_Template $_smarty_tpl) {
?><style>.mg-main-customers__item-info{position: absolute;bottom: 0;}</style><section class="mg-banner mg-reviews-banner"><section class="mg-crumbs mg-crumbs--banner"><div class="container"><a href="/">Главная</a><span> Отзывы</span></div></section><div class="container d-flex align-items-center"><div class="mg-faq-title">megumi <b>reviews</b></div></div></section><section class="mg-reviews-info"><div class="container"><div class="row"><div class="col-lg-8 col-xl-7"><h1>Отзывы</h1><p>Будем признательны, если вы уделите немного времени и оставите отзыв об ассортименте и ценах товара, о работе отдела клиентского сервиса и курьерской службы и любые другие. <br/>Ваши отзывы помогут улучшить клиентский сервис и радовать вас еще больше.</p><hr class="my-4"></div></div><div class="mg-top mb-4"><span class="mg-title text-uppercase">Оставить отзыв</span></div><?php $_smarty_tpl->_subTemplateRender("file:../hook/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></section><div class="container"><hr><?php if ($_smarty_tpl->tpl_vars['reviews']->value->count()) {?><div class="reviews-list"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review', false, NULL, 'reviews', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?><div class="col-md-6 col-xl-4 mb-5"><div class="mg-main-customers__item"><p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->text )), ENT_QUOTES, 'UTF-8');?>
</p><div class="mg-main-customers__item-info"><div class="mg-main-customers__item-avatar"><img src="http://presta.padilo.pro/img/seosashopreviews/1-standalone.jpg" alt="" /></div><div class="mg-main-customers__item-rating"><?php $_smarty_tpl->_assignInScope('ratings', array(1,2,3,4,5));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings']->value, 'rating');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->value) {
?><i class="<?php if ($_smarty_tpl->tpl_vars['rating']->value <= $_smarty_tpl->tpl_vars['review']->value->rating) {?> active<?php }?>"> </i><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="mg-main-customers__item-name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->name )), ENT_QUOTES, 'UTF-8');?>
</div></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div>

<?php }
}
