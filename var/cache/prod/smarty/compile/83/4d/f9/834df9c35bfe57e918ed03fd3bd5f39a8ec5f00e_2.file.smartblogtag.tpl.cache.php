<?php
/* Smarty version 3.1.33, created on 2019-06-22 22:06:08
  from '/home/padilo00/padilo.pro/presta/modules/smartblogtag/views/templates/front/smartblogtag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e7c20d86f25_79631406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834df9c35bfe57e918ed03fd3bd5f39a8ec5f00e' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogtag/views/templates/front/smartblogtag.tpl',
      1 => 1559058560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0e7c20d86f25_79631406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8589180765d0e7c20d76553_07245621';
if (isset($_smarty_tpl->tpl_vars['tags']->value) && !empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
<div  id="tags_blog_block_left"  class="block block-blog tags_block">
    <h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags Post','mod'=>'smartblogtag'),$_smarty_tpl ) );?>
</a></h4>
    <div class="block_content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('options', null);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['tag'] = urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);
$_smarty_tpl->_assignInScope('options', $_tmp_array);?>
                <?php if ($_smarty_tpl->tpl_vars['tag']->value != '') {?>
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smartblog::GetSmartBlogLink('smartblog_tag',$_smarty_tpl->tpl_vars['options']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>  
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </div>
</div>
<?php }
}
}
