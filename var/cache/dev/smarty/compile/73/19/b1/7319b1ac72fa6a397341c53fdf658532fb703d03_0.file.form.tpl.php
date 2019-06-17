<?php
/* Smarty version 3.1.33, created on 2019-06-17 04:16:42
  from '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/features/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06e9fa30a7a7_11088756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7319b1ac72fa6a397341c53fdf658532fb703d03' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/features/helpers/form/form.tpl',
      1 => 1558969067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06e9fa30a7a7_11088756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11280009515d06e9fa2fd647_98331450', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_11280009515d06e9fa2fd647_98331450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_11280009515d06e9fa2fd647_98331450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureForm",'id_feature'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
