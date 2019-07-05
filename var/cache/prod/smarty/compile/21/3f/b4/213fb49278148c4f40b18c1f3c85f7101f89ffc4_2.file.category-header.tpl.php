<?php
/* Smarty version 3.1.33, created on 2019-06-20 03:54:02
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ad92a183787_48184022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '213fb49278148c4f40b18c1f3c85f7101f89ffc4' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/category-header.tpl',
      1 => 1559648091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
  ),
),false)) {
function content_5d0ad92a183787_48184022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<h1 class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
<div class="row align-items-center text-left mb-4">
    <div class="col-12 order-2 col-lg-8 order-lg-1 col-xl-6 order-xl-1 pr-lg-5">
        <p class="mg-small-2">
            <?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

        </p>
    </div>
    <div class="col-12 order-1 col-lg-4 order-lg-2 col-xl-6 order-xl-2">
        <img class="d-block my-4 mx-auto max-w"  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19571969875d0ad92a182631_99711684', 'product_list_top');
?>

<?php }
/* {block 'product_list_top'} */
class Block_19571969875d0ad92a182631_99711684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_top' => 
  array (
    0 => 'Block_19571969875d0ad92a182631_99711684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_top'} */
}
