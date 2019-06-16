<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:09:27
  from '/home/padilo00/padilo.pro/presta/modules/smartblogcategories/category-tree-branch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039c87a770c7_93767228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fe0d35cd9aa6158b982479949ae2d0e94f7f2a' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogcategories/category-tree-branch.tpl',
      1 => 1559058537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./category-tree-branch.tpl' => 3,
  ),
),false)) {
function content_5d039c87a770c7_93767228 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php if ($_smarty_tpl->tpl_vars['node']->value['name'] == '') {?>
				<?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] : null)) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true','select'=>'false'), 0, true);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_subTemplateRender("file:./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false','select'=>'false'), 0, true);
?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
		<?php } else { ?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['last']->value) && $_smarty_tpl->tpl_vars['last']->value == 'true') {?> last<?php }?>" >
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['currentCategoryId']->value) && $_smarty_tpl->tpl_vars['node']->value['id'] == $_smarty_tpl->tpl_vars['currentCategoryId']->value) {?>class="selected"<?php }?>
					title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['desc'])),255,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['level_depth'];
echo $_smarty_tpl->tpl_vars['node']->value['level_depth'];?>
-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				<?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] : null)) {?>
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true','select'=>'false'), 0, true);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false','select'=>'false'), 0, true);
?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</option>
		<?php }
}
}
