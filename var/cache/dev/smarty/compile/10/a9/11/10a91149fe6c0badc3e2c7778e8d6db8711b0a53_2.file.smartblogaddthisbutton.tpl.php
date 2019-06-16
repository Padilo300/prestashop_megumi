<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:09:28
  from '/home/padilo00/padilo.pro/presta/modules/smartblogaddthisbutton/views/templates/front/smartblogaddthisbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039c88288987_80319637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a91149fe6c0badc3e2c7778e8d6db8711b0a53' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogaddthisbutton/views/templates/front/smartblogaddthisbutton.tpl',
      1 => 1559058530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d039c88288987_80319637 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="articleShareThis">
     <p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share This Post :','mod'=>'smartblog'),$_smarty_tpl ) );?>
 </p>
 </div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addthis_api_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>

<div class="addthis_toolbox addthis_default_style addthis_20x20_style">
    <a class="addthis_counter_facebook"></a>
    <a class="addthis_counter_twitter"></a>
    <a class="addthis_counter_pinterest_share"></a>
    <a class="addthis_counter_reddit"></a>
    <a class="addthis_counter_linkedin"></a>   
 	<a class="addthis_counter addthis_pill_style"></a>
</div>
 
<?php }
}
