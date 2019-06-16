<?php
/* Smarty version 3.1.33, created on 2019-06-10 08:08:37
  from '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/admin/ssr_shop_reviews/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfde5d570b581_13556621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cda59d267ba2b93710551864f9aabefc270562' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/admin/ssr_shop_reviews/helpers/list/list_content.tpl',
      1 => 1559321281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfde5d570b581_13556621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4897536425cfde5d5702270_66803250', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_4897536425cfde5d5702270_66803250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_4897536425cfde5d5702270_66803250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['params']->value['picture'])) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'quotes','UTF-8' ));?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
