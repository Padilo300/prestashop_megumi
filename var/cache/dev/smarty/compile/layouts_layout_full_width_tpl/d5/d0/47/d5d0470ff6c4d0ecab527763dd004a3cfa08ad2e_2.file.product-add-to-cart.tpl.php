<?php
/* Smarty version 3.1.33, created on 2019-06-15 16:25:28
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d04f1c85881c4_36747250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d0470ff6c4d0ecab527763dd004a3cfa08ad2e' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1559692430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d04f1c85881c4_36747250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18474623465d04f1c8578fb5_46164947', 'product_quantity');
?>








<?php }
/* {block 'product_quantity'} */
class Block_18474623465d04f1c8578fb5_46164947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_18474623465d04f1c8578fb5_46164947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="d-flex justify-content-between align-items-center w-100 my-5">
      <div class="number-spinner mx-0">
        <span class="ns-btn"><a data-dir="dwn">-</a></span>
        <input
                type="text"
                name="qty"
                id="quantity_wanted"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
                class="pl-ns-value"
                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
        >
        <span class="ns-btn"><a data-dir="up">+</a></span>
      </div>

      <div class="mg-product-cart__btns mg-product-cart__btns-2 my-0">
        <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
        <button
                class="mg-btn mg-btn--black mg-product-cart__btn--buy"
                data-button-action="add-to-cart"
                type="submit"
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                  disabled
                <?php }?>
        >
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>


        </button>
      </div>
  </div>
<?php
}
}
/* {/block 'product_quantity'} */
}
