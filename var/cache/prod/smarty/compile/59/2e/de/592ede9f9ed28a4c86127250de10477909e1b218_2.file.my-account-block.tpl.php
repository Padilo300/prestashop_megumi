<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:29
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/my-account-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5aa50c6c97_69729490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592ede9f9ed28a4c86127250de10477909e1b218' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/my-account-block.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5aa50c6c97_69729490 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
  <a id="revws-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('revws','MyReviews',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My reviews','mod'=>'revws'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
