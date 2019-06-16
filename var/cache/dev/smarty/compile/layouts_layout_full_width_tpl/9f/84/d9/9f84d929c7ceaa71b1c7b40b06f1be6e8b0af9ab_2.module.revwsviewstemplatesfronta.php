<?php
/* Smarty version 3.1.33, created on 2019-06-07 16:30:46
  from 'module:revwsviewstemplatesfronta' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa67060763d9_48406056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f84d929c7ceaa71b1c7b40b06f1be6e8b0af9ab' => 
    array (
      0 => 'module:revwsviewstemplatesfronta',
      1 => 1559101273,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/hook/widget.tpl' => 1,
  ),
),false)) {
function content_5cfa67060763d9_48406056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/all-reviews.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21247045085cfa6706061eb9_54935763', 'page_content');
?>

<!-- end /home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/all-reviews.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_21247045085cfa6706061eb9_54935763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_21247045085cfa6706061eb9_54935763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
  <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('reviews',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'revws'),$_smarty_tpl ) );?>

  </a>
  <span class="navigation_page">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'revws'),$_smarty_tpl ) );?>

  </span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'revws'),$_smarty_tpl ) );?>

</h1>

<?php if ($_smarty_tpl->tpl_vars['reviewList']->value['total'] > 0) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/hook/widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget'=>$_smarty_tpl->tpl_vars['widget']->value,'reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewEntitites'=>$_smarty_tpl->tpl_vars['reviewEntities']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value), 0, false);
} else { ?>
<div class="form-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'revws'),$_smarty_tpl ) );?>
</div>
<?php }
}
}
/* {/block 'page_content'} */
}
