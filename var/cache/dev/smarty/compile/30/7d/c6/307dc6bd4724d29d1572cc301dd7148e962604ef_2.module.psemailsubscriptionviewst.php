<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:34:03
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc1ba904c0_56315703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1559089977,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06fc1ba904c0_56315703 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->

<section class="mg-subscriber mg-subscriber-main-page pt-5" style="width: 100%;">
  <div class="container">
    <div class="mg-sbmp-row">
      <div class="mg-sbmp-col">
        <h2>Подпишись на наши новости</h2>
        <p>Никакого спама...Честно. Только полезное и скидки</p>
        <form action="#" method="post">
          <fieldset class="mg-subscriber-form">
            <div class="row">
              <div class="col-lg-12"><input type="text" class="mg-input--border-bottom" placeholder="Имя" required /></div>
              <div class="col-lg-12"><input type="email" class="mg-input--border-bottom" placeholder="E-mail" required /></div>
              <div class="col-lg-12">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                  <label class="custom-control-label" for="customCheck1">Я согласен с политикой о предоставлении Конфиденциальных данных</label>
                </div>
              </div>
              <div class="col-lg-12">
                <button class="mg-btn mg-btn--black" type="submit">Подписаться</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="mg-sbmp-col"><img class="d-none d-xl-inline" src="http://presta.padilo.pro/themes/classic/assets/images/uploads/img-3.jpg" alt="" /></div>
    </div>
  </div>
</section>
<!-- end /home/padilo00/padilo.pro/presta/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
