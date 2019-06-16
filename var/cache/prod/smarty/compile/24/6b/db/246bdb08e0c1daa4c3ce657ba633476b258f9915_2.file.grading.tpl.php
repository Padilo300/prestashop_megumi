<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/helpers/grading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f549fd7_39452972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246bdb08e0c1daa4c3ce657ba633476b258f9915' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/helpers/grading.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5a9f549fd7_39452972 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="revws-grading revws-grading-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <div class="revws-grade-wrap">
      <svg class="revws-grade revws-grade-<?php if ($_smarty_tpl->tpl_vars['grade']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>off<?php } else { ?>on<?php }?>" viewBox="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shape']->value['viewBox'], ENT_QUOTES, 'UTF-8');?>
">
        <path d="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shape']->value['path'], ENT_QUOTES, 'UTF-8');?>
" />
      </svg>
    </div>
  <?php
}
}
?>
</div>
<?php }
}
