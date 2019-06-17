<?php
/* Smarty version 3.1.33, created on 2019-06-17 06:57:22
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d070fa2c0d9c9_90905410',
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
function content_5d070fa2c0d9c9_90905410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2310167345d070fa2c09ef3_98939294', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_10009286345d070fa2c0b035_43905758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13495311255d070fa2c0b875_92210697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21390534355d070fa2c0aab2_85876318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10009286345d070fa2c0b035_43905758', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13495311255d070fa2c0b875_92210697', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8193613775d070fa2c0c989_58017037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7337032725d070fa2c0c414_95373927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8193613775d070fa2c0c989_58017037', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2310167345d070fa2c09ef3_98939294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2310167345d070fa2c09ef3_98939294',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21390534355d070fa2c0aab2_85876318',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10009286345d070fa2c0b035_43905758',
  ),
  'page_content' => 
  array (
    0 => 'Block_13495311255d070fa2c0b875_92210697',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7337032725d070fa2c0c414_95373927',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8193613775d070fa2c0c989_58017037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">





                                                                                                          


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21390534355d070fa2c0aab2_85876318', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7337032725d070fa2c0c414_95373927', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
