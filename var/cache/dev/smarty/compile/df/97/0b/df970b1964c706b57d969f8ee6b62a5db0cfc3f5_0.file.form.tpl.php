<?php
/* Smarty version 3.1.33, created on 2019-06-17 04:19:50
  from '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06eab6b55ad3_80033611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df970b1964c706b57d969f8ee6b62a5db0cfc3f5' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/admin5225jw75b/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl',
      1 => 1558969067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06eab6b55ad3_80033611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_450435675d06eab6b4c574_21318621', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_450435675d06eab6b4c574_21318621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_450435675d06eab6b4c574_21318621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
