<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f4596e5_97050755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f314968f59ea37be0464aabd43e11ffdd10cd74c' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/widget.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/review-list/list.tpl' => 1,
    'file:modules/revws/views/templates/widgets/my-reviews/my-reviews.tpl' => 1,
    'file:modules/revws/views/templates/widgets/entity-review-list/entity-review-list.tpl' => 1,
  ),
),false)) {
function content_5ced5a9f4596e5_97050755 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="revws-portal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['widget']->value['type'] === 'list') {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/review-list/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewEntities'=>$_smarty_tpl->tpl_vars['reviewEntities']->value,'reviewStyle'=>$_smarty_tpl->tpl_vars['widget']->value['reviewStyle'],'displayReply'=>$_smarty_tpl->tpl_vars['widget']->value['displayReply'],'displayCriteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['displayCriteria'],'allowPaging'=>$_smarty_tpl->tpl_vars['widget']->value['allowPaging'],'microdata'=>$_smarty_tpl->tpl_vars['widget']->value['microdata'],'shopName'=>$_smarty_tpl->tpl_vars['reviewsData']->value['shopName'],'shape'=>$_smarty_tpl->tpl_vars['reviewsData']->value['theme']['shape'],'criteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['criteria']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['widget']->value['type'] === 'myReviews') {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/my-reviews/my-reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value,'reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewEntities'=>$_smarty_tpl->tpl_vars['reviewEntities']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['widget']->value['type'] === 'entityList') {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/entity-review-list/entity-review-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value,'reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewEntities'=>$_smarty_tpl->tpl_vars['reviewEntities']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value,'entityId'=>$_smarty_tpl->tpl_vars['widget']->value['entityId'],'entityType'=>$_smarty_tpl->tpl_vars['widget']->value['entityType'],'microdata'=>$_smarty_tpl->tpl_vars['widget']->value['microdata'],'allowPaging'=>$_smarty_tpl->tpl_vars['widget']->value['allowPaging']), 0, false);
} else { ?><h2>Unknown widget: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['type'], ENT_QUOTES, 'UTF-8');?>
</h2><?php }?></div>
<?php }
}
