<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:24:22
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065f2671a535_90296617',
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
function content_5d065f2671a535_90296617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7101216175d065f2670f9d0_60525825', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_11262787765d065f26712c20_67031212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10387618315d065f26714252_44251285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2574760245d065f26711bc8_15497506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11262787765d065f26712c20_67031212', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10387618315d065f26714252_44251285', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17073680535d065f267177f2_38549410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4983103915d065f26716790_03841942 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17073680535d065f267177f2_38549410', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7101216175d065f2670f9d0_60525825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7101216175d065f2670f9d0_60525825',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2574760245d065f26711bc8_15497506',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11262787765d065f26712c20_67031212',
  ),
  'page_content' => 
  array (
    0 => 'Block_10387618315d065f26714252_44251285',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4983103915d065f26716790_03841942',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17073680535d065f267177f2_38549410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">





                                                                                                          


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2574760245d065f26711bc8_15497506', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4983103915d065f26716790_03841942', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
