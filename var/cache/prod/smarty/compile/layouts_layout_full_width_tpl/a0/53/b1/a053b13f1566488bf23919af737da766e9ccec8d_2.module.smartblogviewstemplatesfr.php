<?php
/* Smarty version 3.1.33, created on 2019-06-29 19:02:24
  from 'module:smartblogviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d178b900ae8a8_68287628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a053b13f1566488bf23919af737da766e9ccec8d' => 
    array (
      0 => 'module:smartblogviewstemplatesfr',
      1 => 1559058493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:smartblog/views/templates/front/category_loop.tpl' => 1,
  ),
),false)) {
function content_5d178b900ae8a8_68287628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4180694285d178b900839d0_45187320', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8269876125d178b9008b671_92174403', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_4180694285d178b900839d0_45187320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_4180694285d178b900839d0_45187320',
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
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][0]['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
          </li>
          <li>
            <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Post','mod'=>'smartblog'),$_smarty_tpl ) );?>
</span>
            </a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?>
          <?php $_smarty_tpl->_assignInScope('link_category', null);?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link_category']) ? $_smarty_tpl->tpl_vars['link_category']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['id_category'] = $_smarty_tpl->tpl_vars['id_category']->value;
$_smarty_tpl->_assignInScope('link_category', $_tmp_array);?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link_category']) ? $_smarty_tpl->tpl_vars['link_category']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['slug'] = $_smarty_tpl->tpl_vars['cat_link_rewrite']->value;
$_smarty_tpl->_assignInScope('link_category', $_tmp_array);?>
          <li>
            <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['link_category']->value), ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_category']->value, ENT_QUOTES, 'UTF-8');?>
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
class Block_8269876125d178b9008b671_92174403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_8269876125d178b9008b671_92174403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
      <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smartblog::GetSmartBlogLink('smartblog'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl ) );?>
</a>
      <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?><span class="navigation-pipe"></span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title_category']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->tpl_vars['postcategory']->value == '') {?>
        <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?>
              <div class="alert alert-danger"><p>There is 1 error</p><ol><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Post in Category','mod'=>'smartblog'),$_smarty_tpl ) );?>
</li></ol></div>
        <?php } else { ?>
          <div class="alert alert-danger"><p>There is 1 error</p><ol><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Post in Blog','mod'=>'smartblog'),$_smarty_tpl ) );?>
</li></ol></div>
        <?php }?>
    <?php } else { ?>
      <?php if ($_smarty_tpl->tpl_vars['smartdisablecatimg']->value == '1') {?>
        <?php $_smarty_tpl->_assignInScope('activeimgincat', '0');?>
          <?php $_smarty_tpl->_assignInScope('activeimgincat', $_smarty_tpl->tpl_vars['smartshownoimg']->value);?> 
          <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?>        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryinfo']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
              <div id="sdsblogCategory">  
                <?php if ($_smarty_tpl->tpl_vars['cat_image']->value == "no") {?> 
                <?php } else { ?> 
                  <?php if (($_smarty_tpl->tpl_vars['cat_image']->value != "no" && $_smarty_tpl->tpl_vars['activeimgincat']->value == 0) || $_smarty_tpl->tpl_vars['activeimgincat']->value == 1) {?>
                    <img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['meta_title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_image']->value, ENT_QUOTES, 'UTF-8');?>
" class="imageFeatured">
                  <?php }?>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8');?>

              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          <?php }?>
        <?php }?>
        <div id="smartblogcat" class="block">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postcategory']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("module:smartblog/views/templates/front/category_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('postcategory'=>$_smarty_tpl->tpl_vars['postcategory']->value), 0, true);
?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['pagenums']->value)) {?>
          <div class="row bottom-pagination-content">
            <div class="post-page col-md-12">
              <div id="pagination_bottom" class="col-md-6">
                <ul class="pagination">
                  <?php
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? $_smarty_tpl->tpl_vars['pagenums']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['pagenums']->value)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration === 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;?> 
                    <?php if (($_smarty_tpl->tpl_vars['k']->value+1) == $_smarty_tpl->tpl_vars['c']->value) {?>
                      <li><span class="page-link page-active"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value+1,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span></li>
                    <?php } else { ?>
                      <?php if ($_smarty_tpl->tpl_vars['title_category']->value != '') {?>
                        <li><a class="page-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogCategoryPagination($_smarty_tpl->tpl_vars['id_category']->value,$_smarty_tpl->tpl_vars['cat_link_rewrite']->value,$_smarty_tpl->tpl_vars['k']->value+1),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value+1,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a></li> 
                      <?php } else { ?>
                          <li><a class="page-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogListPagination($_smarty_tpl->tpl_vars['k']->value+1),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value+1,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
                      <?php }?>
                    <?php }?>
                  <?php }
}
?>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="results">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing','mod'=>'smartblog'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value != 0) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['limit_start']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to','mod'=>'smartblog'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value >= $_smarty_tpl->tpl_vars['total']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['total']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of','mod'=>'smartblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['total']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pages','mod'=>'smartblog'),$_smarty_tpl ) );?>
)
              </div>
            </div>
          </div>
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
