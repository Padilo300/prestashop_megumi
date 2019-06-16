<?php
/* Smarty version 3.1.33, created on 2019-06-14 05:05:01
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0300cd319497_52510414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1809c1a5c586d46456ac0864fbff9f28e87d4ce4' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/head.tpl',
      1 => 1559665895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5d0300cd319497_52510414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19235746305d0300cd2e6b61_63762218', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5013317805d0300cd2e8e31_19797535', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6152455605d0300cd2eaee4_56940788', 'head_seo');
?>


<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20498941825d0300cd305640_54480295', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19867724515d0300cd307103_57555941', 'head_icons');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19760553635d0300cd30f834_50593326', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883739015d0300cd314ca0_90805410', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18808409385d0300cd317815_46602910', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_19235746305d0300cd2e6b61_63762218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_19235746305d0300cd2e6b61_63762218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_5013317805d0300cd2e8e31_19797535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_5013317805d0300cd2e8e31_19797535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_9214793375d0300cd2ebe50_16479614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_13678015925d0300cd2efb28_83118896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_7370130985d0300cd2f38b7_42807157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_20965424305d0300cd2ff431_95157614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <link rel="stylesheet" href="/themes/classic/assets/stylesheets/fonts.css" type="text/css" media="all">
      <link rel="stylesheet" href="/themes/classic/assets/stylesheets/bootstrap.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="/themes/classic/assets/stylesheets/slick.css" type="text/css"/>
      <link rel="stylesheet" href="/themes/classic/assets/stylesheets/base.css" type="text/css" media="all">
      <link rel="stylesheet" href="/themes/classic/assets/stylesheets/media.css" type="text/css" media="all">
      <link rel="stylesheet" href="/themes/classic/assets/css/custom.css" type="text/css" media="all">
      <link rel="stylesheet" href="/js/jquery/ui/themes/base/minified/jquery-ui.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css" type="text/css" media="all">

  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_6152455605d0300cd2eaee4_56940788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_6152455605d0300cd2eaee4_56940788',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_9214793375d0300cd2ebe50_16479614',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_13678015925d0300cd2efb28_83118896',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_7370130985d0300cd2f38b7_42807157',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_20965424305d0300cd2ff431_95157614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9214793375d0300cd2ebe50_16479614', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13678015925d0300cd2efb28_83118896', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7370130985d0300cd2f38b7_42807157', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20965424305d0300cd2ff431_95157614', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_20498941825d0300cd305640_54480295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_20498941825d0300cd305640_54480295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_19867724515d0300cd307103_57555941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_19867724515d0300cd307103_57555941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'javascript_head'} */
class Block_19760553635d0300cd30f834_50593326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_19760553635d0300cd30f834_50593326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_883739015d0300cd314ca0_90805410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_883739015d0300cd314ca0_90805410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_18808409385d0300cd317815_46602910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_18808409385d0300cd317815_46602910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
