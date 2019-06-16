<?php
/* Smarty version 3.1.33, created on 2019-06-13 20:59:01
  from 'module:seosashopreviewsviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d028ee5e91472_53974249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddd64377dd1bcaab7fd1cca7ffd9798f959b715e' => 
    array (
      0 => 'module:seosashopreviewsviewstemp',
      1 => 1559834605,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d028ee5e91472_53974249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/seosashopreviews/views/templates/front/review_17.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11268126085d028ee5e77244_93908773', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10219426795d028ee5e7c271_68949095', 'page_content');
?>


<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/seosashopreviews/views/templates/front/review_17.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block 'page_title'} */
class Block_11268126085d028ee5e77244_93908773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_11268126085d028ee5e77244_93908773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Reviews",'mod'=>"seosashopreviews"),$_smarty_tpl ) );?>
</h1>
    </header>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_10219426795d028ee5e7c271_68949095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10219426795d028ee5e7c271_68949095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                                            
                                                                                                                                                                                                                                                                                                           
                                                                                                                

<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
<div class="seosashopreviews standalone<?php if (SSRTools::isPs15()) {?> prestashop-1_5<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['nb_reviews']->value > $_smarty_tpl->tpl_vars['nb_reviews_per_page']->value) {?>
    <div class="top-pagination-content-sort-pagi-bar content_sortPagiBar clearfix">
        <div class="top-pagination-content clearfix">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['renderTemplate'][0], array( array('path'=>$_smarty_tpl->tpl_vars['pagination_tpl_path']->value),$_smarty_tpl ) );?>

        </div>
    </div>
    <?php }?>
    <div class="reviews">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['renderTemplate'][0], array( array('path'=>'front/_reviews-list.tpl'),$_smarty_tpl ) );?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['nb_reviews']->value > $_smarty_tpl->tpl_vars['nb_reviews_per_page']->value) {?>
    <div class="bottom-pagination-content-sort-pagi-bar content_sortPagiBar">
        <div class="bottom-pagination-content clearfix">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['renderTemplate'][0], array( array('path'=>$_smarty_tpl->tpl_vars['pagination_tpl_path']->value),$_smarty_tpl ) );?>

        </div>
    </div>
    <?php }?>
</div>
<?php }
}
}
/* {/block 'page_content'} */
}
