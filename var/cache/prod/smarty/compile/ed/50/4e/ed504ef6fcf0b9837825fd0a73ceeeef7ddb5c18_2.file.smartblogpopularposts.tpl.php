<?php
/* Smarty version 3.1.33, created on 2019-05-28 21:42:19
  from '/home/padilo00/padilo.pro/presta/modules/smartblogpopularposts/views/templates/front/smartblogpopularposts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced810b574325_02650758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed504ef6fcf0b9837825fd0a73ceeeef7ddb5c18' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogpopularposts/views/templates/front/smartblogpopularposts.tpl',
      1 => 1559058550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced810b574325_02650758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/padilo00/padilo.pro/presta/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (isset($_smarty_tpl->tpl_vars['posts']->value) && !empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
<div class="block block-blog blogModule boxPlain">
   <h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular Articles','mod'=>'smartblogpopularposts'),$_smarty_tpl ) );?>
</a></h4>
   <div class="block_content sdsbox-content">
      <ul class="popularArticles">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>

            <li>
		<a class="image"
		    title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
			<img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
"
		src="<?php if ($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small') != 'false') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small'), ENT_QUOTES, 'UTF-8');
}?>" style="overflow: hidden;">
				</a>

         <a class="title paddleftreleted"  title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a>
	      <span class="info"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
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
