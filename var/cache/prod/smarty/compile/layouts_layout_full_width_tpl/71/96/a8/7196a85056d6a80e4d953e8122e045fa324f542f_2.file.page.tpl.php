<?php
/* Smarty version 3.1.33, created on 2019-05-28 19:07:50
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5cd6ce8368_89083338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7196a85056d6a80e4d953e8122e045fa324f542f' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl',
      1 => 1558969069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5cd6ce8368_89083338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10996814035ced5cd6cd72c5_11758170', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14657922255ced5cd6cd9d63_12560626 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14384820035ced5cd6cd85f5_75836915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14657922255ced5cd6cd9d63_12560626', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10975003295ced5cd6cdf7a2_51698400 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1308142045ced5cd6ce1528_27982800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5910650275ced5cd6cde139_90885847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10975003295ced5cd6cdf7a2_51698400', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1308142045ced5cd6ce1528_27982800', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17445559455ced5cd6ce5447_82548289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18383242915ced5cd6ce4201_28472560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17445559455ced5cd6ce5447_82548289', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10996814035ced5cd6cd72c5_11758170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10996814035ced5cd6cd72c5_11758170',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14384820035ced5cd6cd85f5_75836915',
  ),
  'page_title' => 
  array (
    0 => 'Block_14657922255ced5cd6cd9d63_12560626',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5910650275ced5cd6cde139_90885847',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10975003295ced5cd6cdf7a2_51698400',
  ),
  'page_content' => 
  array (
    0 => 'Block_1308142045ced5cd6ce1528_27982800',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18383242915ced5cd6ce4201_28472560',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17445559455ced5cd6ce5447_82548289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14384820035ced5cd6cd85f5_75836915', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5910650275ced5cd6cde139_90885847', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18383242915ced5cd6ce4201_28472560', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
