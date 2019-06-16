<?php
/* Smarty version 3.1.33, created on 2019-06-12 14:33:43
  from 'module:revwsviewstemplatesfrontm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00e3172205d9_33430520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d6c8fea2b3cc603a313fbb6dcf84520c0d7d5a' => 
    array (
      0 => 'module:revwsviewstemplatesfrontm',
      1 => 1560143414,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/hook/widget.tpl' => 1,
  ),
),false)) {
function content_5d00e3172205d9_33430520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/my-reviews.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7372235315d00e317212744_60672366', 'page_content');
?>

<!-- end /home/padilo00/padilo.pro/presta/modules/revws/views/templates/front/my-reviews.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_content'} */
class Block_7372235315d00e317212744_60672366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7372235315d00e317212744_60672366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="myreviews">
    <div class="">
        <span class="mg-profile__title" id="customer_name"></span>
        <div class="mg-profile__menu">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>

            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>

            <a class="active" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
            <a href="/module/blockwishlist/mywishlist">Избранное</a>
            <a href="reviews/my-reviews"> Вопросы и ответы</a>
        </div>
    </div>
  <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/hook/widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget'=>$_smarty_tpl->tpl_vars['widget']->value,'reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewEntitites'=>$_smarty_tpl->tpl_vars['reviewEntities']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value), 0, false);
?>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
