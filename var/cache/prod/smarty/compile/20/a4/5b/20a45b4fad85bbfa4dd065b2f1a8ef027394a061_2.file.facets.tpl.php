<?php
/* Smarty version 3.1.33, created on 2019-07-05 05:38:08
  from '/home/padilo00/padilo.pro/presta/themes/classic/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1eb8100cfa63_70906997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a45b4fad85bbfa4dd065b2f1a8ef027394a061' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl',
      1 => 1559689485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1eb8100cfa63_70906997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>





<?php if (0) {?>
<div class="d-none d-xl-block" id="search_filters">

    <a class="mg-catalog-refresh js-search-filters-clear-all"  id="_desktop_search_filters_clear_all" data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" style="cursor: pointer;">
        <i class="mg-icon"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Сбросить фильтры','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </a>

    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title">
            <a>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
        </div>
    </div>

    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title mg-catalog-filter__item-title--active"><a href="#">Кожа и тело</a></div>
        <div class="mg-catalog-filter__item-list">
            <div class="mg-catalog-filter__item-list-title mg-catalog-filter__item-list-title--active"><a href="#">Уход за кожей лица</a></div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>

                <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                <?php $_smarty_tpl->_assignInScope('_collapse', true);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        <?php $_smarty_tpl->_assignInScope('_collapse', false);?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php if ($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['type'] != 'manufacturer') {?>
                    <?php continue 1;?>
                <?php }?>

                <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('checkbox'))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65244095d1eb81008a766_86635915', 'facet_item_other-2');
?>

                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="mg-catalog-filter__item-list-title"><a href="#">Уход за телом</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Солнечная линия</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Для детей</a></div>
            <div class="mg-catalog-filter__item-list-title"><a href="#">Идеи для подарков</a></div>
        </div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">волосы</a></div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">ногти</a></div>
    </div>
    <div class="mg-catalog-filter__item">
        <div class="mg-catalog-filter__item-title"><a href="#">Аксессуары</a></div>
    </div>
    <hr class="mb-4">
    <div class="mg-catalog-filter__brands">
        <div class="mg-catalog-filter__brands-form">
            <form action="#" method="post">
                <fieldset>
                    <input type="text" class="mg-input" placeholder="Название бренда" />
                    <button class="mg-btn" type="submit"><i class="mg-icon icon-search"></i></button>
                </fieldset>
            </form>
        </div>
        <div class="mg-catalog-filter__brands-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>

                <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                <?php $_smarty_tpl->_assignInScope('_collapse', true);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        <?php $_smarty_tpl->_assignInScope('_collapse', false);?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php if ($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['type'] != 'manufacturer') {?>
                    <?php continue 1;?>
                <?php }?>

                <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('checkbox'))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6397740375d1eb81009d2a5_07274555', 'facet_item_other-2');
?>

                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
    </div>
    <hr class="my-4">
    <div class="mg-diff">
        <label>ЦЕНА</label>
        <div class="range_inputs" id="slide_build_price">
            <div class="row">
                <div class="col-xl-12 mt-2 mb-4"><div class="range range_build_price"></div></div>
                <div class="col-xl-5"><input class="before mg-input text-center" type="text" placeholder="0 ₽"/></div>
                <div class="col-xl-2">&nbsp;</div>
                <div class="col-xl-5"><input class="after mg-input text-center" type="text" placeholder="1000 ₽"/></div>
            </div>
        </div>
    </div>
    <div class="mg-catalog-filter__more-box">
        <h3>вы недавно смотрели</h3>
        <div class="mg-catalog-filter__more-list">
            <div class="mg-product-cart__wrapper">
                <img class="mg-product-cart__image" src="images/uploads/img-4.jpg" alt="" />
                <span class="mg-product-cart__name">kiehl’s</span>
                <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                <span class="mg-product-cart__price">3890<i class="mg-ruble">₽</i></span>
                <div class="mg-product-cart__btns">
                    <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                    <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                </div>
            </div>
            <div class="mg-product-cart__wrapper">
                <img class="mg-product-cart__image" src="images/uploads/img-4.jpg" alt="" />
                <span class="mg-product-cart__name">kiehl’s</span>
                <p class="mg-product-cart__desc">Средство против прыщей Acence Blemish Out Pink Spot 30мл</p>
                <span class="mg-product-cart__price">3890<i class="mg-ruble">₽</i></span>
                <div class="mg-product-cart__btns">
                    <a class="mg-btn mg-btn--transparent mg-product-cart__btn--like" href="#"><i class="mg-icon icon-heart"></i></a>
                    <a class="mg-btn mg-btn--black mg-product-cart__btn--buy" href="#">Купить</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>


<?php if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
    <div id="search_filters">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15152047555d1eb8100a6281_02909449', 'facets_clearall_button');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4660139325d1eb8100a8012_42559394', 'facets_title');
?>



        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentTop'),$_smarty_tpl ) );?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
            <section class="facet clearfix">
                <p class="h6 facet-title hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>

                <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                <?php $_smarty_tpl->_assignInScope('_collapse', true);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        <?php $_smarty_tpl->_assignInScope('_collapse', false);?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20913580805d1eb8100aecd8_62657132', 'facet_item_other');
?>


                <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5286086875d1eb8100bde79_62304229', 'facet_item_dropdown');
?>


                <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11111814215d1eb8100c8946_84442837', 'facet_item_slider');
?>

                <?php }?>
            </section>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
/* {block 'facet_item_other-2'} */
class Block_65244095d1eb81008a766_86635915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other-2' => 
  array (
    0 => 'Block_65244095d1eb81008a766_86635915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="mg-catalog-filter__item-list-box" id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                                    <?php continue 1;?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                                    <div class="custom-control custom-checkbox">
                                            <input
                                                id="p-facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                type="checkbox"
                                                class="custom-control-input"
                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                            >
                                            <label class="custom-control-label" for="p-facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <a
                                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                        class="search-link js-search-link"
                                                        rel="nofollow"
                                                >
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                        <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                                    <?php }?>
                                                </a>
                                            </label>
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
}
}
/* {/block 'facet_item_other-2'} */
/* {block 'facet_item_other-2'} */
class Block_6397740375d1eb81009d2a5_07274555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other-2' => 
  array (
    0 => 'Block_6397740375d1eb81009d2a5_07274555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="mg-catalog-filter__item-list-box" id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                                    <?php continue 1;?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                                    <div class="custom-control custom-checkbox">
                                        <input
                                                id="p-facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                type="checkbox"
                                                class="custom-control-input"
                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                        >
                                        <label class="custom-control-label" for="p-facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <a
                                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                    class="search-link js-search-link"
                                                    rel="nofollow"
                                            >
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                    <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                                <?php }?>
                                            </a>
                                        </label>
                                    </div>


                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
}
}
/* {/block 'facet_item_other-2'} */
/* {block 'facets_clearall_button'} */
class Block_15152047555d1eb8100a6281_02909449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_15152047555d1eb8100a6281_02909449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
                <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
                    <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
                        <i class="material-icons">&#xE14C;</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </button>
                </div>
            <?php }?>
        <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facets_title'} */
