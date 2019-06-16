<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:58:23
  from '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/review-list/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5a9f52ff27_78061583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '501dac5a57dc56c7bb5631f5b070597b7b360488' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/modules/revws/views/templates/widgets/review-list/item.tpl',
      1 => 1559058417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/helpers/grading.tpl' => 3,
  ),
),false)) {
function content_5ced5a9f52ff27_78061583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/padilo00/padilo.pro/presta/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('showCriteria', count($_smarty_tpl->tpl_vars['review']->value['grades']) > 1);?>
<div class="revws-review <?php if ($_smarty_tpl->tpl_vars['review']->value['underReview']) {?>revws-review-under-review <?php }
if ($_smarty_tpl->tpl_vars['review']->value['verifiedBuyer']) {?>revws-verified-buyer <?php }?>" <?php if ($_smarty_tpl->tpl_vars['microdata']->value) {?>itemprop="review" itemscope itemtype="http://schema.org/Review"<?php }?>><div class="revws-review-author"><div class="revws-review-author-name" <?php if ($_smarty_tpl->tpl_vars['microdata']->value) {?>itemprop="author"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['displayName'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['review']->value['verifiedBuyer']) {?><div class="revws-verified-buyer-badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Verified purchase",'mod'=>'revws'),$_smarty_tpl ) );?>
</div><?php }
if (count($_smarty_tpl->tpl_vars['review']->value['grades']) > 0) {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/helpers/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['review']->value['grade'],'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'product'), 0, false);
if ($_smarty_tpl->tpl_vars['microdata']->value) {?><div class="revws-hidden" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><meta itemprop="worstRating" content="1"><meta itemprop="ratingValue" content="<?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['review']->value['grade']), ENT_QUOTES, 'UTF-8');?>
"><meta itemprop="bestRating" content="5"></div><?php }
}?><div class="revws-review-date" <?php if ($_smarty_tpl->tpl_vars['microdata']->value) {?>itemprop="datePublished" content="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['date'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['date'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
</div></div><div class="revws-review-details"><div class="revws-review-review"><div class="revws-review-box"><?php if ($_smarty_tpl->tpl_vars['showCriteria']->value && $_smarty_tpl->tpl_vars['displayCriteria']->value === 'inline') {?><div class="revws-review-criteria revws-review-criteria-inline"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['grades'], 'critValue', false, 'critKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['critKey']->value => $_smarty_tpl->tpl_vars['critValue']->value) {
if (isset($_smarty_tpl->tpl_vars['criteria']->value[$_smarty_tpl->tpl_vars['critKey']->value])) {?><div class='revws-review-criterion'><span class='revws-criterion-label'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value[$_smarty_tpl->tpl_vars['critKey']->value]['label'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/helpers/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['critValue']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'criterion'), 0, true);
?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><p class="revws-review-title" <?php if ($_smarty_tpl->tpl_vars['microdata']->value) {?>itemprop="name"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['linkToProduct']->value) && $_smarty_tpl->tpl_vars['linkToProduct']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkToProduct']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');
}?></p><?php if ($_smarty_tpl->tpl_vars['review']->value['underReview']) {?><div class="revws-under-review"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This review hasn't been approved yet",'mod'=>'revws'),$_smarty_tpl ) );?>
</div><?php }?><p class="revws-review-content" <?php if ($_smarty_tpl->tpl_vars['microdata']->value) {?>itemprop="description"<?php }?>><?php echo htmlspecialchars(nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['content'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</p></div><?php if ($_smarty_tpl->tpl_vars['showCriteria']->value && $_smarty_tpl->tpl_vars['displayCriteria']->value === 'side') {?><div class="revws-review-criteria revws-review-criteria-block"><table><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['grades'], 'critValue', false, 'critKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['critKey']->value => $_smarty_tpl->tpl_vars['critValue']->value) {
if (isset($_smarty_tpl->tpl_vars['criteria']->value[$_smarty_tpl->tpl_vars['critKey']->value])) {?><tr><td class="revws-criterion-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value[$_smarty_tpl->tpl_vars['critKey']->value]['label'], ENT_QUOTES, 'UTF-8');?>
</td><td class="revws-criterion-value"><?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/helpers/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['critValue']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'criterion'), 0, true);
?></td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['review']->value['images']) {?><div class="revws-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="revws-image"><img src="<?php echo htmlspecialchars(str_replace(".jpg",".thumb.jpg",$_smarty_tpl->tpl_vars['image']->value), ENT_QUOTES, 'UTF-8');?>
" /></div></a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><div class="revws-actions"><?php if ($_smarty_tpl->tpl_vars['review']->value['canVote']) {?><div class="revws-action revws-useful"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this comment useful to you?','mod'=>'revws'),$_smarty_tpl ) );?>
<a class="btn btn-xs btn-link"><i class="icon icon-thumbs-up"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'revws'),$_smarty_tpl ) );?>
</a><a class="btn btn-xs btn-link"><i class="icon icon-thumbs-down"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['review']->value['canReport']) {?><div class="revws-action revws-report"><a class="btn btn-xs btn-link"><i class="icon icon-flag"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['review']->value['canEdit']) {?><div class="revws-action revws-edit"><a class="btn btn-xs btn-link"><i class="icon icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['review']->value['canDelete']) {?><div class="revws-action revws-delete"><a class="btn btn-xs btn-link"><i class="icon icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }?></div><?php if (isset($_smarty_tpl->tpl_vars['shopName']->value) && $_smarty_tpl->tpl_vars['review']->value['reply']) {?><div class="revws-replies"><div class="revws-reply"><div class="revws-reply-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply from %s:','sprintf'=>array($_smarty_tpl->tpl_vars['shopName']->value),'mod'=>'revws'),$_smarty_tpl ) );?>
</div><div class="revws-reply-content"><?php echo htmlspecialchars(nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['reply'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</div></div></div><?php }?></div></div>
<?php }
}
