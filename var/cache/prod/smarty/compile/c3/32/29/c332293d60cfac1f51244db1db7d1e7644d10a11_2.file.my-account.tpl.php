<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:29
  from '/home/padilo00/padilo.pro/presta/modules/blockwishlist/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5aa50b5094_35874097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c332293d60cfac1f51244db1db7d1e7644d10a11' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/blockwishlist/my-account.tpl',
      1 => 1558984671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5aa50b5094_35874097 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
		<i class="icon-heart"></i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
	</a>
</li>
<!-- END : MODULE WishList -->
<?php }
}
