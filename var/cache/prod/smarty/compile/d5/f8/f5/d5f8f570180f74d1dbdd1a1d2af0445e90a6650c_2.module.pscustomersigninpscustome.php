<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:56:15
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1f2ccf0334c9_02657910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1559636483,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1f2ccf0334c9_02657910 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="dropdown mf-header__profile-link">
    <a class="dropdown-toggle" href="#" role="button" id="profile-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Профиль</a>
    <div class="dropdown-menu" aria-labelledby="profile-link">

      <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" id="headCustomerName"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Выйти','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php } else { ?>
        <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Войти','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
    <?php }?>
    </div>
  </div>
<?php }
}
