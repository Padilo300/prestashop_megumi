{*
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future.
*
*
*  @author FME Modules
*  @copyright  2007-2014 Unitedsol(Pvt.)
*  International Registered Trademark & Property of Unitedsol(Pvt.)
*}
<div class="hm_wrapper block">
	<h4>{$module_title}</h4>
	{if $cmt_data|@count >0 AND $nbComments != 0}
		<ul>
			{foreach from=$cmt_data item=myComment}			
				{if $myComment.validate == 1}
					<li id="hm_um_container_{$myComment.id_product}">			
						<div class="hm_content_header">
							<div class="hm_content_date"><span>{$myComment.customer_name}</span><span class="date">{dateFormat date=$myComment.date_add}</span></div>	<!-- /date product added-->
						</div>
						<div class="hm_content_middle">
							<div class="hm_content_middle_left">
							<a href="{$link->getProductLink($myComment)|escape:'html'}"><img src="{$link->getImageLink($myComment.link_rewrite,$myComment.id_image,'home_default')|escape:'html'}"></a>	<!-- /product image-->
							</div>
							<div class="hm_content_middle_right">
							<a href="{$link->getProductLink($myComment)|escape:'html'}"><h5>{$myComment.name}</h5></a>	<!-- /product name -->
								<div class="hm_content_star_middle_right" {if $allow_stars == 0}style="display:none;"{/if}>
									{section name="loop" start=0 loop=5 step=1}
										{if $myComment.grade le $smarty.section.loop.index}
											<div class="star"></div>
										{else}
											<div class="star star_on"></div>
										{/if}
									{/section}
								</div><!-- /stars -->
							</div>
							<div class="hm_content_footer">
								<div class="hm_content_star_footer_f"><p>{$myComment.content}</p></div>
							</div>
						</div>
					</li>
				{/if}
				{if $myComment@iteration == $nbComments}
					{break}
				{/if}
			{/foreach}
		</ul>			
	{else}
		<p>{l s='Currently there are no Comments.' mode='fmmhomecoments'}</p>
	{/if}

</div>
