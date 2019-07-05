<?php
/* Smarty version 3.1.33, created on 2019-06-20 03:51:52
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ad8a85851e9_93555199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b55a3565b5d8471815bc717a05ab92cf016fb0' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1559690245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ad8a85851e9_93555199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '16248258625d0ad8a856e579_87075258';
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12373927185d0ad8a856fb39_49526249', 'product_miniature_item');
?>






























<?php }
/* {block 'product_name'} */
class Block_11601071625d0ad8a8578a56_45037452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <span class="mg-product-cart__name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_16564773365d0ad8a857d0f3_87872625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <span class="mg-product-cart__price mg-product-cart__price--sale">
                        <span class="mg-product-cart__sale-price">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                        </span>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>

                    </span>
                <?php }?>
                <span class="mg-product-cart__price">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                </span>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_12373927185d0ad8a856fb39_49526249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_12373927185d0ad8a856fb39_49526249',
  ),
  'product_name' => 
  array (
    0 => 'Block_11601071625d0ad8a8578a56_45037452',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_16564773365d0ad8a857d0f3_87872625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-md-6 col-lg-4 col-xl-4 js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="mg-product-cart__wrapper">
      <span class="mg-product-cart__labels">
        <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
        <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
      </span>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="mg-product-cart__image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>">
        </a>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11601071625d0ad8a8578a56_45037452', 'product_name', $this->tplIndex);
?>

    <p class="mg-product-cart__desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</p>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16564773365d0ad8a857d0f3_87872625', 'product_price_and_shipping', $this->tplIndex);
?>



    <div class="mg-product-cart__btns">
        <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><i class="mg-icon icon-heart"></i></a>
        <a class="mg-btn mg-btn--black mg-product-cart__btn--buy quick-view" href="#" data-link-action="quickview" >Купить</a>
    </div>

</div>
    </div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
