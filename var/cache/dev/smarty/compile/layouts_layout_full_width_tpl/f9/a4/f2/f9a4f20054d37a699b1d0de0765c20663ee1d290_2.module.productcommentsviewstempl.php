<?php
/* Smarty version 3.1.33, created on 2019-06-10 07:47:52
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfde0f84a5210_79884347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a4f20054d37a699b1d0de0765c20663ee1d290' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1559058457,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5cfde0f84a5210_79884347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/modules/productcomments/views/templates/front/feedback.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7385825315cfde0f8435190_20597299', "page_content");
?>
<!-- end /home/padilo00/padilo.pro/presta/modules/productcomments/views/templates/front/feedback.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'pagination'} */
class Block_6693127175cfde0f849b930_51718552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>
    <?php
}
}
/* {/block 'pagination'} */
/* {block "page_content"} */
class Block_7385825315cfde0f8435190_20597299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7385825315cfde0f8435190_20597299',
  ),
  'pagination' => 
  array (
    0 => 'Block_6693127175cfde0f849b930_51718552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var productcomments_controller_url = '<?php echo $_smarty_tpl->tpl_vars['productcomments_controller_url']->value;?>
';
        var confirm_report_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
        var secure_key = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8');?>
';
        var productcomments_url_rewrite = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value, ENT_QUOTES, 'UTF-8');?>
';
        var productcomment_added = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
        var productcomment_added_moderation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
        var productcomment_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New comment','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
        var productcomment_ok = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
        var moderation_active = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['moderation_active']->value), ENT_QUOTES, 'UTF-8');?>
;
    <?php echo '</script'; ?>
>
    <div id="productCommentsBlock">
        <div id="product_comments_block_tab" class="product_comment_feedback">
            <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
                        <div class="comment clearfix">
                            <div class="comment_author">
                                <div class="comment_product">
                                    <?php $_smarty_tpl->_assignInScope('pImages', productcomments::getImagesByID($_smarty_tpl->tpl_vars['comment']->value['id_product'],1));?>
                                    <?php if ($_smarty_tpl->tpl_vars['pImages']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pImages']->value, 'image', false, NULL, 'images', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index'];
?>
                                            <a href="<?php echo htmlspecialchars(Context::getContext()->link->getProductLink($_smarty_tpl->tpl_vars['comment']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars(Context::getContext()->link->getImageLink($_smarty_tpl->tpl_vars['comment']->value['link_rewrite'],$_smarty_tpl->tpl_vars['image']->value,'cart_default'), ENT_QUOTES, 'UTF-8');?>
"
                                                     <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['first'] : null)) {?>class="current img_<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>
                                                     class="img_<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
"
                                                     style="display:none;"<?php }?>
                                                     alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                            </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <div class="star_content clearfix">
                                        <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                                                <div class="star"></div>
                                            <?php } else { ?>
                                                <div class="star star_on"></div>
                                            <?php }?>
                                        <?php
}
}
?>
                                    </div>
                                </div>
                                <div class="comment_author_infos">
                                    <strong><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong><br/>
                                    <em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
</em>
                                </div>
                            </div>
                            <div class="comment_details">
                                <h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                                <p><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['content'],'html','UTF-8' )));?>
</p>
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice'] > 0) {?>
                                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'productcomments'),$_smarty_tpl ) );?>
</li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?>
                                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this comment useful to you?','mod'=>'productcomments'),$_smarty_tpl ) );?>

                                                <button class="usefulness_btn" data-is-usefull="1"
                                                        data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'yes','mod'=>'productcomments'),$_smarty_tpl ) );?>
</button>
                                                <button class="usefulness_btn" data-is-usefull="0"
                                                        data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'no','mod'=>'productcomments'),$_smarty_tpl ) );?>
</button>
                                            </li>
                                        <?php }?>
                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
                                            <li><span class="report_btn"
                                                      data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                </ul>
                                <?php echo hook::exec('displayProductComment',$_smarty_tpl->tpl_vars['comment']->value);?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="alert alert-info">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comments currently available','mod'=>'productcomments'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
        </div>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6693127175cfde0f849b930_51718552', 'pagination', $this->tplIndex);
?>

<?php
}
}
/* {/block "page_content"} */
}
