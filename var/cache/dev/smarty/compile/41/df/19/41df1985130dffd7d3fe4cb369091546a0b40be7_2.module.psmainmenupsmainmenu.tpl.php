<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:24:22
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065f2697b3d6_97133016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1559088848,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d065f2697b3d6_97133016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/home/padilo00/padilo.pro/presta/var/cache/dev/smarty/compile/41/df/19/41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_8502418725d065f269612c5_45127148',
  ),
));
?><!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_mainmenu/ps_mainmenu.tpl -->


<?php $_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

    <div class="clearfix"></div>
</div>
<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_mainmenu/ps_mainmenu.tpl --><?php }
/* smarty_template_function_menu_8502418725d065f269612c5_45127148 */
if (!function_exists('smarty_template_function_menu_8502418725d065f269612c5_45127148')) {
function smarty_template_function_menu_8502418725d065f269612c5_45127148(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <nav class="navbar navbar-expand-lg navbar-dark mg-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="mg-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbar">
          <div class="container">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
                <li class="nav-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> active <?php }?>"><a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </ul>
          </div>
        </div>
      </nav>
      
    <?php }
}}
/*/ smarty_template_function_menu_8502418725d065f269612c5_45127148 */
}
