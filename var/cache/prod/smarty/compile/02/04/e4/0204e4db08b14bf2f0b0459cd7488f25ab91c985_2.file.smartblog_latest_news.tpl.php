<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:56:12
  from '/home/padilo00/padilo.pro/presta/themes/classic/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1f2cccdfe208_59317249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0204e4db08b14bf2f0b0459cd7488f25ab91c985' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1559397792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1f2cccdfe208_59317249 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="mg-main-blog">
    <div class="container">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Последнее из блога','mod'=>'smartblog'),$_smarty_tpl ) );?>
</h2>
        <div class="row" id="my-shuffle">

            <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value) && !empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('img_url', $_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id'],''));?>

                    <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
                        <div class="col-md-6 col-lg-6 col-xl-3 box">
                        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 2) {?>
                            <div class="col-md-6 col-lg-6 col-xl-5 box">
                        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 3) {?>
                            <div class="col-md-6 col-lg-6 col-xl-4 box">
                        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 4) {?>
                            <div class="col-md-6 col-lg-6 col-xl-5 box">
                        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 5) {?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php }?>
                                <?php $_smarty_tpl->_assignInScope('i', ($_smarty_tpl->tpl_vars['i']->value+1));?>

                        <div class="mg-main-blog__item">
                            <div class="mg-image">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                <span class="mg-title"><?php echo htmlspecialchars(SmartBlogPost::subStr($_smarty_tpl->tpl_vars['post']->value['title'],60), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                            <span class="mg-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['date_added'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <p>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['short_description'], ENT_QUOTES, 'UTF-8');?>

                            </p>
                            <a class="mg-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><b>Читать далее</b></a>
                        </div>
                    </div>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <div class="col-1 my-sizer-element"></div>
        </div>
        <a class="mg-btn" href="index.php?fc=module&module=smartblog&controller=category&id_lang=1">Перейти в блог</a>
    </div>
</section>


<?php }
}
