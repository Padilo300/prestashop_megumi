<?php
/* Smarty version 3.1.33, created on 2019-06-27 07:19:17
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1443c5dff0e9_59486096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547f5a8a566a65ecca3313a20ab19c8f1ed0b663' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1558969069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1443c5dff0e9_59486096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19926275945d1443c5dfdb55_91626820', 'step');
?>

<?php }
/* {block 'step'} */
class Block_19926275945d1443c5dfdb55_91626820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_19926275945d1443c5dfdb55_91626820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
