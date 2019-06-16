
{if $status == 'ok'}
<p>{l s='Your order on %s is complete.' sprintf=$shop_name mod='rbspayment'}
		<br /><br />
		{l s='Please send us a bank wire with:' mod='rbspayment'}
		<br /><br />- {l s='an amount of' mod='rbspayment'} <span class="price"> <strong>{$total_to_pay|escape:'quotes':'UTF-8'}</strong></span>
		<br /><br />- {l s='to the account owner of' mod='rbspayment'}  <strong>{if $bankwireOwner}{$bankwireOwner|escape:'quotes':'UTF-8'}{else}___________{/if}</strong>
		<br /><br />- {l s='with these details' mod='rbspayment'}  <strong>{if $bankwireDetails}{$bankwireDetails|escape:'quotes':'UTF-8'}{else}___________{/if}</strong>
		<br /><br />- {l s='to this bank' mod='rbspayment'}  <strong>{if $bankwireAddress}{$bankwireAddress|escape:'quotes':'UTF-8'}{else}___________{/if}</strong>
		{if !isset($reference)}
			<br /><br />- {l s='Do not forget to insert your order number #%d in the subject of your bank wire' sprintf=$id_order mod='rbspayment'}
		{else}
			<br /><br />- {l s='Do not forget to insert your order reference %s in the subject of your bank wire.' sprintf=$reference mod='rbspayment'}
		{/if}		<br /><br />{l s='An e-mail has been sent to you with this information.' mod='rbspayment'}
		<br /><br /> <strong>{l s='Your order will be sent as soon as we receive your settlement.' mod='rbspayment'}</strong>
		<br /><br />{l s='For any questions or for further information, please contact our' mod='rbspayment'} <a href="{$link->getPageLink('contact', true)|escape:'quotes':'UTF-8'}">{l s='customer support' mod='rbspayment'}</a>.
	</p>
{else}
	<p class="warning">
		{l s='We noticed a problem with your order. If you think this is an error, you can contact our' mod='rbspayment'}
		<a href="{$link->getPageLink('contact', true)|escape:'quotes':'UTF-8'}">{l s='customer support' mod='rbspayment'}</a>.
	</p>
{/if}
