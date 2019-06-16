<?php
/* Smarty version 3.1.33, created on 2019-06-14 05:05:01
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0300cd451ee5_16973497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9689a400cb5e4b62fa10bd8d368290396137b50c' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/catalog/_partials/sort-orders.tpl',
      1 => 1559561923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0300cd451ee5_16973497 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="dropdown pa-sort">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Сортировать
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
?>
                <a
                        rel="nofollow"
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                        class="dropdown-item "
                >
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

                </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<style>
    .pa-sort.dropdown{
        position: absolute;
        right: 0;
        top: 0;
    }
    .pa-sort.dropdown  > a{
        width: 250px !important;
        background: transparent !important;
        color: #495057 !important;
        border-color: rgb(206, 212, 218) !important;
        height: 38px !important;

    }
    .pa-sort.dropdown  > .dropdown-menu{
        max-width: 250px !important;
        background: #fff !important;
        border: 1px solid rgb(206, 212, 218) !important;
    }
</style>





<?php }
}
