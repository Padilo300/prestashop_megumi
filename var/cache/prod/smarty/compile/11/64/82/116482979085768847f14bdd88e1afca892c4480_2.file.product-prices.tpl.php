<?php
/* Smarty version 3.1.33, created on 2019-06-27 14:52:23
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d14adf7c6a6f3_02065235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116482979085768847f14bdd88e1afca892c4480' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-prices.tpl',
      1 => 1560743737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d14adf7c6a6f3_02065235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13243802305d14adf7c68375_65126515', 'product_discount');
?>

<?php }?>

<?php }
/* {block 'product_discount'} */
class Block_13243802305d14adf7c68375_65126515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_13243802305d14adf7c68375_65126515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <div class="my-3 mg-price">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
}
