<?php
/* Smarty version 3.1.33, created on 2019-05-28 21:42:19
  from '/home/padilo00/padilo.pro/presta/modules/smartblogcategories/new-smartblogcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced810b4c19f3_70919042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9268f0465f4b1eb817a1909c2f5cea83c249fcba' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogcategories/new-smartblogcategories.tpl',
      1 => 1559058537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./category-tree-branch.tpl' => 1,
  ),
),false)) {
function content_5ced810b4c19f3_70919042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'blockCategTree' => 
  array (
    'compiled_filepath' => '/home/padilo00/padilo.pro/presta/var/cache/prod/smarty/compile/92/68/f0/9268f0465f4b1eb817a1909c2f5cea83c249fcba_2.file.new-smartblogcategories.tpl.php',
    'uid' => '9268f0465f4b1eb817a1909c2f5cea83c249fcba',
    'call_name' => 'smarty_template_function_blockCategTree_12638254735ced810b47e557_54340664',
  ),
));
if ($_smarty_tpl->tpl_vars['isDropdown']->value) {?>
	<div class="block-categories hidden-sm-down">
		<h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','mod'=>'smartblogpopularposts'),$_smarty_tpl ) );?>
</a></h4>
		<select onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value="">Select Category</option>
			<?php $_smarty_tpl->_subTemplateRender("file:./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['blockCategTree']->value,'last'=>'true','select'=>'false'), 0, false);
?>
		</select>
	</div>
<?php } else { ?>
	

	<div class="block-categories hidden-sm-down">
		<h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','mod'=>'smartblogpopularposts'),$_smarty_tpl ) );?>
</a></h4>
	  <ul class="category-top-menu">
	    <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['blockCategTree']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockCategTree']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
	    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'blockCategTree', array('nodes'=>$_smarty_tpl->tpl_vars['blockCategTree']->value['children']), true);?>
</li>
	  </ul>
	</div>
<?php }
}
/* smarty_template_function_blockCategTree_12638254735ced810b47e557_54340664 */
if (!function_exists('smarty_template_function_blockCategTree_12638254735ced810b47e557_54340664')) {
function smarty_template_function_blockCategTree_12638254735ced810b47e557_54340664(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
if ($_smarty_tpl->tpl_vars['node']->value['name'] != '') {?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {
if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'blockCategTree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {
if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><span class="arrows" data-toggle="collapse" data-target="#exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'blockCategTree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?>
	<?php
}}
/*/ smarty_template_function_blockCategTree_12638254735ced810b47e557_54340664 */
}
