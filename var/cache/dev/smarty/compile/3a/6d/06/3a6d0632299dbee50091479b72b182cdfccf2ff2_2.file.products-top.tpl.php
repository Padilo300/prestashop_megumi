<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:24:46
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065f3e602707_00885692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6d0632299dbee50091479b72b182cdfccf2ff2' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/products-top.tpl',
      1 => 1559563286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5d065f3e602707_00885692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="row products-selection">
  <div class="col-12">

    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
      <p style="    display: flex;justify-content: center;">
          <small class="text-center mt-3 mg-text-grey order-2 order-xl-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</small>
      </p>
    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
      <p style="    display: flex;justify-content: center;">
          <small class="text-center mt-3 mg-text-grey order-2 order-xl-1" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</small>
      </p>

    <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9355211625d065f3e5fc862_28862322', 'sort_by');
?>


</div>

</div>
<?php }
/* {block 'sort_by'} */
class Block_9355211625d065f3e5fc862_28862322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_9355211625d065f3e5fc862_28862322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
}
