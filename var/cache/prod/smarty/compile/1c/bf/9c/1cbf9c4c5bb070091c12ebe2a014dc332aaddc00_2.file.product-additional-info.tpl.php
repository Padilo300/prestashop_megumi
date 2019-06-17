<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:24:25
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0707e97bb4f5_24695877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbf9c4c5bb070091c12ebe2a014dc332aaddc00' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1558969069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0707e97bb4f5_24695877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
