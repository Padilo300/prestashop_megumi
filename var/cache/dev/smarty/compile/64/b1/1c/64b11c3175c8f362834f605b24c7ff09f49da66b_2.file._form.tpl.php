<?php
/* Smarty version 3.1.33, created on 2019-06-13 20:59:02
  from '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d028ee61c6796_38971216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b11c3175c8f362834f605b24c7ff09f49da66b' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/seosashopreviews/views/templates/hook/_form.tpl',
      1 => 1559575239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d028ee61c6796_38971216 (Smarty_Internal_Template $_smarty_tpl) {
if (SeosaShopReviews::canAddReview()) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['php_self']->value) && $_smarty_tpl->tpl_vars['php_self']->value == 'seosa-review') {?>
      <div class="block seosashopreviews <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook_type']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (SSRTools::isPs15()) {?> prestashop-1_5<?php }?>" <?php if (SSRTools::isPs15()) {?>id="idTab18022016"<?php }?>>
      <h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add reviews','mod'=>'seosashopreviews'),$_smarty_tpl ) );?>
</h4>
      <div class="block_content">
    <?php }?>
  <div class="shopreviews_form">

          <form method="post" action="
<?php if (isset($_smarty_tpl->tpl_vars['form_url']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form_url']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

<?php } else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vars_form']->value['form_url'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

       <?php }?>
" enctype="multipart/form-data">
      <fieldset class="mg-form">
        <div class="row">
          <div class="col-lg-6">
            <div class="mg-fieldset">
              <label for="inp1" class="mg-label">Ваше имя</label>
              <input type="text" class="mg-input" id="inp1" name="name">
            </div>
            <div class="mg-fieldset">
              <label for="inp4" class="mg-label">E-mail</label>
              <input type="email" class="mg-input" id="inp4" name="mail">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mg-fieldset">
              <label for="inp2" class="mg-label">Текст отзыва</label>
              <textarea name="text" rows="1" cols="1" class="mg-textarea" id="inp2" placeholder="Напишите ваши впечатления о нашем магазине"></textarea>
            </div>
          </div>
          <input type="hidden" name="rating" id="hui-osla">
          <div class="col-lg-12">
            <div class="mg-fieldset">
              <label for="inp2" class="mg-label">Поставьте оценку</label>
              <div class="mg-main-customers__item-rating mg-main-customers__item-rating--active" id="pa-rating">
                <i class="pa-rating" data-val="1"></i>
                <i class="pa-rating" data-val="2"></i>
                <i class="pa-rating" data-val="3"></i>
                <i class="pa-rating" data-val="4"></i>
                <i class="pa-rating" data-val="5"></i>
              </div>
            </div>
            <div class="mg-fieldset">
              <button type="submit" class="mg-btn mg-btn--black w-100 w-lg-auto">Отправить</button>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
    <?php if (isset($_smarty_tpl->tpl_vars['php_self']->value) && $_smarty_tpl->tpl_vars['php_self']->value == 'seosa-review') {?>
      </div>
      </div>
    <?php }
}
}
}
