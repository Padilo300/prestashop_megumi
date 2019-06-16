<?php
/* Smarty version 3.1.33, created on 2019-06-15 16:25:28
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d04f1c83d9f87_18157568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f33112e153ef11c94a955750d682bd935f8697' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/product.tpl',
      1 => 1559692077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-add-to-cart.tpl' => 2,
    'file:catalog/_partials/product-prices.tpl' => 2,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5d04f1c83d9f87_18157568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13955561245d04f1c82bec47_59895001', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9521752145d04f1c82c24f4_12574709', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4176955915d04f1c82d86f1_49378146', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_13955561245d04f1c82bec47_59895001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_13955561245d04f1c82bec47_59895001',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_9521752145d04f1c82c24f4_12574709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9521752145d04f1c82c24f4_12574709',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
}
/* {/block 'head'} */
/* {block 'page_title'} */
class Block_17939565295d04f1c82dbc41_97669436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_19152387235d04f1c82dad15_42567001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17939565295d04f1c82dbc41_97669436', 'page_title', $this->tplIndex);
?>
</h1>
                        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_18818934265d04f1c82d9b18_88600884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19152387235d04f1c82dad15_42567001', 'page_header', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_17592674285d04f1c82dfd39_31707932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="my-2"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'page_title'} */
class Block_15766919395d04f1c82fabd5_89240842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_4316349005d04f1c82f9c60_44036508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15766919395d04f1c82fabd5_89240842', 'page_title', $this->tplIndex);
?>
</h1>
                        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_16791720205d04f1c82f8969_53534275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4316349005d04f1c82f9c60_44036508', 'page_header', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_2299203415d04f1c82fea87_19106272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="my-2"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_add_to_cart'} */
class Block_7014423865d04f1c8306e40_75104811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'page_title'} */
class Block_3075572875d04f1c83127f9_76697435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15449939655d04f1c8311877_69311812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3075572875d04f1c83127f9_76697435', 'page_title', $this->tplIndex);
?>
</h1>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_12285875465d04f1c83107a3_31364117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15449939655d04f1c8311877_69311812', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_16311596555d04f1c8316a22_73928301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="my-2"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_19141808165d04f1c831cf97_86680365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_cover_thumbnails'} */
class Block_14709718205d04f1c8321a50_99556911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_13806988755d04f1c8320a81_86870769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14709718205d04f1c8321a50_99556911', 'product_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20230049355d04f1c831f9e8_47716086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13806988755d04f1c8320a81_86870769', 'page_content', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_16493518405d04f1c8329661_88597862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1116730345d04f1c8328682_54894903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16493518405d04f1c8329661_88597862', 'page_title', $this->tplIndex);
?>
</h1>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_5620358095d04f1c83275e9_26159052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1116730345d04f1c8328682_54894903', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_20080718395d04f1c832d783_26063349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="my-2"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_17142581465d04f1c83340c4_91058054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_customization'} */
class Block_3522181125d04f1c833a342_71300858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_6222584005d04f1c8345163_05636613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_6110896675d04f1c8347f29_96309509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_4311758675d04f1c834af18_73909588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_15775086065d04f1c833eff3_37435130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6222584005d04f1c8345163_05636613', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6110896675d04f1c8347f29_96309509', 'product_add_to_cart', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4311758675d04f1c834af18_73909588', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_tabs'} */
class Block_19185585935d04f1c834e1c2_61733642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



                        <ul class="nav nav-tabs mg-product-nav" role="tablist">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                                <li class="nav-item">
                                    <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="about-tab" data-toggle="tab" href="#mgAbout" role="tab" aria-controls="about" <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                                </li>
                            <?php }?>
                            <li class="nav-item">
                                <a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="info-tab" data-toggle="tab" href="#mgInfo" role="tab" aria-controls="info" <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                                </li>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                                <li class="nav-item" style="display: none">
                                    <a class="nav-link" data-toggle="tab" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tab" aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_description'} */
class Block_11460046375d04f1c836d339_41574856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_8038938655d04f1c83708e5_10650619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_19991160655d04f1c8373432_47819185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                                <div class="tab-pane fade" id="mgBrand" role="tabpanel" aria-labelledby="brand-tab">
                                    <div class="mg-tab-info">
                                        <section class="product-attachments">
                                            <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                                <div class="attachment">
                                                    <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                                                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
                                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                                    </a>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_footer'} */
