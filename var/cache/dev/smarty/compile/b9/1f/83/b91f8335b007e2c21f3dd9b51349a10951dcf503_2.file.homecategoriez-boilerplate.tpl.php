<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:01
  from '/home/padilo00/padilo.pro/presta/themes/classic/modules/homecategoriez/views/templates/homecategoriez-boilerplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc1961f136_27807551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91f8335b007e2c21f3dd9b51349a10951dcf503' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/modules/homecategoriez/views/templates/homecategoriez-boilerplate.tpl',
      1 => 1559380150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc1961f136_27807551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE homecategoriez -->

<section class="mg-main-category">
    <div class="container">
        <div class="mg-main-slider-category">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'homeCategory', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite));?>
                <?php $_smarty_tpl->_assignInScope('imageLink', $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['pic_size_type']->value));?>
                <div>
                    <div class="mg-main-category__item">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryLink']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if (intval($_smarty_tpl->tpl_vars['category']->value->id_image) > 0) {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageLink']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                            <?php } else { ?>
                                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['img_cat_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image','mod'=>'homecategoriez'),$_smarty_tpl ) );?>
"  alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                            <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,42,'...' )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </div>
                </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
</section>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $('.mg-main-slider-category').slick({
            arrows: false,
            dots: true,
            draggable: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
<?php echo '</script'; ?>
>




<!-- /MODULE homecategoriez -->


<?php }
}
