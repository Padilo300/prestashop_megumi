<?php
/* Smarty version 3.1.33, created on 2019-06-12 14:33:43
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/my-reviews/my-reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00e3174207f3_60273177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9238aaeb5647847954dfedc9f9bd1dea1f0cd2f6' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/my-reviews/my-reviews.tpl',
      1 => 1560142456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/review-list/list.tpl' => 1,
  ),
),false)) {
function content_5d00e3174207f3_60273177 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['visitor']->value['toReview']['product']) {?><h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Could you review these products?','mod'=>'revws'),$_smarty_tpl ) );?>
</h1><div class='revws-review-requests'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['visitor']->value['toReview']['product'], 'productId');
$_smarty_tpl->tpl_vars['productId']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['productId']->value) {
$_smarty_tpl->tpl_vars['productId']->iteration++;
$__foreach_productId_10_saved = $_smarty_tpl->tpl_vars['productId'];
if ($_smarty_tpl->tpl_vars['productId']->iteration <= $_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['customerMaxRequests']) {
$_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['reviewEntities']->value['product'][$_smarty_tpl->tpl_vars['productId']->value]);?><div class='revws-review-request'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['image'], ENT_QUOTES, 'UTF-8');?>
" /><h3 class='revws-review-request-name'><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3></div><?php }
$_smarty_tpl->tpl_vars['productId'] = $__foreach_productId_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your reviews','mod'=>'revws'),$_smarty_tpl ) );?>
</h1><?php if ($_smarty_tpl->tpl_vars['reviewList']->value['reviews']) {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewStyle'=>'item-with-entity','reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'displayCriteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['displayCriteria'],'shopName'=>$_smarty_tpl->tpl_vars['reviewsData']->value['shopName'],'shape'=>$_smarty_tpl->tpl_vars['reviewsData']->value['theme']['shape'],'criteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['criteria'],'microdata'=>false,'allowPaging'=>true), 0, false);
} else { ?><div className="form-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You haven't written any review yet",'mod'=>'revws'),$_smarty_tpl ) );?>
</div><?php }
}
}
