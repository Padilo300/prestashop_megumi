<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:09:27
  from '/home/padilo00/padilo.pro/presta/modules/smartblogarchive/views/templates/front/smartblogarchive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039c87d72670_99599328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c710a0d42d2266baf3d4a5f83f3faef4197d0717' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogarchive/views/templates/front/smartblogarchive.tpl',
      1 => 1559058533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d039c87d72670_99599328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'archives' => 
  array (
    'compiled_filepath' => '/home/padilo00/padilo.pro/presta/var/cache/dev/smarty/compile/c7/10/a0/c710a0d42d2266baf3d4a5f83f3faef4197d0717_2.file.smartblogarchive.tpl.php',
    'uid' => 'c710a0d42d2266baf3d4a5f83f3faef4197d0717',
    'call_name' => 'smarty_template_function_archives_3781033855d039c87cf7cd1_63898090',
  ),
));
if ($_smarty_tpl->tpl_vars['archive_type']->value == 1) {?>
  <div class="block-categories hidden-sm-down">
    <h4 class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Archive','mod'=>'smartblogarchive'),$_smarty_tpl ) );?>
</h4>
    <h4 class="text-uppercase h6 hidden-sm-down"></h4>
    <ul class="category-sub-menu">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archive']->value['month'], 'months');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['months']->value) {
?>
          <?php $_smarty_tpl->_assignInScope('linkurl', null);?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['linkurl']) ? $_smarty_tpl->tpl_vars['linkurl']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['year'] = $_smarty_tpl->tpl_vars['archive']->value['year'];
$_smarty_tpl->_assignInScope('linkurl', $_tmp_array);?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['linkurl']) ? $_smarty_tpl->tpl_vars['linkurl']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['month'] = $_smarty_tpl->tpl_vars['months']->value['month'];
$_smarty_tpl->_assignInScope('linkurl', $_tmp_array);?>
          <?php $_smarty_tpl->_assignInScope('monthname', null);?>
          <?php if ($_smarty_tpl->tpl_vars['months']->value['month'] == 1) {
$_smarty_tpl->_assignInScope('monthname', 'January');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 2) {
$_smarty_tpl->_assignInScope('monthname', 'February');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 3) {?>
          <?php $_smarty_tpl->_assignInScope('monthname', 'March');?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 4) {?> <?php $_smarty_tpl->_assignInScope('monthname', 'Aprill');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 5) {
$_smarty_tpl->_assignInScope('monthname', 'May');?>
          <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 6) {
$_smarty_tpl->_assignInScope('monthname', 'June');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 7) {
$_smarty_tpl->_assignInScope('monthname', 'July');?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 8) {?>
          <?php $_smarty_tpl->_assignInScope('monthname', 'August');?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 9) {
$_smarty_tpl->_assignInScope('monthname', 'September');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 10) {?> <?php $_smarty_tpl->_assignInScope('monthname', 'October');?>
          <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 11) {
$_smarty_tpl->_assignInScope('monthname', 'November');
} elseif ($_smarty_tpl->tpl_vars['months']->value['month'] == 12) {?> <?php $_smarty_tpl->_assignInScope('monthname', 'December');
}?>

          <li data-depth="0">
            <a class="text-uppercase h6" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_month',$_smarty_tpl->tpl_vars['linkurl']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['monthname']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['archive']->value['year'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php } else { ?>
    

    <div class="block-categories hidden-sm-down">
      <h4 class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Archive','mod'=>'smartblogarchive'),$_smarty_tpl ) );?>
</h4>
      <ul class="category-top-menu">
        <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['archives']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['archives']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'archives', array('nodes'=>$_smarty_tpl->tpl_vars['archives']->value['children']), true);?>
</li>
      </ul>
    </div>
<?php }
}
/* smarty_template_function_archives_3781033855d039c87cf7cd1_63898090 */
if (!function_exists('smarty_template_function_archives_3781033855d039c87cf7cd1_63898090')) {
function smarty_template_function_archives_3781033855d039c87cf7cd1_63898090(Smarty_Internal_Template $_smarty_tpl,$params) {
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
if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'archives', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {
if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><span class="arrows" data-toggle="collapse" data-target="#exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'archives', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?>
    <?php
}}
/*/ smarty_template_function_archives_3781033855d039c87cf7cd1_63898090 */
}
