<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:03
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc1b59ba05_52694198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1559292228,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc1b59ba05_52694198 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl -->


<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
<section class="mg-slider">
  <div class="container">
    <div class="mg-main-slider" id="mg-main-slider">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <div>
          <img class="mg-slider__image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
"/>
          <div class="mg-slider__content">
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</p>
                <a class="mg-btn mg-btn--transparent" href="#">Купить</a>
            <?php }?>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
  </div>
</section>
<?php }?>
<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl --><?php }
}
