<?php
/* Smarty version 3.1.33, created on 2019-07-05 05:38:08
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1eb8101af5c2_12594961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39c24e61e06dec8e21f22a5a1fc136ccad071ba' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1559093177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1eb8101af5c2_12594961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <section class="mg-crumbs" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
  <div class="container"  itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7790520345d1eb8101a9a93_01776983', 'breadcrumb');
?>

  </div>
</section>

<?php }
/* {block 'breadcrumb_item'} */
class Block_12944893545d1eb8101ab780_76814145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);?>

        <?php if (count($_smarty_tpl->tpl_vars['breadcrumb']->value['links']) == $_smarty_tpl->tpl_vars['val']->value) {?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } else { ?>
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_7790520345d1eb8101a9a93_01776983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7790520345d1eb8101a9a93_01776983',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_12944893545d1eb8101ab780_76814145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php $_smarty_tpl->_assignInScope('val', 0);?> 
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12944893545d1eb8101ab780_76814145', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
