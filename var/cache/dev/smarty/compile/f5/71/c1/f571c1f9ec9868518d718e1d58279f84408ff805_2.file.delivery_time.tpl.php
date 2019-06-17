<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:36:03
  from '/home/padilo00/padilo.pro/presta/modules/cdek/views/templates/hook/delivery_time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc93b62221_11117344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f571c1f9ec9868518d718e1d58279f84408ff805' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/cdek/views/templates/hook/delivery_time.tpl',
      1 => 1558972318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc93b62221_11117344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cdek_delivery_date_block clearfix">

    <div class="col-md-6 col-lg-3 clearfix">
        <label>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desired delivery time','mod'=>'cdek'),$_smarty_tpl ) );?>

        </label>
    </div>

    <div class="col-md-6 col-lg-3 clearfix">
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'cdek'),$_smarty_tpl ) );?>

        </div>
        <div>
            <input readonly type="text" value="0000-00-00" class="cdek_delivery_date form-control" >
        </div>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['time_option']->value) && $_smarty_tpl->tpl_vars['time_option']->value) {?>

        <div class="col-md-6 col-lg-3 clearfix">
            <div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time begin','mod'=>'cdek'),$_smarty_tpl ) );?>

            </div>
            <div class="clockpicker input-group time_begin_clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                <input type="text" class="cdek_delivery_time_begin form-control" >
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 clearfix">
            <div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time end','mod'=>'cdek'),$_smarty_tpl ) );?>

            </div>
            <div class="clockpicker input-group time_end_clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                <input type="text" class="cdek_delivery_time_end form-control" >
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>

    <?php }?>

</div>
<div class="alert alert-danger clearfix">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Has errors','mod'=>'cdek'),$_smarty_tpl ) );?>
: 1</p>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Changed wring time. Time changed.','mod'=>'cdek'),$_smarty_tpl ) );?>
</li>
    </ol>
</div><?php }
}
