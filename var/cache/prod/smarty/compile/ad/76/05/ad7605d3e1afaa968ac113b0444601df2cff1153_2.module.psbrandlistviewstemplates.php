<?php
/* Smarty version 3.1.33, created on 2019-05-28 21:42:19
  from 'module:psbrandlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced810b386fb8_73520447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:psbrandlistviewstemplates',
      1 => 1558969070,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'brand_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_5ced810b386fb8_73520447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search_filters_brands">
  <section class="facet">
    <h1 class="h6 text-uppercase facet-label">
      <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
    </h1>
    <div>
      <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
?>
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }
}
