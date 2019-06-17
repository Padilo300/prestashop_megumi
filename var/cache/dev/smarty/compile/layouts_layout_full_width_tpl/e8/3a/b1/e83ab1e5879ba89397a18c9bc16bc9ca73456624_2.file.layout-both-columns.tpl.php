<?php
/* Smarty version 3.1.33, created on 2019-06-17 05:36:03
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06fc93bcddf7_10220541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83ab1e5879ba89397a18c9bc16bc9ca73456624' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1560144037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/sliderHome.tpl' => 1,
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:_partials/abouUsHome.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5d06fc93bcddf7_10220541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20160274715d06fc93baf457_89469664', 'head');
?>

  </head>


  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753263165d06fc93bb1470_08761619', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14698101765d06fc93bb22a8_77442705', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3864067485d06fc93bb3197_16488161', 'header');
?>

        
      </header>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18289562795d06fc93bb4008_49199144', 'notifications');
?>


        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'mypage' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'aboutusa' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'delivery' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-seosashopreviews-review' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'my-account' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != '	module-revws-MyReviews') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13783856915d06fc93bb85b2_69076417', 'breadcrumb');
?>

        <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeSlider"),$_smarty_tpl ) );?>

    <?php }?>






        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12211698645d06fc93bbb3f9_53832007', 'sliderHome');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBrands'),$_smarty_tpl ) );?>

        <?php }?>
        <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'mypage' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'aboutusa' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'delivery' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-seosashopreviews-review') {?>
                 <div>
                <?php } else { ?>
                 <div class="container">
             <?php }?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>


        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13210817445d06fc93bc11f3_97580066', 'sliderHome');
?>

            <div class="row">
        <?php } else { ?>
            <div>
        <?php }?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12550624305d06fc93bc2708_98776899', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6253566855d06fc93bc4be2_80577607', "content_wrapper");
?>




                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9343886395d06fc93bc6797_70934539', "right_column");
?>


         </div>
        </div>
              </section>

        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20149106615d06fc93bc96a4_63291977', 'abouUsHome');
?>

        <?php }?>



        <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12937224285d06fc93bca990_94166440', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11538613465d06fc93bcba90_03946229', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13331498725d06fc93bccf30_79691606', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_20160274715d06fc93baf457_89469664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20160274715d06fc93baf457_89469664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_753263165d06fc93bb1470_08761619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_753263165d06fc93bb1470_08761619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_14698101765d06fc93bb22a8_77442705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_14698101765d06fc93bb22a8_77442705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_3864067485d06fc93bb3197_16488161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3864067485d06fc93bb3197_16488161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_18289562795d06fc93bb4008_49199144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_18289562795d06fc93bb4008_49199144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_13783856915d06fc93bb85b2_69076417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13783856915d06fc93bb85b2_69076417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'sliderHome'} */
class Block_12211698645d06fc93bbb3f9_53832007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sliderHome' => 
  array (
    0 => 'Block_12211698645d06fc93bbb3f9_53832007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/sliderHome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'sliderHome'} */
/* {block 'sliderHome'} */
class Block_13210817445d06fc93bc11f3_97580066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sliderHome' => 
  array (
    0 => 'Block_13210817445d06fc93bc11f3_97580066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'sliderHome'} */
/* {block "left_column"} */
class Block_12550624305d06fc93bc2708_98776899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_12550624305d06fc93bc2708_98776899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_4210727215d06fc93bc59d5_22381036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_6253566855d06fc93bc4be2_80577607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_6253566855d06fc93bc4be2_80577607',
  ),
  'content' => 
  array (
    0 => 'Block_4210727215d06fc93bc59d5_22381036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4210727215d06fc93bc59d5_22381036', "content", $this->tplIndex);
?>


            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_9343886395d06fc93bc6797_70934539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9343886395d06fc93bc6797_70934539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>

          <?php
}
}
/* {/block "right_column"} */
/* {block 'abouUsHome'} */
class Block_20149106615d06fc93bc96a4_63291977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'abouUsHome' => 
  array (
    0 => 'Block_20149106615d06fc93bc96a4_63291977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/abouUsHome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'abouUsHome'} */
/* {block "footer"} */
class Block_12937224285d06fc93bca990_94166440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12937224285d06fc93bca990_94166440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_11538613465d06fc93bcba90_03946229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_11538613465d06fc93bcba90_03946229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_13331498725d06fc93bccf30_79691606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_13331498725d06fc93bccf30_79691606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
