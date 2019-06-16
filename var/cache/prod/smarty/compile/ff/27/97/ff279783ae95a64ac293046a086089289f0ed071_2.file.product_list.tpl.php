<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:28
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5aa4b658f9_68167882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff279783ae95a64ac293046a086089289f0ed071' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/product_list.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/helpers/grading.tpl' => 1,
  ),
),false)) {
function content_5ced5aa4b658f9_68167882 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['reviewCount']->value > 0 || !$_smarty_tpl->tpl_vars['omitEmpty']->value) {?>
<div class="revws-product-list<?php if ($_smarty_tpl->tpl_vars['reviewCount']->value == 0) {?> revws-product-list-empty<?php }?>">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsUrl']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/helpers/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['grade']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'list'), 0, false);
?>
    <div class="revws-count-text">
      <?php if ($_smarty_tpl->tpl_vars['reviewCount']->value == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'one review','mod'=>'revws'),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d reviews','sprintf'=>array($_smarty_tpl->tpl_vars['reviewCount']->value),'mod'=>'revws'),$_smarty_tpl ) );?>

      <?php }?>
    </div>
  </a>
</div>
<?php }
}
}
