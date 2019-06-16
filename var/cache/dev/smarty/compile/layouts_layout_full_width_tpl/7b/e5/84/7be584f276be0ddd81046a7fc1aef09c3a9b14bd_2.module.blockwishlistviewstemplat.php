<?php
/* Smarty version 3.1.33, created on 2019-06-12 14:33:45
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d00e31923f207_57479718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7be584f276be0ddd81046a7fc1aef09c3a9b14bd' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1560141467,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d00e31923f207_57479718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/padilo00/padilo.pro/presta/modules/blockwishlist/views/templates/front/mywishlist.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3999209145d00e3191cece8_11438558', 'breadcrumb_item');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4895406115d00e3191d22a9_50095496', "content");
?>
<!-- end /home/padilo00/padilo.pro/presta/modules/blockwishlist/views/templates/front/mywishlist.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layout']->value));
}
/* {block 'breadcrumb_item'} */
class Block_3999209145d00e3191cece8_11438558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb_item' => 
  array (
    0 => 'Block_3999209145d00e3191cece8_11438558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  	    	  	
<?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block "content"} */
class Block_4895406115d00e3191d22a9_50095496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4895406115d00e3191d22a9_50095496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/padilo00/padilo.pro/presta/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	<div class="">
		<span class="mg-profile__title" id="customer_name"></span>
		<div class="mg-profile__menu">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>

			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>

			<a class="active" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
			<a href="/module/blockwishlist/mywishlist">Избранное</a>
			<a href="reviews/my-reviews"> Вопросы и ответы</a>
		</div>
	</div>
<!--front/mywishlist.tpl-->
<div id="main">
				
	<div id="mywishlist">
		<?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && $_smarty_tpl->tpl_vars['errors']->value) {?>
			<div class="alert alert-danger" role="alert">
				<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
?>
						<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			</div>
		<?php }?>

		<?php if (intval($_smarty_tpl->tpl_vars['id_customer']->value) != 0) {?>
																																																																		                    	                    		                    															<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
				<div id="block-history" class="block-center">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Direct Link','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
								<th class="last_item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							</tr>
						</thead>
						<tbody>
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wishlists']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<tr id="wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
">
									<td style="width:200px;">
										<a href="#" onclick="javascript:event.preventDefault();WishlistManage('block-order-detail', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
');">
											<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'],30,'...' )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

										</a>
									</td>
									<td class="bold align_center">
										<?php $_smarty_tpl->_assignInScope('n', 0);?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nbProducts']->value, 'nb', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['nb']->value['id_wishlist'] == $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']) {?>
												<?php $_smarty_tpl->_assignInScope('n', intval($_smarty_tpl->tpl_vars['nb']->value['nbProducts']));?>
											<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
											<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['n']->value), ENT_QUOTES, 'UTF-8');?>

										<?php } else { ?>
											0
										<?php }?>
									</td>
									<td><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['counter']), ENT_QUOTES, 'UTF-8');?>
</td>
									<td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date_add'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>
</td>
									<td>
										<a href="#" onclick="javascript:event.preventDefault();WishlistManage('block-order-detail', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
');">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

										</a>
									</td>
									<td class="wishlist_default">
										<?php if ((($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'] !== null )) && $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'] == 1) {?>
											<p class="is_wish_list_default">
												<i class="material-icons">check_box</i>
											</p>
										<?php } else { ?>
											<a href="#" onclick="javascript:event.preventDefault();(WishlistDefault('wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
'));">
												<i class="material-icons">check_box_outline_blank</i>
											</a>
										<?php }?>
									</td>
									<td class="wishlist_delete">
										<a class="icon" href="#" onclick="javascript:event.preventDefault();return (WishlistDelete('wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this wishlist ?','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
'));">
											<i class="material-icons">clear</i>
										</a>
									</td>
								</tr>
							<?php
}
}
?>
						</tbody>
					</table>
				</div>
				<div id="block-order-detail">&nbsp;</div>
				<?php } else { ?>
				<div class="mg-favorite__none-text">
					<p><strong>Сейчас у вас нет товаров в Избранном</strong></p>
					<p>Чтобы добавить понравившийся товар в «Избранное» нужно нажать <i class="mg-icon icon-heart"></i> рядом с ним. Список понравившихся товаров всегда хранится в разделе «Избранное».</p>
				</div>
			<?php }?>
		<?php }?>
	</div>
</div>
<!-- End front/mywishlist.tpl -->
<?php
}
}
/* {/block "content"} */
}
