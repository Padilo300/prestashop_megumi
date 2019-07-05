<?php
/* Smarty version 3.1.33, created on 2019-07-05 05:38:10
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1eb8121776c9_56045575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f33112e153ef11c94a955750d682bd935f8697' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/product.tpl',
      1 => 1560753057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-prices.tpl' => 2,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5d1eb8121776c9_56045575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17921887405d1eb8121360d1_55763617', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7957680125d1eb8121375c0_51080865', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12818685755d1eb81213e7c6_25823072', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_17921887405d1eb8121360d1_55763617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_17921887405d1eb8121360d1_55763617',
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
class Block_7957680125d1eb8121375c0_51080865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7957680125d1eb8121375c0_51080865',
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
class Block_18712617785d1eb812140758_08062437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_2540849875d1eb8121401f4_18598448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18712617785d1eb812140758_08062437', 'page_title', $this->tplIndex);
?>
</h1>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_84410065d1eb81213fc79_07957373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2540849875d1eb8121401f4_18598448', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_6468726545d1eb812141bd8_39972094 extends Smarty_Internal_Block
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
class Block_11411398675d1eb812144123_94553305 extends Smarty_Internal_Block
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
class Block_8006093755d1eb812145a95_60080187 extends Smarty_Internal_Block
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
class Block_233465035d1eb812145539_47471585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8006093755d1eb812145a95_60080187', 'product_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8721347275d1eb812144fc5_28012378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233465035d1eb812145539_47471585', 'page_content', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_14132663495d1eb812148165_18177618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_8870472455d1eb812147c09_64406177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14132663495d1eb812148165_18177618', 'page_title', $this->tplIndex);
?>
</h1>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_3384294805d1eb812147689_38462520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8870472455d1eb812147c09_64406177', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_18681483295d1eb8121495a1_06537724 extends Smarty_Internal_Block
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
class Block_15461903465d1eb81214a867_66977201 extends Smarty_Internal_Block
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
class Block_8152620455d1eb81214ca95_49313785 extends Smarty_Internal_Block
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
class Block_12914682295d1eb812150174_16904575 extends Smarty_Internal_Block
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
class Block_10861694465d1eb812150fa6_14860529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_7836080285d1eb812151eb7_61860549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_15202904695d1eb81214e239_29511078 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12914682295d1eb812150174_16904575', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10861694465d1eb812150fa6_14860529', 'product_add_to_cart', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7836080285d1eb812151eb7_61860549', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_tabs'} */
class Block_430044895d1eb812152a42_33535746 extends Smarty_Internal_Block
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
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabCustom'),$_smarty_tpl ) );?>

                            <li class="nav-item">
                                <a class="nav-link" id="brand-tab" data-toggle="tab" href="#mgBrand" role="tab" aria-controls="brand" aria-selected="false">о бренде</a>
                            </li>
                        </ul>
                    <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_description'} */
class Block_12430959325d1eb81215ea62_49795496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_6402650475d1eb81215fb42_41113286 extends Smarty_Internal_Block
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
class Block_3863347335d1eb812160981_87495391 extends Smarty_Internal_Block
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
class Block_18629194255d1eb812170613_82994257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_419522885d1eb812174b99_95566921 extends Smarty_Internal_Block
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
class Block_9532346155d1eb812175fd1_16095069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_6547041015d1eb8121759c7_59175205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9532346155d1eb812175fd1_16095069', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12818685755d1eb81213e7c6_25823072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12818685755d1eb81213e7c6_25823072',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_84410065d1eb81213fc79_07957373',
    1 => 'Block_3384294805d1eb812147689_38462520',
  ),
  'page_header' => 
  array (
    0 => 'Block_2540849875d1eb8121401f4_18598448',
    1 => 'Block_8870472455d1eb812147c09_64406177',
  ),
  'page_title' => 
  array (
    0 => 'Block_18712617785d1eb812140758_08062437',
    1 => 'Block_14132663495d1eb812148165_18177618',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_6468726545d1eb812141bd8_39972094',
    1 => 'Block_18681483295d1eb8121495a1_06537724',
  ),
  'product_prices' => 
  array (
    0 => 'Block_11411398675d1eb812144123_94553305',
    1 => 'Block_15461903465d1eb81214a867_66977201',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8721347275d1eb812144fc5_28012378',
  ),
  'page_content' => 
  array (
    0 => 'Block_233465035d1eb812145539_47471585',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_8006093755d1eb812145a95_60080187',
  ),
  'product_customization' => 
  array (
    0 => 'Block_8152620455d1eb81214ca95_49313785',
  ),
  'product_buy' => 
  array (
    0 => 'Block_15202904695d1eb81214e239_29511078',
  ),
  'product_variants' => 
  array (
    0 => 'Block_12914682295d1eb812150174_16904575',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_10861694465d1eb812150fa6_14860529',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_7836080285d1eb812151eb7_61860549',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_430044895d1eb812152a42_33535746',
  ),
  'product_description' => 
  array (
    0 => 'Block_12430959325d1eb81215ea62_49795496',
  ),
  'product_details' => 
  array (
    0 => 'Block_6402650475d1eb81215fb42_41113286',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_3863347335d1eb812160981_87495391',
  ),
  'product_footer' => 
  array (
    0 => 'Block_18629194255d1eb812170613_82994257',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_419522885d1eb812174b99_95566921',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_6547041015d1eb8121759c7_59175205',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9532346155d1eb812175fd1_16095069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="mg-product-content" id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="container">

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRevwsReview'),$_smarty_tpl ) );?>

            <div class="row">

                <div class="col-lg-6">
                    <div class="mg-product-content__info d-block d-lg-none">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84410065d1eb81213fc79_07957373', 'page_header_container', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6468726545d1eb812141bd8_39972094', 'product_description_short', $this->tplIndex);
