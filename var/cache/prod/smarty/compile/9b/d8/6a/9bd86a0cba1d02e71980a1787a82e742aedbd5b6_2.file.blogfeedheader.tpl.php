<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:57:22
  from '/home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/front/plugins/blogfeedheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d070fa2a6a8f1_46574653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd86a0cba1d02e71980a1787a82e742aedbd5b6' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/front/plugins/blogfeedheader.tpl',
      1 => 1559058493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d070fa2a6a8f1_46574653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="alternate" type="application/rss+xml" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedUrl']->value, ENT_QUOTES, 'UTF-8');?>
" />


  <meta name="title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keyword']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
