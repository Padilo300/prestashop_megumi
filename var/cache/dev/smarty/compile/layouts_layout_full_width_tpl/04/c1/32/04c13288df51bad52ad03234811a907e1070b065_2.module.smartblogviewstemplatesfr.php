<?php
/* Smarty version 3.1.33, created on 2019-06-14 16:09:28
  from 'module:smartblogviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d039c883a9157_91311787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04c13288df51bad52ad03234811a907e1070b065' => 
    array (
      0 => 'module:smartblogviewstemplatesfr',
      1 => 1559058493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:smartblog/views/templates/front/comment_loop.tpl' => 1,
  ),
),false)) {
function content_5d039c883a9157_91311787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/front/posts.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9881830425d039c882b09c7_44144792', 'breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14114459445d039c882c78d7_18058558', 'page_content');
?>
<!-- end /home/padilo00/padilo.pro/presta/modules/smartblog/views/templates/front/posts.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_9881830425d039c882b09c7_44144792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_9881830425d039c882b09c7_44144792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['breadcrumb']->value)) {?>
		<nav class="breadcrumb">
		  <ol>
		      <li>
		        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][0]['url'], ENT_QUOTES, 'UTF-8');?>
">
		          <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][0]['title'], ENT_QUOTES, 'UTF-8');?>
</span>
		        </a>
		      </li>
		      <li>
		        <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
">
		        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
</span>
		        </a>
		      </li>
		      <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?>
		     <?php $_smarty_tpl->_assignInScope('link_detail', null);?>
		    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link_detail']) ? $_smarty_tpl->tpl_vars['link_detail']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['id_post'] = $_smarty_tpl->tpl_vars['id_post']->value;
$_smarty_tpl->_assignInScope('link_detail', $_tmp_array);?> 
		    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link_detail']) ? $_smarty_tpl->tpl_vars['link_detail']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['slug'] = $_smarty_tpl->tpl_vars['link_rewrite_']->value;
$_smarty_tpl->_assignInScope('link_detail', $_tmp_array);?>
		      <li>
		        <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['link_detail']->value), ENT_QUOTES, 'UTF-8');?>
">
		        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		        </a>
		      </li>
		    <?php }?>
		  </ol>
		</nav>
	<?php }
}
}
/* {/block 'breadcrumb'} */
/* {block 'page_content'} */
class Block_14114459445d039c882c78d7_18058558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_14114459445d039c882c78d7_18058558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smartblog::GetSmartBlogLink('smartblog'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"></span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<div id="content" class="block">
			<div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">
				<div class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
				<div class="sdsarticleHeader">
					<span>
						<?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value == 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted by ','mod'=>'smartblog'),$_smarty_tpl ) );?>
 &nbsp;<i class="icon icon-user"></i>
						<span itemprop="author"><?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8');
}?></span><?php }?>&nbsp;
						<i class="icon icon-calendar"></i>&nbsp;<span itemprop="dateCreated"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['created']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                   		<span itemprop="articleSection">
                   			<?php $_smarty_tpl->_assignInScope('assocCats', BlogCategory::getPostCategoriesFull($_smarty_tpl->tpl_vars['post']->value['id_post']));?>
							<?php $_smarty_tpl->_assignInScope('catCounts', 0);?>
							<?php if (!empty($_smarty_tpl->tpl_vars['assocCats']->value)) {?>
                        		&nbsp;&nbsp;<i class="icon icon-tags"></i>&nbsp;
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
							<?php }?>
						</span>
                       &nbsp;<i class="icon icon-comments"></i>&nbsp;
                       <?php if ($_smarty_tpl->tpl_vars['countcomment']->value != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countcomment']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'0','mod'=>'smartblog'),$_smarty_tpl ) );
}?>
                       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl ) );?>

                   	</span>
					<a title="" style="display:none" itemprop="url" href="#"></a>
      			</div>
				<div itemprop="articleBody">
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
	                    <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

	                   	</div>
	                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['displayBackOfficeSmartBlog']->value, ENT_QUOTES, 'UTF-8');?>

	            	</div>
	                   
	            	<div class="sdsarticle-des"></div>
	            	<?php if ($_smarty_tpl->tpl_vars['tags']->value != '') {?>
		                <div class="sdstags-update">
		                    <span class="tags"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags:','mod'=>'smartblog'),$_smarty_tpl ) );?>
 </b> 
		                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
		                          <a title="tag" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogTag(urlencode($_smarty_tpl->tpl_vars['tag']->value['name'])),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
		                        
		                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                    </span>
		                </div>
	           		<?php }?>
	      		</div>
      			<div class="sdsarticleBottom"></div>
		      	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_SMART_BLOG_POST_FOOTER']->value)) {?>
		            <?php echo $_smarty_tpl->tpl_vars['HOOK_SMART_BLOG_POST_FOOTER']->value;?>

		        <?php }?>
			</div>
		</div>
		<div id="product_comments_block_tab">
			<ul class="footer_links clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts_previous']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
        			<?php if (isset($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'])) {?>
						<li>
							<a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prevoius Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prevoius Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
</span></a>
						</li>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts_next']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'])) {?>
						<li class="pull-right">
							<a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
 <i class="icon-chevron-right"></i> </span></a>
						</li>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['countcomment']->value != '') {?>
			<div id="articleComments">
        		<h3><?php if ($_smarty_tpl->tpl_vars['countcomment']->value != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countcomment']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'0','mod'=>'smartblog'),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl ) );?>
<span></span></h3>
   				 <div id="comments">      
        			<ul class="commentList">
              			<?php $_smarty_tpl->_assignInScope('i', 1);?>
       					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
               				<?php $_smarty_tpl->_subTemplateRender("module:smartblog/views/templates/front/comment_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('childcommnets'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>
          				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       				</ul>
    			</div>
			</div>
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['enableguestcomment']->value == 0) && isset($_smarty_tpl->tpl_vars['is_looged']->value) && $_smarty_tpl->tpl_vars['is_looged']->value == '') {?>
			<section class="page-product-box">
				<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'smartblog'),$_smarty_tpl ) );?>
