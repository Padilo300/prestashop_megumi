<?php
/* Smarty version 3.1.33, created on 2019-06-12 14:33:34
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00e30eede872_04672984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a3f34c77d6e0d85246c1e3d65964a863ea4fa16' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/my-account.tpl',
      1 => 1559831829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00e30eede872_04672984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20344474675d00e30eeb3b15_63983493', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4500774395d00e30eeba6b4_05588999', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13908253125d00e30eeda758_10538603', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_20344474675d00e30eeb3b15_63983493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_20344474675d00e30eeb3b15_63983493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_4500774395d00e30eeba6b4_05588999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4500774395d00e30eeba6b4_05588999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      
                                                
                                                                                                                                          
                                                                        
                                                                        
                                                                        
                                                                        


      <section class="mg-profile">
  <div class="container">
    <span class="mg-profile__title" id="customer_name"></span>
  <div class="mg-profile__menu">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
  
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>

    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
    <a href="/module/blockwishlist/mywishlist">Избранное</a>
    <a href="reviews/my-reviews"> Вопросы и ответы</a>
  </div>
  </div>
</section>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_21204153205d00e30eedb7a2_06952644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_13908253125d00e30eeda758_10538603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_13908253125d00e30eeda758_10538603',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_21204153205d00e30eedb7a2_06952644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21204153205d00e30eedb7a2_06952644', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
