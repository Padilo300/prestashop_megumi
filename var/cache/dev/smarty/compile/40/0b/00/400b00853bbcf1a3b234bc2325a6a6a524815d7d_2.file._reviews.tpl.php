<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:01
  from '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc195efa62_87532103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '400b00853bbcf1a3b234bc2325a6a6a524815d7d' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/_reviews.tpl',
      1 => 1559323412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc195efa62_87532103 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review', false, NULL, 'reviews', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
        <div class="mg-main-customers__item">
            <p>
                <?php if ($_smarty_tpl->tpl_vars['review']->value->hasLongText($_smarty_tpl->tpl_vars['slider_config']->value['short_text_length'])) {?>
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->getShortText($_smarty_tpl->tpl_vars['slider_config']->value['short_text_length']) )), ENT_QUOTES, 'UTF-8');?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more...','mod'=>'seosashopreviews'),$_smarty_tpl ) );?>

                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->text )), ENT_QUOTES, 'UTF-8');?>

                <?php } else { ?>
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->text )), ENT_QUOTES, 'UTF-8');?>

                <?php }?>
            </p>
            <div class="mg-main-customers__item-info">
                <div class="mg-main-customers__item-avatar">
                    <?php if ($_smarty_tpl->tpl_vars['review']->value->hasImage()) {?>
                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->getImageLink(),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="fancybox">
                            <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->getImageLink($_smarty_tpl->tpl_vars['hook_type']->value),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />
                        </a>
                    <?php } else { ?>
                        <span class="separator"></span>
                    <?php }?>

                </div>


                <div class="mg-main-customers__item-rating">
                    <?php $_smarty_tpl->_assignInScope('ratings', array(1,2,3,4,5));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings']->value, 'rating');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->value) {
?>

                        <i class="<?php if ($_smarty_tpl->tpl_vars['rating']->value <= $_smarty_tpl->tpl_vars['review']->value->rating) {?> active<?php }?>"></i>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="mg-main-customers__item-name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'no_escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value->name )), ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<?php }
}
