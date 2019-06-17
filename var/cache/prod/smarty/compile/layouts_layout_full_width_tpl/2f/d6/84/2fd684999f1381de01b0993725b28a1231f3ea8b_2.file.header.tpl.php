<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:57:22
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d070fa2c9cfa0_76791545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd684999f1381de01b0993725b28a1231f3ea8b' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/header.tpl',
      1 => 1559091687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d070fa2c9cfa0_76791545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10700813695d070fa2c966a2_10766183', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11279945275d070fa2c97bd7_91161823', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12019247685d070fa2c98ae4_45634672', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_10700813695d070fa2c966a2_10766183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_10700813695d070fa2c966a2_10766183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_11279945275d070fa2c97bd7_91161823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_11279945275d070fa2c97bd7_91161823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <div class="mg-header-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col mg-header-top__phone"><i class="mg-icon icon-phone"></i><a href="tel:8-920-123-45-67"><b>8-920-123-45-67</b> - горячая линия круглосуточно</a></div>
        <div class="col text-right">
          <div class="dropdown mg-header-top__delivery">
            <a class="dropdown-toggle" href="#" role="button" id="cargo-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mg-icon icon-cargo"></i>Доставка и Оплата</a>
            <div class="dropdown-menu" aria-labelledby="cargo-link">
              <a class="dropdown-item" href="#">Доставка</a>
              <a class="dropdown-item" href="#">Оплата</a>
            </div>
          </div>
          <a class="mg-header-top__link" href="/ru/myq">Контакты</a>
        </div>
      </div>
    </div>
  </div>
  
 <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_12019247685d070fa2c98ae4_45634672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12019247685d070fa2c98ae4_45634672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="mg-header__content">

     <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

        <a class="mg-header__logo" href="#"><span class="icon-logo-dark"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
      <?php } else { ?>
        <a class="mg-header__logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><span class="icon-logo-dark"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav3'),$_smarty_tpl ) );?>

    </div>
</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySlider'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'header_top'} */
}
