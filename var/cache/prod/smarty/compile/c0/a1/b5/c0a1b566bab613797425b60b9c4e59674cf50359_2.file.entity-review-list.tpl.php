<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/entity-review-list/entity-review-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f490ca8_86401270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a1b566bab613797425b60b9c4e59674cf50359' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/entity-review-list/entity-review-list.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/review-list/list.tpl' => 1,
  ),
),false)) {
function content_5ced5a9f490ca8_86401270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('hasReviewed', in_array($_smarty_tpl->tpl_vars['entityId']->value,$_smarty_tpl->tpl_vars['visitor']->value['reviewed'][$_smarty_tpl->tpl_vars['entityType']->value]));
$_smarty_tpl->_assignInScope('canReview', !($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest' && !$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['allowGuestReviews']) && !$_smarty_tpl->tpl_vars['hasReviewed']->value);
if ($_smarty_tpl->tpl_vars['reviewList']->value['total'] > 0) {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewStyle'=>'item','reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value,'shopName'=>$_smarty_tpl->tpl_vars['reviewsData']->value['shopName'],'shape'=>$_smarty_tpl->tpl_vars['reviewsData']->value['theme']['shape'],'criteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['criteria'],'displayCriteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['displayCriteria'],'microdata'=>$_smarty_tpl->tpl_vars['microdata']->value,'allowPaging'=>$_smarty_tpl->tpl_vars['allowPaging']->value), 0, false);
if (!$_smarty_tpl->tpl_vars['hasReviewed']->value) {
if ($_smarty_tpl->tpl_vars['canReview']->value) {?><div class="form-group"><a class="btn btn-primary" data-revws-entity-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8');?>
" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityId']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review!','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else {
if ($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest') {?><div class="form-group"><a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsData']->value['loginUrl'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in to write a review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hasReviewed']->value) {
if ($_smarty_tpl->tpl_vars['canReview']->value) {?><div class="form-group"><a class="btn btn-primary" data-revws-entity-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8');?>
" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityId']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write a review!','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else {
if ($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest' && $_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['showSignInButton']) {?><div class="form-group"><a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsData']->value['loginUrl'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in to write a review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else { ?><div class="form-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'revws'),$_smarty_tpl ) );?>
</div><?php }
}
}
}
}
}
