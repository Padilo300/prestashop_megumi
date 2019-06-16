<?php
/* Smarty version 3.1.33, created on 2019-06-10 07:40:52
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfddf54e80e85_49680288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e028b3363a829d720e545e06f75c04cb96c708fa' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/authentication.tpl',
      1 => 1559093174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfddf54e80e85_49680288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19776286495cfddf54e78dd5_72399731', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'display_after_login_form'} */
class Block_19910906035cfddf54e7cf01_76901534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_13580245425cfddf54e7a0a1_27160418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19910906035cfddf54e7cf01_76901534', 'display_after_login_form', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_19776286495cfddf54e78dd5_72399731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19776286495cfddf54e78dd5_72399731',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_13580245425cfddf54e7a0a1_27160418',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_19910906035cfddf54e7cf01_76901534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13580245425cfddf54e7a0a1_27160418', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
