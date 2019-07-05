<?php
/* Smarty version 3.1.33, created on 2019-06-27 07:19:17
  from 'module:rbspaymentviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1443c5df0357_91281955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '193c10f27f3e4324ebddd72d57b6d50388d7467e' => 
    array (
      0 => 'module:rbspaymentviewstemplatesh',
      1 => 1558972159,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1443c5df0357_91281955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="payment_module">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Оплата картой банка через интернет эквайринг','mod'=>'rbspayment'),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(обработка заказа продлится дольше)','mod'=>'rbspayment'),$_smarty_tpl ) );?>

</p>
<?php }
}
