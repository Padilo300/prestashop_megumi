<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:09:27
  from '/home/padilo00/padilo.pro/presta/modules/smartbloglatestcomments/views/templates/front/smartbloglatestcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039c87da11f3_32800470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2abb5abdc9eae8988aecf9ae7b68e959e8af665' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartbloglatestcomments/views/templates/front/smartbloglatestcomments.tpl',
      1 => 1559058547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d039c87da11f3_32800470 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['latesComments']->value) && !empty($_smarty_tpl->tpl_vars['latesComments']->value)) {?>
<div class="block block-blog blogModule boxPlain">
   <h4 class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Comments','mod'=>'smartbloglatestcomments'),$_smarty_tpl ) );?>
</h4>
   <div class="block_content sdsbox-content">
      <ul class="recentComments">
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latesComments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
 
         <li>
            <a title="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['comment']->value['id_post'],$_smarty_tpl->tpl_vars['comment']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
	       <img class="image" alt="Avatar" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
/smartblog/images/avatar/avatar-author-default.jpg"></a>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on'),$_smarty_tpl ) );?>
</i>
		   <a class="title"   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['comment']->value['id_post'],$_smarty_tpl->tpl_vars['comment']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo SmartBlogPost::subStr($_smarty_tpl->tpl_vars['comment']->value['content'],50);?>
</a>
         </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
   </div>
   <div class="box-footer"><span></span></div>
</div>
<?php }
}
}
