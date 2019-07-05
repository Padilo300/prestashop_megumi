<?php
/* Smarty version 3.1.33, created on 2019-06-29 19:02:24
  from 'module:smartblogviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d178b9016d281_93039380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1fea53432104cdfbaaa7bb89a3dd08ca8f719a' => 
    array (
      0 => 'module:smartblogviewstemplatesfr',
      1 => 1559058493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d178b9016d281_93039380 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div itemtype="#" itemscope="" class="sdsarticleCat clearfix">
    <div id="smartblogpost-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <div class="sdsarticleHeader"> 
            <p class='title_block'><a title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></p>
                  
            <span><?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted by','mod'=>'smartblog'),$_smarty_tpl ) );?>
 
                <span itemprop="author">&nbsp;<i class="icon icon-user"></i>&nbsp; <?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value != 0) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['firstname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['lastname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['lastname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['firstname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
                           </span> <?php }?>
                                <?php $_smarty_tpl->_assignInScope('assocCats', BlogCategory::getPostCategoriesFull($_smarty_tpl->tpl_vars['post']->value['id_post']));?>
                                <?php $_smarty_tpl->_assignInScope('catCounts', 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['assocCats']->value)) {?>
                                &nbsp;&nbsp;<i class="icon icon-tags"></i>&nbsp; 
                                <span itemprop="articleSection">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assocCats']->value, 'assoCat', false, 'catid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['catid']->value => $_smarty_tpl->tpl_vars['assoCat']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['catCounts']->value > 0) {?>, <?php }?>
                                    <?php $_smarty_tpl->_assignInScope('catlink', array());?>
                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['catlink']) ? $_smarty_tpl->tpl_vars['catlink']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['id_category'] = $_smarty_tpl->tpl_vars['assoCat']->value['id_category'];
$_smarty_tpl->_assignInScope('catlink', $_tmp_array);?>
                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['catlink']) ? $_smarty_tpl->tpl_vars['catlink']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['slug'] = $_smarty_tpl->tpl_vars['assoCat']->value['link_rewrite'];
$_smarty_tpl->_assignInScope('catlink', $_tmp_array);?>
                                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogCategoryLink($_smarty_tpl->tpl_vars['assoCat']->value['id_category'],$_smarty_tpl->tpl_vars['assoCat']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assoCat']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    </a>
                                    <?php $_smarty_tpl->_assignInScope('catCounts', $_smarty_tpl->tpl_vars['catCounts']->value+1);?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </span>
                        <?php }?>
                        &nbsp; <span class="comment">&nbsp;<i class="icon icon-comments"></i>&nbsp;
                            <a href=
                               "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
#articleComments"
                               title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['totalcomment'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 Comments"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['totalcomment'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl ) );?>
</a></span><?php if ($_smarty_tpl->tpl_vars['smartshowviewed']->value == 1) {?>&nbsp; <i class=
                                                                      "icon icon-eye-open"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' views','mod'=>'smartblog'),$_smarty_tpl ) );?>

                        (<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['post']->value['viewed']), ENT_QUOTES, 'UTF-8');?>
)<?php }?></span>
                </div>

 

                <div class="articleContent">
                    <?php if (isset($_smarty_tpl->tpl_vars['ispost']->value) && !empty($_smarty_tpl->tpl_vars['ispost']->value)) {?>
                    <a itemprop="url" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['post']->value['cat_link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="imageFeaturedLink">    
                    
                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_post'],'single-default') != 'false') {?>
                            <img itemprop="image" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_post'],'single-default'), ENT_QUOTES, 'UTF-8');?>
" class="imageFeatured">
                        <?php }?>                   
                           
                    <?php if (isset($_smarty_tpl->tpl_vars['ispost']->value) && !empty($_smarty_tpl->tpl_vars['ispost']->value)) {?>
                    </a>
                    <?php }?>
                   <div class="sdsarticle-des" style="text-align: left;">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['short_description'], ENT_QUOTES, 'UTF-8');?>

                   </div>
                </div>

                <div class="sdsreadMore">  
                    <a title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="r_more btn btn-default button button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'smartblog'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a>
                </div>

                
                
            </div>
        </div>
		
		
<?php }
}
