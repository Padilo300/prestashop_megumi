<?php
/* Smarty version 3.1.33, created on 2019-06-27 07:19:17
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1443c5e4d803_00423253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86abcd1ce6613fd5339b8205c90a4e55c48a6d61' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1558969069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1443c5e4d803_00423253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13373810665d1443c5e4b9c3_70459707', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_13373810665d1443c5e4b9c3_70459707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13373810665d1443c5e4b9c3_70459707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
