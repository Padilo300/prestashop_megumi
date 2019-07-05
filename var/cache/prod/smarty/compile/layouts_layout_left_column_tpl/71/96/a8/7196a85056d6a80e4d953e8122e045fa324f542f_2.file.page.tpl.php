<?php
/* Smarty version 3.1.33, created on 2019-06-20 10:18:47
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0b33573ce231_76309435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7196a85056d6a80e4d953e8122e045fa324f542f' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl',
      1 => 1560143637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0b33573ce231_76309435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14338221555d0b33573ca961_05308842', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_9577522235d0b33573cbc03_20877953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9744620455d0b33573cc4a8_30522126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13690685315d0b33573cb461_64872063 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9577522235d0b33573cbc03_20877953', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9744620455d0b33573cc4a8_30522126', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9574752965d0b33573cd592_21989766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2684733485d0b33573cd036_07507235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9574752965d0b33573cd592_21989766', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14338221555d0b33573ca961_05308842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14338221555d0b33573ca961_05308842',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13690685315d0b33573cb461_64872063',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9577522235d0b33573cbc03_20877953',
  ),
  'page_content' => 
  array (
    0 => 'Block_9744620455d0b33573cc4a8_30522126',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2684733485d0b33573cd036_07507235',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9574752965d0b33573cd592_21989766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">





                                                                                                          


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13690685315d0b33573cb461_64872063', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2684733485d0b33573cd036_07507235', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