class Block_19005847135d04f1c83a83f3_99694570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_2731022685d04f1c83abe76_94435055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_16041003215d04f1c83b00a6_50471987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19248564855d04f1c83aef06_85005255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16041003215d04f1c83b00a6_50471987', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4176955915d04f1c82d86f1_49378146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4176955915d04f1c82d86f1_49378146',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18818934265d04f1c82d9b18_88600884',
    1 => 'Block_16791720205d04f1c82f8969_53534275',
    2 => 'Block_12285875465d04f1c83107a3_31364117',
    3 => 'Block_5620358095d04f1c83275e9_26159052',
  ),
  'page_header' => 
  array (
    0 => 'Block_19152387235d04f1c82dad15_42567001',
    1 => 'Block_4316349005d04f1c82f9c60_44036508',
    2 => 'Block_15449939655d04f1c8311877_69311812',
    3 => 'Block_1116730345d04f1c8328682_54894903',
  ),
  'page_title' => 
  array (
    0 => 'Block_17939565295d04f1c82dbc41_97669436',
    1 => 'Block_15766919395d04f1c82fabd5_89240842',
    2 => 'Block_3075572875d04f1c83127f9_76697435',
    3 => 'Block_16493518405d04f1c8329661_88597862',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_17592674285d04f1c82dfd39_31707932',
    1 => 'Block_2299203415d04f1c82fea87_19106272',
    2 => 'Block_16311596555d04f1c8316a22_73928301',
    3 => 'Block_20080718395d04f1c832d783_26063349',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_7014423865d04f1c8306e40_75104811',
    1 => 'Block_6110896675d04f1c8347f29_96309509',
  ),
  'product_prices' => 
  array (
    0 => 'Block_19141808165d04f1c831cf97_86680365',
    1 => 'Block_17142581465d04f1c83340c4_91058054',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20230049355d04f1c831f9e8_47716086',
  ),
  'page_content' => 
  array (
    0 => 'Block_13806988755d04f1c8320a81_86870769',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_14709718205d04f1c8321a50_99556911',
  ),
  'product_customization' => 
  array (
    0 => 'Block_3522181125d04f1c833a342_71300858',
  ),
  'product_buy' => 
  array (
    0 => 'Block_15775086065d04f1c833eff3_37435130',
  ),
  'product_variants' => 
  array (
    0 => 'Block_6222584005d04f1c8345163_05636613',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_4311758675d04f1c834af18_73909588',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_19185585935d04f1c834e1c2_61733642',
  ),
  'product_description' => 
  array (
    0 => 'Block_11460046375d04f1c836d339_41574856',
  ),
  'product_details' => 
  array (
    0 => 'Block_8038938655d04f1c83708e5_10650619',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_19991160655d04f1c8373432_47819185',
  ),
  'product_footer' => 
  array (
    0 => 'Block_19005847135d04f1c83a83f3_99694570',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_2731022685d04f1c83abe76_94435055',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19248564855d04f1c83aef06_85005255',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16041003215d04f1c83b00a6_50471987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="mg-product-content my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mg-product-content__info d-block d-lg-none">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18818934265d04f1c82d9b18_88600884', 'page_header_container', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17592674285d04f1c82dfd39_31707932', 'product_description_short', $this->tplIndex);
