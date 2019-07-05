<?php
/* Smarty version 3.1.33, created on 2019-06-27 06:49:31
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/aboutusa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d143ccbe77ca1_92786245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760317be68704037f95eea8bf29e21edd6d4e5c7' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/aboutusa.tpl',
      1 => 1559567908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d143ccbe77ca1_92786245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14200069375d143ccbe6cab3_78333243', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-custom.tpl');
}
/* {block 'page_title'} */
class Block_19074021135d143ccbe6e2d8_87677154 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <header class="page-header">
                    <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
                </header>
            <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_11536949805d143ccbe6d639_71368195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19074021135d143ccbe6e2d8_87677154', 'page_title', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14136291275d143ccbe72cc4_13299426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19157434945d143ccbe73aa0_38475665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="mg-banner mg-about-banner">
                    <section class="mg-crumbs mg-crumbs--banner">
                        <div class="container">
                            <a href="/">Главная</a>
                            <span>О компании</span>
                        </div>
                    </section>
                    <div class="container d-flex align-items-center"><div class="mg-faq-title"><b>about</b> megumi</div></div>
                </section>
                <section class="mg-about-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-7">
                                <span class="mg-faq-name">О нас</span>
                                <p>В наших магазинах представлены более десяти тысяч товаров лидеров в области парфюмерии и косметики: Dior, Guerlain, Givenchy, Kenzo, YSL, DG, Clarinsи многие другие. Компания является эксклюзивным продавцом парфюмерии Lulu Castagnette, испанской марки LOEWE, ароматов Banana Republic и многих других продуктов, которые мы выбираем из всего многообразия специально для Вас.</p>
                                <p>Прекрасный дизайн, безупречный узнаваемый стиль, грамотность и вежливость продавцов-консультантов и, конечно же, богатый ассортимент продукции и гибкая система скидок, единые для всей сети, сделали ее популярной среди многочисленных клиентов. На сегодняшний день их миллионы, и количество постоянных покупателей неуклонно растет.</p>
                                <p>Хранение и транспортировка продукции осуществляется в соответствии с требованиями ГОСТ и нормативами государственных органов и производителей.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mg-subscriber mg-subscriber--company">
                    <div class="container">
                        <span class="mg-title">Получите доступ к нашим акциям и новостям</span>
                        <form action="#" method="post">
                            <fieldset class="mg-subscriber-form">
                                <div class="row">
                                    <div class="col-lg-4"><input type="text" class="mg-input--border-bottom mg-input--border-bottom-white" placeholder="Имя" required /></div>
                                    <div class="col-lg-4"><input type="email" class="mg-input--border-bottom" placeholder="E-mail" required /></div>
                                    <div class="col-lg-4">
                                        <div class="pl-0 pl-lg-5">
                                            <button class="mg-btn mg-btn--black" type="submit">Подписаться</button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                <label class="custom-control-label" for="customCheck1">Я согласен с политикой о предоставлении Конфиденциальных данных</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'cus'} */
class Block_12279840955d143ccbe71cd6_75990697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14136291275d143ccbe72cc4_13299426', 'page_content_top', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157434945d143ccbe73aa0_38475665', 'page_content', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'cus'} */
/* {block 'page_footer'} */
class Block_14753470865d143ccbe76511_42248336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19080766275d143ccbe75840_44231572 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14753470865d143ccbe76511_42248336', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14200069375d143ccbe6cab3_78333243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14200069375d143ccbe6cab3_78333243',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11536949805d143ccbe6d639_71368195',
  ),
  'page_title' => 
  array (
    0 => 'Block_19074021135d143ccbe6e2d8_87677154',
  ),
  'cus' => 
  array (
    0 => 'Block_12279840955d143ccbe71cd6_75990697',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14136291275d143ccbe72cc4_13299426',
  ),
  'page_content' => 
  array (
    0 => 'Block_19157434945d143ccbe73aa0_38475665',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19080766275d143ccbe75840_44231572',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14753470865d143ccbe76511_42248336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="mayhin">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11536949805d143ccbe6d639_71368195', 'page_header_container', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12279840955d143ccbe71cd6_75990697', 'cus', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19080766275d143ccbe75840_44231572', 'page_footer_container', $this->tplIndex);
?>


    </section>

<?php
}
}
/* {/block 'content'} */
}
