<?php
/* Smarty version 3.1.33, created on 2019-06-17 04:20:19
  from '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06ead39d40b4_45158419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729cd2b294882d1ebddbd033181c67b6a746d598' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1558969067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06ead39d40b4_45158419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20457498365d06ead39d1d93_78994568', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_20457498365d06ead39d1d93_78994568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_20457498365d06ead39d1d93_78994568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