?>

                    <div class="d-flex align-items-center">
                        <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                        <span class="mg-text-grey mr-3">Отзывы (2)</span>
                        <a class="mg-text-grey" href="#">Добавить отзыв</a>
                    </div>
                    <div class="my-3 mg-price">1980<i class="mg-ruble">₽</i></div>
                </div>
                <div class="mg-product-content__image"><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></div>
                <div class="mg-product-content__image-thumbs">
                    <ul>
                        <li class="selected"><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></li>
                        <li><img src="http://presta.padilo.pro/img/p/2/2-large_default.jpg" alt="" /></li>
                    </ul>
                </div>
                <div class="text-uppercase mg-text-grey my-2 d-none d-lg-block">СОПУТСТВУЮЩИЕ ТОВАРЫ</div>
                <div class="mg-main-slider mg-main-slider-product mg-mini-product mx-0 d-none d-lg-block">
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--hit">ХИТ</i>
                <i class="mg-product-cart__label mg-product-cart__label--sale">СКИДКА</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-1.jpg" alt="" />
                            <span class="mg-product-cart__name">MEDI-PEEL</span>
                            <p class="mg-product-cart__desc">Ампула с 24 каратным золотом Luxury 24K Gold Ampoule 100 мл</p>
                            <span class="mg-product-cart__price mg-product-cart__price--sale"><span class="mg-product-cart__sale-price">5890<i class="mg-ruble">₽</i></span>3890<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
                            <img class="mg-product-cart__image" src="images/uploads/product-image-2.jpg" alt="" />
                            <span class="mg-product-cart__name">JM Solution</span>
                            <p class="mg-product-cart__desc">Honey Luminous Royal Propolis Mask 10p</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--new">НОВИНКА</i>
                <i class="mg-product-cart__label mg-product-cart__label--top">ЛИДЕР ПРОДАЖ</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-3.jpg" alt="" />
                            <span class="mg-product-cart__name">mizon</span>
                            <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-product-cart__wrapper">
              <span class="mg-product-cart__labels">
                <i class="mg-product-cart__label mg-product-cart__label--popular">ВЫБОР КОСМЕТОЛОГОВ</i>
                <i class="mg-product-cart__label mg-product-cart__label--promo">НАШ ВЫБОР</i>
              </span>
                            <img class="mg-product-cart__image" src="images/uploads/product-image-4.jpg" alt="" />
                            <span class="mg-product-cart__name">Pyunkang Yul</span>
                            <p class="mg-product-cart__desc">Эссенция-Тонер Essence Toner 200мл</p>
                            <span class="mg-product-cart__price">1980<i class="mg-ruble">₽</i></span>
                            <div class="mg-product-cart__btns">
                                <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                                <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mg-product-content__info d-none d-lg-block">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16791720205d04f1c82f8969_53534275', 'page_header_container', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2299203415d04f1c82fea87_19106272', 'product_description_short', $this->tplIndex);
?>

                    <div class="d-flex align-items-center">
                        <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                        <span class="mg-text-grey mr-3">Отзывы (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewList']->value['total'], ENT_QUOTES, 'UTF-8');?>
)</span>
                        <a class="mg-text-grey" href="#" data-revws-entity-type="product"  data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">Добавить отзыв</a>
                    </div>
                    <div class="my-3 mg-price">1980<i class="mg-ruble">₽</i></div>
                </div>
                <div class="mg-order__colors">
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                    <a class="mg-order__color mg-order__color--boss-pink" href="#"><span class="mg-text">Boss Pink</span></a>
                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7014423865d04f1c8306e40_75104811', 'product_add_to_cart', $this->tplIndex);
?>



                <ul class="nav nav-tabs mg-product-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#mgAbout" role="tab" aria-controls="about" aria-selected="true">Описание товара</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="#mgInfo" role="tab" aria-controls="info" aria-selected="false">состав / хранение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="brand-tab" data-toggle="tab" href="#mgBrand" role="tab" aria-controls="brand" aria-selected="false">о бренде</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="mgAbout" role="tabpanel" aria-labelledby="about-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/><b>1.</b> Насыщенный цвет, точно такой же как на картинке<br/>Благодаря сильному пигменту, помада передает настоящий цвет<br/> и добавляет потрясающего блеска губам.<br/><b>2.</b> Кремовая тающая текстура<br/>Нежная текстура подобна СС крему равно мерно ложиться и обладает высокой стойкостью.<br/><b>3.</b> Глубокий, стойкий цвет и блеск<br/>Высокоэластичная текстура с высокоглянцевыми полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mgInfo" role="tabpanel" aria-labelledby="info-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/><b>1.</b> Насыщенный цвет, точно такой же как на картинке<br/>Благодаря сильному пигменту полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mgBrand" role="tabpanel" aria-labelledby="brand-tab">
                        <div class="mg-tab-info">
                            <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/>обладает высокой стойкостью.<br/><b>3.</b> Глубокий, стойкий цвет и блеск<br/>Высокоэластичная текстура с высокоглянцевыми полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5">
    </div>
</section>

    <section class="mg-product-content" id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mg-product-content__info d-block d-lg-none">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12285875465d04f1c83107a3_31364117', 'page_header_container', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16311596555d04f1c8316a22_73928301', 'product_description_short', $this->tplIndex);
