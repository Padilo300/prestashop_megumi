<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:28
  from '/home/padilo00/padilo.pro/presta/modules/blockwishlist/blockwishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5aa4744b95_94966878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63306a1ae5e345005c0b6f9c43997ddf8a417ad9' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/blockwishlist/blockwishlist_top.tpl',
      1 => 1558984671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5aa4744b95_94966878 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
console.log(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist_products']->value ));?>
);
var wishlistProductsIds = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist_products']->value ));?>
;
var loggin_required 	= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
";
var added_to_wishlist 	= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
";
var mywishlist_url		= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'blockwishlist','controller'=>'mywishlist'),$_smarty_tpl ) );?>
";
var baseDir				= "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
";

<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
	var isLoggedWishlist = true
<?php } else { ?>
	var isLoggedWishlist = false
<?php }?>	
<?php echo '</script'; ?>
><?php }
}
