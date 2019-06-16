
{capture name=path}
	<a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'htmlall':'UTF-8'}" title="{l s='Go back to the Checkout' mod='rbspayment'}">{l s='Checkout' mod='rbspayment'}</a><span class="navigation-pipe">{$navigationPipe|escape:'htmlall':'UTF-8'}</span>{l s='Payment by credit card' mod='rbspayment'}
{/capture}

<h1 class="page-heading">{l s='Ошибка оплаты заказа!' mod='rbspayment'}</h1>

<div class="box cheque-box">
    <p>
            {l s='Во время оплаты произошла ошибка, свяжитесь с менеджером магазина.' mod='rbspayment'}
    </p>

</div>
<p class="cart_navigation clearfix" id="cart_navigation">
    <a class="{if $presta15}button_large{else}button-exclusive btn btn-default{/if}" href="{$link->getPageLink('index')|escape:'htmlall':'UTF-8'}">
        <i class="icon-chevron-left"></i>{l s='Вернуться в магазинг' mod='rbspayment'}
    </a>
</p>
