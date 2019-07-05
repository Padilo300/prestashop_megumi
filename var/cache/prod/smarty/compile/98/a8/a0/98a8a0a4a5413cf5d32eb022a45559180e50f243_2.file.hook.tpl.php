<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:56:12
  from '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/hook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1f2cccd79488_43487408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a8a0a4a5413cf5d32eb022a45559180e50f243' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/hook.tpl',
      1 => 1559377812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_reviews.tpl' => 1,
  ),
),false)) {
function content_5d1f2cccd79488_43487408 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="mg-main-customers">
    <div class="container">
        <h2>Наши покупатели</h2>
        <div class="mg-main-slider-customers" id="1231234142134">

            <?php if ($_smarty_tpl->tpl_vars['reviews']->value->count()) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:./_reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
        <a class="mg-btn" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['show_all_link']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all reviews','mod'=>'seosashopreviews'),$_smarty_tpl ) );?>

        </a>
    </div>
</section>



<style>
    .mg-main-customers__item{
        display: flex !important;
        flex-direction: column;
        justify-content: space-between;
        height: 339px;
    }
</style>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $('#1231234142134').slick({
            arrows: false,
            dots: true,
            draggable: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            adaptiveHeight: true,
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
<?php }
}
