<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:36:03
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc93ceb1c3_11234233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1559082673,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc93ceb1c3_11234233 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl -->


<a class="mf-header__cart-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <i class="mg-icon icon-cart"></i> 
  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
</a>


<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
