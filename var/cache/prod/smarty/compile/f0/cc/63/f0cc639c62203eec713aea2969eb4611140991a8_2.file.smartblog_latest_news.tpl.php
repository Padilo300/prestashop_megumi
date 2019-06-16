<?php
/* Smarty version 3.1.33, created on 2019-05-28 19:07:50
  from '/home/padilo00/padilo.pro/presta/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5cd6bf6cd5_32284056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0cc639c62203eec713aea2969eb4611140991a8' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1559058544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5cd6bf6cd5_32284056 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block">
    <h2 class='title_block'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest News','mod'=>'smartblog'),$_smarty_tpl ) );?>
</h2>
    <div class="sdsblog-box-content">
        <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value) && !empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('img_url', $_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id'],'home-default'));?>
                <div id="sds_blog_post" class="col-xs-12 col-sm-4 col-md-4">
                    <span class="news_module_image_holder news_home_image_holder">
                        <?php if ($_smarty_tpl->tpl_vars['img_url']->value != 'false') {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
                        <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"   itemprop="image" />
                        </a>
                        <?php }?>
                    </span>
                    <h4 class="sds_post_title sds_post_title_home"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(SmartBlogPost::subStr($_smarty_tpl->tpl_vars['post']->value['title'],60), ENT_QUOTES, 'UTF-8');?>
</a></h4>
                    <i class="icon icon-calendar"></i>
                    <span class="sds_post_date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['date_added'], ENT_QUOTES, 'UTF-8');?>
</span>
			 
					 
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
     </div>
</div><?php }
}