</h3>
			    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or register to post comments','mod'=>'smartblog'),$_smarty_tpl ) );?>

			</section>
		<?php } else { ?>
			<?php if (Configuration::get('smartenablecomment') == 1) {?>
				<?php if ($_smarty_tpl->tpl_vars['comment_status']->value == 1) {?>
					<div class="smartblogcomments" id="respond">
				    	<h4 class="comment-reply-title" id="reply-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a Reply','mod'=>'smartblog'),$_smarty_tpl ) );?>

				    		<small style="float:right;">
				        		<a style="display: none;" href="/wp/sellya/sellya/this-is-a-post-with-preview-image/#respond" id="cancel-comment-reply-link" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Reply','mod'=>'smartblog'),$_smarty_tpl ) );?>
</a>
				            </small>
				        </h4>
						<div id="commentInput">
							<form action="" method="post" id="commentform">
								<table>
									<tbody>
										<?php if (($_smarty_tpl->tpl_vars['enableguestcomment']->value == 0) && isset($_smarty_tpl->tpl_vars['is_looged']->value) && $_smarty_tpl->tpl_vars['is_looged']->value > 0) {?>
											<tr>
												<td>
													<input type="hidden" tabindex="1" class="inputName form-control grey" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_fname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="name" id="name">
												</td>
											</tr>
											<tr>
												<td>
													<input type="hidden" tabindex="2" class="inputMail form-control grey" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="mail" id="mail">
												</td>
											</tr>
											<tr>
												<td><input type="hidden" tabindex="3" value="" name="website" class="form-control grey"></td>
											</tr>
										<?php } else { ?>
											<tr>
												<td>
													<span class="required">*</span> <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name:','mod'=>'smartblog'),$_smarty_tpl ) );?>
 </b>
												</td>
												<td>
													<input type="text" tabindex="1" class="inputName form-control grey" value="" name="name">
												</td>
											</tr>
        									<tr>
												<td>
													<span class="required">*</span> <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail:','mod'=>'smartblog'),$_smarty_tpl ) );?>
 </b><span class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Not Published)','mod'=>'smartblog'),$_smarty_tpl ) );?>
</span>
												</td>
												<td>
													<input type="text" tabindex="2" class="inputMail form-control grey" value="" name="mail">
												</td>
											</tr>
											<tr>
												<td>&nbsp;&nbsp;&nbsp;<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website:','mod'=>'smartblog'),$_smarty_tpl ) );?>
 </b><span class="note"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Site url with','mod'=>'smartblog'),$_smarty_tpl ) );?>
http://)</span></td>
												<td><input type="text" tabindex="3" value="" name="website" class="form-control grey"></td>
											</tr>
										<?php }?>	
										<tr>
											<td><span class="required">*</span> <b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment:','mod'=>'smartblog'),$_smarty_tpl ) );?>
</b></td>
											<td><textarea tabindex="4" class="inputContent form-control grey" rows="8" cols="50" name="comment"></textarea></td>
										</tr>
										<?php if (Configuration::get('smartcaptchaoption') == '1') {?>
											<tr>
												<td></td><td><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modules_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
smartblog/classes/CaptchaSecurityImages.php?width=100&height=40&characters=5"></td>
											</tr>
											<tr>
												<td><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type Code','mod'=>'smartblog'),$_smarty_tpl ) );?>
</b></td><td><input type="text" tabindex="" value="" name="smartblogcaptcha" class="smartblogcaptcha form-control grey"></td>
											</tr>
										<?php }?>
									</tbody>
								</table>
             					<input type='hidden' name='comment_post_ID' value='1478' id='comment_post_ID' />
             					<input type='hidden' name='id_post' value='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_post']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
' id='id_post' />
            					<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
								<div class="right">
							        <div class="submit">
										<button type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'smartblog'),$_smarty_tpl ) );?>
