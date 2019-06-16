<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/product_tab_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f4333f3_93730178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcbb8af30ad9168abe076176fe7b77d54f3291e' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/hook/product_tab_content.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/hook/widget.tpl' => 1,
  ),
),false)) {
function content_5ced5a9f4333f3_93730178 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="idTabRevws">
  <?php if ($_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['microdata'] && $_smarty_tpl->tpl_vars['reviewCount']->value > 0 && $_smarty_tpl->tpl_vars['avgGrade']->value > 0) {?>
  <div class="revws-hidden" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
    Rated <span itemprop="ratingValue"><?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['avgGrade']->value), ENT_QUOTES, 'UTF-8');?>
</span> on the scale <span itemProp="worstRating">1</span> - <span itemprop="bestRating">5</span> based on <span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewCount']->value, ENT_QUOTES, 'UTF-8');?>
</span> customer reviews
  </div>
  <?php }?>
  <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/hook/widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget'=>$_smarty_tpl->tpl_vars['widget']->value,'reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value), 0, false);
?>
</div>
<?php }
}