?>

                        <div class="d-flex align-items-center">
                            <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                            <span class="mg-text-grey mr-3">Отзывы (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewList']->value['total'], ENT_QUOTES, 'UTF-8');?>
)</span>
                            <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><b>Добавить отзыв</b></a>
                        </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19141808165d04f1c831cf97_86680365', 'product_prices', $this->tplIndex);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20230049355d04f1c831f9e8_47716086', 'page_content_container', $this->tplIndex);
?>



                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductincat','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                </div>
                <div class="col-lg-6">
                    <div class="mg-product-content__info d-none d-lg-block">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5620358095d04f1c83275e9_26159052', 'page_header_container', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20080718395d04f1c832d783_26063349', 'product_description_short', $this->tplIndex);
?>

                        <div class="d-flex align-items-center">
                            <span class="mg-text-grey mr-3">Отзывы (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewList']->value['total'], ENT_QUOTES, 'UTF-8');?>
)</span>
                            <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><b>Добавить отзыв</b></a>
                        </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17142581465d04f1c83340c4_91058054', 'product_prices', $this->tplIndex);
?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3522181125d04f1c833a342_71300858', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15775086065d04f1c833eff3_37435130', 'product_buy', $this->tplIndex);
?>


                    </div>



                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19185585935d04f1c834e1c2_61733642', 'product_tabs', $this->tplIndex);
?>

                    <div class="tab-content">
                        <div class="tab-pane fade show<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="mgAbout" role="tabpanel" aria-labelledby="about-tab">
                            <div class="mg-tab-info">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11460046375d04f1c836d339_41574856', 'product_description', $this->tplIndex);
?>

                            </div>
                        </div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8038938655d04f1c83708e5_10650619', 'product_details', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19991160655d04f1c8373432_47819185', 'product_attachments', $this->tplIndex);
?>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                        <div class="tab-pane <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                        <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <hr class="mt-5">

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductincat2','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


        <section class="mg-product-reviews">
            <div class="container pt-4">
                <div class="text-uppercase mg-text-grey">отзывы (<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['reviewList']->value['reviews']), ENT_QUOTES, 'UTF-8');?>
)</div>
                <div class="mb-4" style="display: none"><small><b>Средний рейтинг</b></small> <div class="mg-main-customers__item-rating d-inline-flex"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div></div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviewList']->value['reviews'], 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                        <div class="col-md-6 mb-5">
                            <div class="mg-main-customers__item">
                                <p><?php echo htmlspecialchars(nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['content'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</p>
                                <div class="mg-main-customers__item-info">
                                    <div class="mg-main-customers__item-avatar"><?php echo htmlspecialchars(mb_substr($_smarty_tpl->tpl_vars['review']->value['displayName'],0,1), ENT_QUOTES, 'UTF-8');?>
</div>
                                    <div class="mg-main-customers__item-rating"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                                    <div class="mg-main-customers__item-name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['displayName'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="row justify-content-center align-items-center">
                    <a class="mg-link mg-text-grey mr-3" href="#" style="display: none">Показать больше</a>
                    <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><b>Написать отзыв</b></a>
                </div>
                <hr class="mt-5 mb-3">
            </div>
        </section>

        <section class="mg-faq-form border-0 pb-4">
            <div class="container">
                <div class="mg-top">
                    <span class="mg-title">Вопросы</span>
                    <p>Если вас интересует дополнительная информация о товаре или вы не нашли ответ на свой вопрос выше — вы можете задать свой вопрос здесь. Наша служба поддержки ответит вам в близжайшее время.</p>
                </div>
                <form action="#" method="post">
                    <fieldset class="mg-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mg-fieldset">
                                    <label for="inp1" class="mg-label">Ваше имя</label>
                                    <input type="text" class="mg-input" id="inp1">
                                </div>
                                <div class="mg-fieldset">
                                    <label for="inp4" class="mg-label">E-mail</label>
                                    <input type="email" class="mg-input" id="inp4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mg-fieldset">
                                    <label for="inp2" class="mg-label">Ваш вопрос</label>
                                    <textarea rows="1" cols="1" class="mg-textarea" id="inp2" placeholder="Задайте вопрос"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mg-fieldset">
                                    <button type="submit" class="mg-btn mg-faq-btn">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <hr>
            </div>
        </section>

        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19005847135d04f1c83a83f3_99694570', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2731022685d04f1c83abe76_94435055', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19248564855d04f1c83aef06_85005255', 'page_footer_container', $this->tplIndex);
?>

    </section>

<?php
}
}
/* {/block 'content'} */
}
