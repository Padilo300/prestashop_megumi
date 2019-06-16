<?php
/* Smarty version 3.1.33, created on 2019-05-28 19:07:50
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5cd6cd0948_20293388',
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
function content_5ced5cd6cd0948_20293388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15969755715ced5cd6cc3d38_13466149', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14014115905ced5cd6cc6059_52212574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13806070695ced5cd6ccab70_87349199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4699433475ced5cd6cc8d97_73815432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13806070695ced5cd6ccab70_87349199', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15969755715ced5cd6cc3d38_13466149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15969755715ced5cd6cc3d38_13466149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14014115905ced5cd6cc6059_52212574',
  ),
  'page_content' => 
  array (
    0 => 'Block_4699433475ced5cd6cc8d97_73815432',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13806070695ced5cd6ccab70_87349199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14014115905ced5cd6cc6059_52212574', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4699433475ced5cd6cc8d97_73815432', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
