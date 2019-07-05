<?php
/* Smarty version 3.1.33, created on 2019-06-29 19:02:24
  from '/home/padilo00/padilo.pro/presta/modules/smartblogsearch/views/templates/front/smartblogsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d178b90075566_26962275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4268ac3b6e021e1589dbe369bddc53a13a94c1' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/smartblogsearch/views/templates/front/smartblogsearch.tpl',
      1 => 1559058557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d178b90075566_26962275 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block block-blog blogModule boxPlain clearfix" id="smartblogsearch">
      <h4 class="text-uppercase h6 hidden-sm-down"><a href='<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_list'), ENT_QUOTES, 'UTF-8');?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Blog Search",'mod'=>"smartblogsearch"),$_smarty_tpl ) );?>
</a></h4>
	<div id="sdssearch_block_top" class="block_content">
		<form action="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_search'), ENT_QUOTES, 'UTF-8');?>
" method="post" id="searchbox">
		    <input type="hidden" value="0" name="smartblogaction">
			<input type="text" placeholder="Search" name="smartsearch" id="search_query_top" class="search_query form-control ac_input" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartsearch']->value, ENT_QUOTES, 'UTF-8');?>
">
			<button class="btn btn-default btn-blog-search" name="smartblogsubmit" type="submit">
				<i class="material-icons search"></i>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','mod'=>'smartblogsearch'),$_smarty_tpl ) );?>
</span>
			</button>
		</form>
	</div>
</div>




<?php }
}
