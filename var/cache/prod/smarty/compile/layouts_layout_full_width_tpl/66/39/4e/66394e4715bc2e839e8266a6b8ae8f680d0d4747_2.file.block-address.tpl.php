<?php
/* Smarty version 3.1.33, created on 2019-06-27 07:28:16
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1445e0303582_32905832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66394e4715bc2e839e8266a6b8ae8f680d0d4747' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/block-address.tpl',
      1 => 1559663706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1445e0303582_32905832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2530491665d1445e02fd954_98532337', 'address_block_item');
?>

<?php }
/* {block 'address_block_item_actions'} */
class Block_12581174845d1445e02fe014_23549479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class="mg-adress">
    <div class="row">
      <div class="col-lg-8 col-xl-6">
        <form action="#" method="post">
          <fieldset class="mg-fieldset">
            <label for="inp1" class="mg-label">Город</label>
            <input type="text" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['city'], ENT_QUOTES, 'UTF-8');?>
" id="inp1">
          </fieldset>
          <fieldset class="mg-fieldset">
            <label for="inp2" class="mg-label">Адрес</label>
            <textarea rows="1" cols="1" class="mg-textarea" id="inp2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['address1'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['address2'], ENT_QUOTES, 'UTF-8');?>
 </textarea>
          </fieldset>
          <fieldset class="mg-fieldset">
            <label for="inp3" class="mg-label">Телефон</label>
            <input type="text" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" id="inp3">
          </fieldset>
          <fieldset class="mg-fieldset">
            <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--change" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
">Изменить адрес</a></div>
            <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--add" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">Добавить новый адрес</a></div>
          </fieldset>
        </form>

      </div>
    </div>
  </div>




                      
                                                                                               <?php
}
}
/* {/block 'address_block_item_actions'} */
/* {block 'address_block_item'} */
class Block_2530491665d1445e02fd954_98532337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_block_item' => 
  array (
    0 => 'Block_2530491665d1445e02fd954_98532337',
  ),
  'address_block_item_actions' => 
  array (
    0 => 'Block_12581174845d1445e02fe014_23549479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12581174845d1445e02fe014_23549479', 'address_block_item_actions', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'address_block_item'} */
}
