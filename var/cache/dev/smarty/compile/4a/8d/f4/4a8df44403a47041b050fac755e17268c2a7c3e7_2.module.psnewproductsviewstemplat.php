<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:22:13
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065ea52d1b54_77167609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1559307429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product_slider_special.tpl' => 1,
  ),
),false)) {
function content_5d065ea52d1b54_77167609 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_newproducts/views/templates/hook/ps_newproducts.tpl -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product_slider_special.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_newproducts/views/templates/hook/ps_newproducts.tpl --><?php }
}
