<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:22:13
  from '/home/padilo00/padilo.pro/presta/themes/classic/modules/mib/views/templates/hook/mib.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d065ea553d803_23479111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1efdef06ab755d531e853f09f85e72f95909656' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/modules/mib/views/templates/hook/mib.tpl',
      1 => 1559318220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d065ea553d803_23479111 (Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="mg-main-brends">
    <div class="mg-main-brends__inner">
        <div class="container">
            <div class="mg-main-slider-brends">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, NULL, 'manufacturer_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']) {?>

                        <div>
                            <a class="mg-main-slider-brends__item" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']),'html' )), ENT_QUOTES, 'UTF-8');?>
 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl ) );?>
"">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/m/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                            </a>
                        </div>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
    <a class="mg-btn" href="#">Найти бренд</a>
</section>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $('.mg-main-slider-brends').slick({
            draggable: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="mg-icon icon-angle-left"></i></button>',
            nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="mg-icon icon-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    });
<?php echo '</script'; ?>
><?php }
}
