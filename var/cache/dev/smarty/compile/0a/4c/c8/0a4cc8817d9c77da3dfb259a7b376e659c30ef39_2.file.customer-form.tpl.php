<?php
/* Smarty version 3.1.33, created on 2019-06-12 14:33:37
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00e3119486d0_46985824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4cc8817d9c77da3dfb259a7b376e659c30ef39' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/customer-form.tpl',
      1 => 1559833843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00e3119486d0_46985824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2237611505d00e31190c0e7_64373047', 'customer_form');
?>

<?php }
/* {block 'customer_form_actionurl'} */
class Block_14074600775d00e31190f188_59923956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_7484096385d00e311938492_38660534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_9280861245d00e3119144c1_02893644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="mg-adress">
      <div class="row">
        <div class="col-lg-8 col-xl-6">
          <form action="#" method="post">

            <fieldset class="mg-fieldset">
              <label for="inp1" class="mg-label">Имя</label>
              <input type="text" name="firstname" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formFields']->value['firstname']['value'], ENT_QUOTES, 'UTF-8');?>
" id="inp1">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp1" class="mg-label">Фамилия</label>
              <input type="text" name="lastname" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formFields']->value['lastname']['value'], ENT_QUOTES, 'UTF-8');?>
" id="inp1">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp3" class="mg-label">Телефон</label>
              <input type="text" disabled name="phone" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formFields']->value['phone']['value'], ENT_QUOTES, 'UTF-8');?>
" id="inp3">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp4" class="mg-label">E-mail</label>
              <input class="form-control" name="email" type="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formFields']->value['email']['value'], ENT_QUOTES, 'UTF-8');?>
" class="mg-input" required="">
            </fieldset>
            <fieldset class="mg-fieldset">
              <div class="mb-2 d-block d-sm-inline-block"><a class="mg-adress--change"  onclick="document.getElementById('customer-form').submit()" href="#">Изменить данные</a></div>
            </fieldset>

        </div>
        <div class="col-lg-4 col-xl-6">
          <fieldset class="mg-fieldset">
              <label for="inp3" class="mg-label">Пароль</label>
              <input type="password" name="password" class="mg-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formFields']->value['password']['value'], ENT_QUOTES, 'UTF-8');?>
" id="inp3">
            </fieldset>
            <fieldset class="mg-fieldset">
              <label for="inp4" class="mg-label">Новый пароль</label>
              <input type="password" name="new_password" class="mg-input" value="" id="inp4">
            </fieldset>
        </div>
      </div>
    </div>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['firstname'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['lastname'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['email'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['lastname'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['email'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['password'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formFields']) ? $_smarty_tpl->tpl_vars['formFields']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['new_password'] = 0;
$_smarty_tpl->_assignInScope('formFields', $_tmp_array);?>


<div class="hidd" style="display: none">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7484096385d00e311938492_38660534', "form_field", $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
  </section>
    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_14109492545d00e311943188_93096850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_8158359405d00e3119413e6_49739020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14109492545d00e311943188_93096850', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_2237611505d00e31190c0e7_64373047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_2237611505d00e31190c0e7_64373047',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_14074600775d00e31190f188_59923956',
  ),
  'form_fields' => 
  array (
    0 => 'Block_9280861245d00e3119144c1_02893644',
  ),
  'form_field' => 
  array (
    0 => 'Block_7484096385d00e311938492_38660534',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_8158359405d00e3119413e6_49739020',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_14109492545d00e311943188_93096850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
  <section>
<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14074600775d00e31190f188_59923956', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9280861245d00e3119144c1_02893644', "form_fields", $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8158359405d00e3119413e6_49739020', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
