<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:45:59
  from '/home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/admin/addjs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fee7db7d97_72289171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be3664b2fc78130d77678e6b07e6ffa21b50e8e' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/admin/addjs.tpl',
      1 => 1559058493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fee7db7d97_72289171 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.icon-AdminSmartBlog:before{
  content: "\f14b";
   }
 
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['smartmodules_dir']->value;?>
modules/smartblog/views/css/bootstrap-grid.css">
<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }
echo '</script'; ?>
><?php }
}