</button>
									</div>
								</div>
    						</form>
						</div>
					</div>
				<?php }?>
				<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript">
					$('#submitComment').bind('click',function(event) {
					event.preventDefault();
					 
					 
					var data = { 'action':'postcomment', 
					'id_post':$('input[name=\'id_post\']').val(),
					'comment_parent':$('input[name=\'comment_parent\']').val(),
					'name':$('input[name=\'name\']').val(),
					'website':$('input[name=\'website\']').val(),
					'smartblogcaptcha':$('input[name=\'smartblogcaptcha\']').val(),
					'comment':$('textarea[name=\'comment\']').val(),
					'mail':$('input[name=\'mail\']').val() };
						$.ajax( {
						  url: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['baseDir']->value, ENT_QUOTES, 'UTF-8');?>
modules/smartblog/ajax.php',
						  data: data,
						  method: 'POST',
						  dataType: 'json',
						  
						  beforeSend: function() {
									$('.success, .warning, .error').remove();
									$('#submitComment').attr('disabled', true);
									$('#commentInput').before('<div class="attention"><img src="views/img/loading.gif" alt="" />Please wait!</div>');

									},
									complete: function() {
									$('#submitComment').attr('disabled', false);
									$('.attention').remove();
									},
							success: function(json) {
								if (json['error']) {
										 
											$('#commentInput').before('<div class="warning">' + '<i class="icon-warning-sign icon-lg"></i>' + json['error']['common'] + '</div>');
											
											if (json['error']['name']) {
												$('.inputName').after('<span class="error">' + json['error']['name'] + '</span>');
											}
											if (json['error']['mail']) {
												$('.inputMail').after('<span class="error">' + json['error']['mail'] + '</span>');
											}
											if (json['error']['comment']) {
												$('.inputContent').after('<span class="error">' + json['error']['comment'] + '</span>');
											}
											if (json['error']['captcha']) {
												$('.smartblogcaptcha').after('<span class="error">' + json['error']['captcha'] + '</span>');
											}
										}
										
										if (json['success']) {
											$('input[name=\'name\']').val('');
											$('input[name=\'mail\']').val('');
											$('input[name=\'website\']').val('');
											$('textarea[name=\'comment\']').val('');
									 		$('input[name=\'smartblogcaptcha\']').val('');
										
											$('#commentInput').before('<div class="success">' + json['success'] + '</div>');
											setTimeout(function(){
												$('.success').fadeOut(300).delay(450).remove();
																		},2500);
										
										}
									}
								} );
							} );
					    var addComment = {
						moveForm : function(commId, parentId, respondId, postId) {

							var t = this, div, comm = t.I(commId), respond = t.I(respondId), cancel = t.I('cancel-comment-reply-link'), parent = t.I('comment_parent'), post = t.I('comment_post_ID');
							if ( ! comm || ! respond || ! cancel || ! parent )
								return;
					                    
					 		t.I('mail').value='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
					 		t.I('name').value='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_fname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
							t.respondId = respondId;
							postId = postId || false;

							if ( ! t.I('wp-temp-form-div') ) {
								div = document.createElement('div');
								div.id = 'wp-temp-form-div';
								div.style.display = 'none';
								respond.parentNode.insertBefore(div, respond);
							}


							comm.parentNode.insertBefore(respond, comm.nextSibling);
							if ( post && postId )
								post.value = postId;
							parent.value = parentId;
							cancel.style.display = '';

							cancel.onclick = function() {
								var t = addComment, temp = t.I('wp-temp-form-div'), respond = t.I(t.respondId);

								if ( ! temp || ! respond )
									return;

								t.I('comment_parent').value = '0';
								t.I('mail').value='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
					 			t.I('name').value='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_looged_fname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
								temp.parentNode.insertBefore(respond, temp);
								temp.parentNode.removeChild(temp);
								this.style.display = 'none';
								this.onclick = null;
								return false;
							};

							try { t.I('comment').focus(); }
							catch(e) {}

							return false;
						},

						I : function(e) {
							var elem = document.getElementById(e);
					                if(!elem){
					                    return document.querySelector('[name="'+e+'"]');
					                }else{
					                    return elem;
					                }
						}
					}; 
				<?php echo '</script'; ?>
>
			<?php }?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['smartcustomcss']->value)) {?>
		    <style>
		        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartcustomcss']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

		    </style>
		<?php }
}
}
/* {/block 'page_content'} */
}
