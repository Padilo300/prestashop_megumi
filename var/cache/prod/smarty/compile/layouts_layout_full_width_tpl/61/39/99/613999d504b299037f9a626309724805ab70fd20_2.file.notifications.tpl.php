<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:57:22
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d070fa2d6bcc4_74841882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613999d504b299037f9a626309724805ab70fd20' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/notifications.tpl',
      1 => 1559632229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d070fa2d6bcc4_74841882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14393993635d070fa2d60642_10940566', 'notifications_error');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260261705d070fa2d63ae0_20758507', 'notifications_warning');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19999329415d070fa2d66e89_30613906', 'notifications_success');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7111945335d070fa2d69ec6_10114296', 'notifications_info');
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_14393993635d070fa2d60642_10940566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_14393993635d070fa2d60642_10940566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_260261705d070fa2d63ae0_20758507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_260261705d070fa2d63ae0_20758507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_19999329415d070fa2d66e89_30613906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_19999329415d070fa2d66e89_30613906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>

      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_7111945335d070fa2d69ec6_10114296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_7111945335d070fa2d69ec6_10114296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