class Block_4660139325d1eb8100a8012_42559394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_4660139325d1eb8100a8012_42559394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facet_item_other'} */
class Block_20913580805d1eb8100aecd8_62657132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_20913580805d1eb8100aecd8_62657132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                                    <?php continue 1;?>
                                <?php }?>

                                <li>
                                    <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                                            <span class="custom-checkbox">
                                                <input
                                                        id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                        data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                        type="checkbox"
                                                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                                >
                                                <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                                                    <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                                                <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                                  <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                                                <?php } else { ?>
                                                  <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                                <?php }?>
                                            </span>
                                        <?php } else { ?>
                                            <span class="custom-radio">
                                                <input
                                                        id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                        data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                        type="radio"
                                                        name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                                                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                                >
                                                <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                                            </span>
                                        <?php }?>

                                            <a
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                class="_gray-darker search-link js-search-link"
                                                rel="nofollow"
                                            >
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                            <?php }?>
                                            </a>
                                    </label>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_5286086875d1eb8100bde79_62304229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_5286086875d1eb8100bde79_62304229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                            <li>
                                <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                                        <span>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                  (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                              <?php }?>
                              <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                                            <?php }?>
                    </span>
                                        <i class="material-icons float-xs-right">&#xE5C5;</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                            <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                                                <a
                                                        rel="nofollow"
                                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                        class="select-list"
                                                >
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                                                    <?php }?>
                                                </a>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_11111814215d1eb8100c8946_84442837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_11111814215d1eb8100c8946_84442837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                            <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="faceted-slider"
                                data-slider-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-values="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-unit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-specifications="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
                                data-slider-encoded-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <li>
                                    <p id="facet_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                    </p>

                                    <div id="slider-range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                                </li>
                            </ul>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'facet_item_slider'} */
}
