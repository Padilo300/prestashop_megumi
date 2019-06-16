<?php
/* Smarty version 3.1.33, created on 2019-05-28 23:03:55
  from '/home/padilo00/padilo.pro/presta/modules/blockwishlist/views/templates/front/managewishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced942b2c93a1_93727206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9509d33cf5daa91fb9e5bad5ccd96249aa385da' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/blockwishlist/views/templates/front/managewishlist.tpl',
      1 => 1558984671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced942b2c93a1_93727206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/padilo00/padilo.pro/presta/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/padilo00/padilo.pro/presta/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
        <div class="wishlistLinkTop">
        <a id="hideWishlist" class="button_account icon pull-right" href="#" onclick="WishlistVisibility('wishlistLinkTop', 'Wishlist'); return false;" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close this wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
            <i class="material-icons">clear</i>
        </a>
        <ul class="clearfix display_list">
            <li>
                <a  id="hideBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                </a>
                <a id="showBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                </a>
            </li>
            <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
                <li>
                    <a id="hideBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hide bought products' info",'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                    </a>
                    <a id="showBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Show bought products' info",'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                    </a>
                </li>
            <?php }?>
        </ul>
        <p class="wishlisturl form-group">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Permalink','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
:</label> 
            <input type="text" class="form-control" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'blockwishlist','controller'=>'view','params'=>array('token'=>$_smarty_tpl->tpl_vars['token_wish']->value)),$_smarty_tpl ) );?>
" readonly="readonly"/>
        </p>
        <p class="submit">
            <div id="showSendWishlist">
                <a class="btn btn-default button button-small" href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        </p>
    <?php }?>
    <div class="wlp_bought">
        <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 4);?>
        <?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 3);?>
        <?php $_smarty_tpl->_assignInScope('nbLi', count($_smarty_tpl->tpl_vars['products']->value));?>
        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

        <ul class="row wlp_bought_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
  'total' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
                <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
                <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
                <li id="wlp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
                    class="col-xs-12 col-sm-4 col-md-3 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?>last-item-of-tablet-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?>first-item-of-tablet-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_image">
                                
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'product','id'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'ipa'=>$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                    <img class="replace-2x img-responsive"  src="//<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['image_link'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_infos">
                                <a class="lnkdel" href="javascript:;" onclick="WishlistProductManage('wlp_bought', 'delete', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', $('#quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val(), $('#priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val());" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                    <i class="icon-remove-sign"></i>
                                </a>

                                <p id="s_title" class="product-name">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                                        <small>
                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'product','id'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'ipa'=>$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attributes_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                            </a>
                                        </small>
                                    <?php }?>
                                </p>
                                <div class="wishlist_product_detail">
                                    <p class="form-group">
                                        <label for="quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
:
                                        </label>
                                        <input type="text" class="form-control grey" id="quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" size="3"/>
                                    </p>

                                    <p class="form-group">
                                        <label for="priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
:
                                        </label>
                                        <select id="priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="form-control grey">
                                            <option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 0) {?> selected="selected"<?php }?>>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'High','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                                            </option>
                                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 1) {?> selected="selected"<?php }?>>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                                            </option>
                                            <option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 2) {?> selected="selected"<?php }?>>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Low','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                                            </option>
                                        </select>
                                    </p>
                                </div>
                                <div class="btn_action">
                                    <a class="btn btn-default button button-small"  href="javascript:;" onclick="WishlistProductManage('wlp_bought_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', 'update', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', $('#quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val(), $('#priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val());" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                                    </a>
                                    <?php if (count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'wl', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['total'];
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] : null)) {?>
                                                <a class="btn btn-default button button-small wishlist_change_button" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move to a wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" data-placement="bottom">
                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                                                    </a>
                                                    <div hidden class="popover-content">
                                                        <table class="table" border="1">
                                                            <tbody>
                                            <?php }?>
                                            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['id_wishlist']->value != $_prefixVariable1) {?>
                                                                <tr title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" onclick="wishlistProductChange(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
');">
                                                                    <td>
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('Move to %s',$_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                                                                    </td>
                                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] : null)) {?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
        <form method="post" class="wl_send box unvisible" onsubmit="return (false);">
        <a id="hideSendWishlist" class="button_account btn icon"  href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close this wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
            <i class="material-icons">clear</i>
        </a>
            <fieldset>
                <div class="required form-group">
                    <label for="email1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
1 <sup>*</sup></label>
                    <input type="text" name="email1" id="email1" class="form-control"/>
                </div>
                <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 2; $__section_i_0_iteration <= 9; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <div class="form-group">
                        <label for="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl ) );
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
</label>
                        <input type="text" name="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
" id="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
"
                               class="form-control"/>
                    </div>
                <?php
}
}
?>
                <div class="submit">
                    <button class="btn btn-default button button-small" type="submit" name="submitWishlist"
                            onclick="WishlistSend('wl_send', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', 'email');">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                    </button>
                </div>
                <p class="required">
                    <sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                </p>
            </fieldset>
        </form>
        <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
            <table class="wlp_bought_infos unvisible table table-bordered table-responsive">
                <thead>
                <tr>
                    <th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
                    <th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
                    <th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offered by','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
                    <th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsBoughts']->value, 'product', false, NULL, 'i', array (
  'total' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['bought'], 'bought', false, NULL, 'j', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bought']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['bought']->value['quantity'] > 0) {?>
                            <tr>
                                <td class="first_item">
									<span style="float:left;">
										<img
                                                src="//<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['image_link'], ENT_QUOTES, 'UTF-8');?>
"
                                                alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
									</span>
									<span style="float:left;">
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                                            <br/>
                                            <i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attributes_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</i>
                                        <?php }?>
									</span>
                                </td>
                                <td class="item align_center">
                                    <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['bought']->value['quantity']), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td class="item align_center">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bought']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bought']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td class="last_item align_center">
                                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['bought']->value['date_add'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>

                                </td>
                            </tr>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php }?>
    <?php }
} else { ?>
    <p class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

    </p>
<?php }
}
}
