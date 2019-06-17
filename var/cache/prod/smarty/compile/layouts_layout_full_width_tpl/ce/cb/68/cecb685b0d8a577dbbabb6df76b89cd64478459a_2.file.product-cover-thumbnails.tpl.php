<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:57:15
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d070f9b224bd3_68157782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cecb685b0d8a577dbbabb6df76b89cd64478459a' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1560727897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d070f9b224bd3_68157782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15495331945d070f9b21b734_17907123', 'product_cover');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3588099165d070f9b21e6d9_53139090', 'product_images');
?>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

<?php }
/* {block 'product_cover'} */
class Block_15495331945d070f9b21b734_17907123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_15495331945d070f9b21b734_17907123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mg-product-content__image">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
    </div>
<?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_3588099165d070f9b21e6d9_53139090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_3588099165d070f9b21e6d9_53139090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mg-product-content__image-thumbs">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>

                <li <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>>
                    <img
                         src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                         itemprop="image" />
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div><!-- end mg-product-content__image-thumbs  -->
<?php
}
}
/* {/block 'product_images'} */
}
