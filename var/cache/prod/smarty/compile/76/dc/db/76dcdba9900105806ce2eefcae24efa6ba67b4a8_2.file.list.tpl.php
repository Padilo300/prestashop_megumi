<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/review-list/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f4aea06_93822118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76dcdba9900105806ce2eefcae24efa6ba67b4a8' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/review-list/list.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/review-list/item.tpl' => 1,
    'file:modules/revws/views/templates/widgets/review-list/item-with-entity.tpl' => 1,
    'file:modules/revws/views/templates/widgets/review-list/paging.tpl' => 1,
  ),
),false)) {
function content_5ced5a9f4aea06_93822118 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['reviewList']->value) {?><div class="revws-review-list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviewList']->value['reviews'], 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
if ($_smarty_tpl->tpl_vars['reviewStyle']->value === 'item') {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('review'=>$_smarty_tpl->tpl_vars['review']->value,'shopName'=>$_smarty_tpl->tpl_vars['shopName']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'criteria'=>$_smarty_tpl->tpl_vars['criteria']->value,'displayCriteria'=>$_smarty_tpl->tpl_vars['displayCriteria']->value,'microdata'=>$_smarty_tpl->tpl_vars['microdata']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/item-with-entity.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('review'=>$_smarty_tpl->tpl_vars['review']->value,'shopName'=>$_smarty_tpl->tpl_vars['shopName']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'criteria'=>$_smarty_tpl->tpl_vars['criteria']->value,'displayCriteria'=>$_smarty_tpl->tpl_vars['displayCriteria']->value,'microdata'=>$_smarty_tpl->tpl_vars['microdata']->value), 0, true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->tpl_vars['allowPaging']->value && $_smarty_tpl->tpl_vars['reviewList']->value['pages'] > 1) {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
}
