<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:03
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc1b3fbb85_84781334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc70f9d064e6d30e750b6a13d04cbaf544bf2a5d' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/index.tpl',
      1 => 1558969069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc1b3fbb85_84781334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19552535675d06fc1b3f6ba9_05361267', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_493545635d06fc1b3f7850_09441525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20070376595d06fc1b3f9440_22460841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_17057995885d06fc1b3f89d8_96349901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20070376595d06fc1b3f9440_22460841', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19552535675d06fc1b3f6ba9_05361267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19552535675d06fc1b3f6ba9_05361267',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_493545635d06fc1b3f7850_09441525',
  ),
  'page_content' => 
  array (
    0 => 'Block_17057995885d06fc1b3f89d8_96349901',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20070376595d06fc1b3f9440_22460841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_493545635d06fc1b3f7850_09441525', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17057995885d06fc1b3f89d8_96349901', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
