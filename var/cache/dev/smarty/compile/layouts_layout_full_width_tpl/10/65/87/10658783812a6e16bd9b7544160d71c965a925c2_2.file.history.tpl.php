<?php
/* Smarty version 3.1.33, created on 2019-06-10 14:05:49
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe398db9e5f0_59799171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10658783812a6e16bd9b7544160d71c965a925c2' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/history.tpl',
      1 => 1559657774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfe398db9e5f0_59799171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532688715cfe398db69203_01457209', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5957865445cfe398db6c130_37557418', 'page_content');
?>












  
  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                            
  <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_1532688715cfe398db69203_01457209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1532688715cfe398db69203_01457209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>


<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_5957865445cfe398db6c130_37557418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_5957865445cfe398db6c130_37557418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="mg-profile">
    <div class="container">
      <span class="mg-profile__title" id="customer_name"></span>
      <div class="mg-profile__menu">
        <a class="active" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
        <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
        <?php }?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
        <a href="/module/blockwishlist/mywishlist">Избранное</a>
        <a href="reviews/my-reviews"> Вопросы и ответы</a>
      </div>
    </div>

  <div class="container">
  <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>



    <div class="mg-orders">
      <div class="row mg-order__header d-none d-lg-flex">
        <div class="col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-7 text-center">Товар</div>
          </div>
        </div>
        <div class="col-lg-7 col-xl-8">
          <div class="row">
            <div class="col-md-4 text-center">Дата</div>
            <div class="col-md-3 pl-4">Цена</div>
            <div class="col-md-4">Статус</div>
          </div>
        </div>
      </div>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
      <div class="row mg-order__body-line">
        <div class="col-12 col-md-9 col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-5 col-lg-7">
              <div class="row align-items-center">
                <div class="col-6 col-md-12"><div class="mg-order__product-image"><img src="http://presta.padilo.pro/img/p/5/6/56-home_default.jpg" alt="" /></div></div>
                <div class="col-6 col-md-12 d-block d-md-none">
                  <div class="row">
                    <div class="col-md-12"><span class="mg-order__date">9 января 2019</span></div>
                    <div class="pt-3 pb-2 col-md-12 col-lg-3 pt-lg-0 pb-lg-0 pl-lg-4"><span class="mg-order__price">1980</span>
                                          </div>
                    <div class="col-md-12 pr-0"><span class="mg-order__status mg-order__status--process">в обработке</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5 pr-0">

              <a class="mg-order__title" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</a>
              <span class="mg-order__description">Описание</span>
              <div class="mg-order__colors">
                <a class="mg-order__color mg-order__color--boss-pink" href="#">Boss Pink</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block col-md-3 col-lg-7 col-xl-8">
          <div class="row">
            <div class="col-md-12 col-lg-4 text-lg-center"><span class="mg-order__date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</span></div>
            <div class="col-md-12 pt-md-3 pb-md-2 col-lg-3 pt-lg-0 pb-lg-0 pl-lg-4"><span class="mg-order__price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                          </div>
            <div class="col-md-12 col-lg-4 pr-0"><span class="mg-order__status mg-order__status--process">  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>
</span></div>
          </div>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

  <?php }?>
  </div>
</section>
<?php
}
}
/* {/block 'page_content'} */
}
