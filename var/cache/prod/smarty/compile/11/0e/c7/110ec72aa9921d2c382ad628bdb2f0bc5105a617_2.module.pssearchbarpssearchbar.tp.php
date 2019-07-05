<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:56:15
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1f2ccf02a085_30211433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1559086763,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1f2ccf02a085_30211433 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->

<div id="search_widget" class="mf-header__finder" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" >
		<input type="hidden" name="controller" value="search">
		<fieldset class="mf-header__finder-input-box">
			<input type="text" class="mf-header__finder-input" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" >
		</fieldset>
		<fieldset class="mf-header__finder-btn-box">
			<button type="submit" id="js-mg-finder-btn" class="mf-header__finder-btn">
				<span class="mg-icon icon-search"></span>
			</button>
		</fieldset>
	</form>
</div>

	
<!-- /Block search module TOP -->
<?php }
}
