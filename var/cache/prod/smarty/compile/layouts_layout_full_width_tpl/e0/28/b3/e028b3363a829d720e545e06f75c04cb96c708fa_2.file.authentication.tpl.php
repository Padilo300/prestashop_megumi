<?php
/* Smarty version 3.1.33, created on 2019-06-27 06:55:19
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d143e27c29fb6_80768482',
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
function content_5d143e27c29fb6_80768482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7016991025d143e27c27402_55077902', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'display_after_login_form'} */
class Block_2877463995d143e27c28a80_31994836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_16452609245d143e27c27a75_04764618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2877463995d143e27c28a80_31994836', 'display_after_login_form', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_7016991025d143e27c27402_55077902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7016991025d143e27c27402_55077902',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_16452609245d143e27c27a75_04764618',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_2877463995d143e27c28a80_31994836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16452609245d143e27c27a75_04764618', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
