<?php
/* Smarty version 3.1.33, created on 2019-06-17 07:14:36
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/admin/backend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0713ac54bc09_79055800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54574a452553cd7480a6b6dfd7d34dc9dfef41f' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/admin/backend.tpl',
      1 => 1559101273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0713ac54bc09_79055800 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="revws-app">
  Please wait...
</div>
<?php echo '<script'; ?>
>
  (function(){
    var started = false;
    var attempt = 0;
    function startRevwsApp() {
      if (started) {
        return;
      }
      if (window.startRevws) {
        started = true;
        startRevws(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['revws']->value ));?>
);
      } else {
        attempt++;
        console.log('['+attempt+'] startRevws not loaded yet, waiting...');
        setTimeout(startRevwsApp, 500);
      }
    }
    startRevwsApp();
  })();
<?php echo '</script'; ?>
>
<?php }
}
