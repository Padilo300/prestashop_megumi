<?php
/* Smarty version 3.1.33, created on 2019-06-27 07:28:04
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1445d40490c5_88582651',
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
function content_5d1445d40490c5_88582651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6569333775d1445d403f355_78908944', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4766756375d1445d40405b2_09901514', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4134283505d1445d4047d98_62333100', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6569333775d1445d403f355_78908944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6569333775d1445d403f355_78908944',
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
class Block_4766756375d1445d40405b2_09901514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4766756375d1445d40405b2_09901514',
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
class Block_1216168265d1445d4048320_28870106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_4134283505d1445d4047d98_62333100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_4134283505d1445d4047d98_62333100',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_1216168265d1445d4048320_28870106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1216168265d1445d4048320_28870106', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
