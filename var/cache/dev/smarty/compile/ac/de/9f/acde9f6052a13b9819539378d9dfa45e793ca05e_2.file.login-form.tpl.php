<?php
/* Smarty version 3.1.33, created on 2019-06-10 07:40:53
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfddf55100549_86656361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acde9f6052a13b9819539378d9dfa45e793ca05e' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/customer/_partials/login-form.tpl',
      1 => 1559093273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5cfddf55100549_86656361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17533524375cfddf550df1f7_19877220', 'login_form');
}
/* {block 'login_form_errors'} */
class Block_12993742835cfddf550e0234_91359548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
    <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_2385760255cfddf550e41a8_04195273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'page_title'} */
class Block_2204188395cfddf550e6593_51216479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="text-center pb-2 pb-md-5 mg-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'page_title'} */
/* {block 'form_field'} */
class Block_3162623375cfddf550ec891_11172861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_8391275935cfddf550e98c8_64560752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                    <div class="mg-fieldset js-parent-focus">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3162623375cfddf550ec891_11172861', 'form_field', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_10669577235cfddf550f67e1_04875539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <input type="hidden" name="submitLogin" value="1">
                                        <button id="submit-login" class="mg-btn mg-btn--black w-100" data-link-action="sign-in" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                                    <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_19597088635cfddf550f5401_41411194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="mg-fieldset py-2 py-md-5">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10669577235cfddf550f67e1_04875539', 'form_buttons', $this->tplIndex);
?>

                                </div>
                            <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_17533524375cfddf550df1f7_19877220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_17533524375cfddf550df1f7_19877220',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_12993742835cfddf550e0234_91359548',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_2385760255cfddf550e41a8_04195273',
  ),
  'page_title' => 
  array (
    0 => 'Block_2204188395cfddf550e6593_51216479',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_8391275935cfddf550e98c8_64560752',
  ),
  'form_field' => 
  array (
    0 => 'Block_3162623375cfddf550ec891_11172861',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_19597088635cfddf550f5401_41411194',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_10669577235cfddf550f67e1_04875539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12993742835cfddf550e0234_91359548', 'login_form_errors', $this->tplIndex);
?>


    <section class="py-5 mg-signin-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6 mx-auto">
                    <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2385760255cfddf550e41a8_04195273', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">
                        <fieldset>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2204188395cfddf550e6593_51216479', 'page_title', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8391275935cfddf550e98c8_64560752', 'login_form_fields', $this->tplIndex);
?>

                            <div class="mg-fieldset js-parent-focus">
                                <div class="d-flex justify-content-between align-items-center pt-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Запомнить меня</label>
                                    </div>
                                    <a class="mg-text-grey" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
                                </div>
                            </div>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19597088635cfddf550f5401_41411194', 'login_form_footer', $this->tplIndex);
?>

                        </fieldset>
                    </form>
                    <div style="text-align: center">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'login_form'} */
}