?>

                        <div class="d-flex align-items-center">
                            <div class="mg-main-customers__item-rating d-inline-flex ml-0"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i><i></i></div>
                            <span class="mg-text-grey mr-3">Отзывы (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewList']->value['total'], ENT_QUOTES, 'UTF-8');?>
)</span>
                            <a class="mg-btn ml-3" href="#" data-revws-entity-type="product" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><b>Добавить отзыв</b></a>
                        </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11411398675d1eb812144123_94553305', 'product_prices', $this->tplIndex);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8721347275d1eb812144fc5_28012378', 'page_content_container', $this->tplIndex);
?>



                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductincat','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>



                </div>
                <div class="col-lg-6">
                    <div class="mg-product-content__info d-none d-lg-block">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3384294805d1eb812147689_38462520', 'page_header_container', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18681483295d1eb8121495a1_06537724', 'product_description_short', $this->tplIndex);
?>

                        <div class="d-flex align-items-center">
                            <div class="mg-main-customers__item-rating d-inline-flex ml-0">
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i class="active"></i>
                                <i></i>
                            </div>
                            <span class="mg-text-grey mr-3">Отзывы (2)</span>
                            <a class="mg-text-grey" href="#">Добавить отзыв</a>
                        </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15461903465d1eb81214a867_66977201', 'product_prices', $this->tplIndex);
?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8152620455d1eb81214ca95_49313785', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15202904695d1eb81214e239_29511078', 'product_buy', $this->tplIndex);
?>


                    </div>



                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_430044895d1eb812152a42_33535746', 'product_tabs', $this->tplIndex);
?>

                    <div class="tab-content">

                        <div class="tab-pane fade" id="mgBrand" role="tabpanel" aria-labelledby="brand-tab">
                            <div class="mg-tab-info">
                                <p>ROUGE HOLIC дополнит ваш образ, наполнив губы насыщенным, глубоким, ярким оттенком.<br/>обладает высокой стойкостью.<br/><b>3.</b> Глубокий, стойкий цвет и блеск<br/>Высокоэластичная текстура с высокоглянцевыми полимерами, обеспечивают стойкость цвета и блеск.<br/><b>4.</b> Глубокое увлажнение<br/>Входящий в состав овощной сквален интенсивно увлажает нежную кожу губ, предотвращает потерю влаги и делает их увлажненными<br/>и гладкими в течение длительного времени.<br/><b>5.</b> Современный дизайн<br/>Дизайн вдохновлен образом Сеульских модниц, очаровательных<br/>и утонченных.</p>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabContentCustom'),$_smarty_tpl ) );?>

                        <div class="tab-pane fade show<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="mgAbout" role="tabpanel" aria-labelledby="about-tab">
                            <div class="mg-tab-info">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12430959325d1eb81215ea62_49795496', 'product_description', $this->tplIndex);
?>

                            </div>
                        </div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6402650475d1eb81215fb42_41113286', 'product_details', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3863347335d1eb812160981_87495391', 'product_attachments', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18629194255d1eb812170613_82994257', 'product_footer', $this->tplIndex);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
            <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
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
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_419522885d1eb812174b99_95566921', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6547041015d1eb8121759c7_59175205', 'page_footer_container', $this->tplIndex);
?>

    </section>

<?php
}
}
/* {/block 'content'} */
}
