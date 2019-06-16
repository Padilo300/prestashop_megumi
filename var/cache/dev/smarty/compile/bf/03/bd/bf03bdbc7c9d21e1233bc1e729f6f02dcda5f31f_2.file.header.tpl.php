<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:24:46
  from '/home/padilo00/padilo.pro/presta/modules/cdek/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065f3e514f36_83466081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf03bdbc7c9d21e1233bc1e729f6f02dcda5f31f' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/cdek/views/templates/hook/header.tpl',
      1 => 1558972318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./delivery_time.tpl' => 2,
  ),
),false)) {
function content_5d065f3e514f36_83466081 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    var cdek_carriers = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_carriers']->value ));?>
;
    var cdek_dir = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_dir']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var cdek_address_parameter = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cdek_address_parameter']->value), ENT_QUOTES, 'UTF-8');?>
;
    var hourText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'h','mod'=>'cdek'),$_smarty_tpl ) );?>
";
    var cdek_order_info = {
        date: "<?php if ($_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date && $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date != '0000-00-00') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date)),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>00-00-0000<?php }?>",
        time_begin: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_time_begin,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        time_end: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_time_end,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/html" id="cdek_address">
    <div class="cdek_address">
                                                                                                                                                                                                                    <?php $_smarty_tpl->_subTemplateRender("file:./delivery_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('time_option'=>true), 0, false);
?>
    </div>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/html" id="cdek_pvz_list">
    <div class="cdek_pvz_list">
        <div class="cdek_selected">
            %selected%
        </div>
        <div class="cdek_list">
            %list%
        </div>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/html" id="cdek_pvz_list_item">
    <div class="clearfix cdek_pvz_list_item parent %active%" data-delivery-point="%city%, %address%" data-code="%code%" daat>
        <div class="col-md-12 cdek_selected_wrap">
            <div class="cdek_item_address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'cdek'),$_smarty_tpl ) );?>
: %city%, %address%</div>
            <div class="cdek_item_phone"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','mod'=>'cdek'),$_smarty_tpl ) );?>
: %phone%</b></div>
            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Work time','mod'=>'cdek'),$_smarty_tpl ) );?>
:<br> %work_time%</div>
            <div class="click_for_select">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','mod'=>'cdek'),$_smarty_tpl ) );?>

            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:./delivery_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('time_option'=>true), 0, true);
?>
    </div>
<?php echo '</script'; ?>
><?php }
}
