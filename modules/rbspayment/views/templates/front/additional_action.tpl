
{if !$order_status}
    <a href="{$payment_link|escape:'quotes':'UTF-8'}?&id_order={$id_order|intval}" class="button">{l s='Оплатить' mod='rbspayment'}</a>
{/if}

{if $order_status == rbspayment::_PRE_AUTHORIZATION_ }
    <p>{l s='Conducted pre-authorised amount of the order' mod='rbspayment'}</p>
{/if}

{if $order_status == rbspayment::_AUTHORIZATION_ }
    <p>{l s='Authorise the amount of the order' mod='rbspayment'}</p>
{/if}

{if $order_status == rbspayment::_AUTHORIZATION_CANCELED_ }
    <p>{l s='Authorization cancelled' mod='rbspayment'}</p>
{/if}
{if $order_status == rbspayment::_ORDER_RETURN_ }
    <p>{l s='The transaction was carried out in operation' mod='rbspayment'}</p>
{/if}

{if $order_status == rbspayment::_ACS_INITIATED_AUTHORIZATION_THROUGH_THE_ISSUING_BANK_ }
    <p>{l s='Initiated the authorization through ACS of the issuing Bank' mod='rbspayment'}</p>
{/if}

{if $order_status == rbspayment::_AUTHORIZATION_FAILED_}
    <p>{l s='Authorization expired' mod='rbspayment'}</p>
    <a href="{$payment_link|escape:'quotes':'UTF-8'}?&id_order={$id_order|intval}" class="button">{l s='Повторить' mod='rbspayment'}</a>
{/if}




