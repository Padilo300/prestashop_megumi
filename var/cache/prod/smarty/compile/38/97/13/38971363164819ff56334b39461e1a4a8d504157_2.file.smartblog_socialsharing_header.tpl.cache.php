<?php
/* Smarty version 3.1.33, created on 2019-06-22 22:06:02
  from '/home/padilo00/padilo.pro/presta/modules/smartblogaddthisbutton/views/templates/hook/smartblog_socialsharing_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e7c1abb8464_72438464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38971363164819ff56334b39461e1a4a8d504157' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogaddthisbutton/views/templates/hook/smartblog_socialsharing_header.tpl',
      1 => 1559058530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0e7c1abb8464_72438464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5322190345d0e7c1aba9c26_59510514';
?>
<meta property="og:type" content="product" />

<meta property="og:url" content="<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
" />

<meta property="og:title" content="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />

<meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />

<meta property="og:description" content="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />

<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id'],'single-default'), ENT_QUOTES, 'UTF-8');?>
" /><?php }
}
