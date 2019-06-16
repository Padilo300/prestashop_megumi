{capture name=path}{l s='Оплата картой банка' mod='rbspayment'}{/capture}

<h1 class="page-heading">{l s='Описание заказа' mod='rbspayment'}</h1>

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if $nbProducts <= 0}
	<p class="alert alert-warning">{l s='Ваша корзина пуста.' mod='rbspayment'}</p>
{else}
	<form action="{$link->getModuleLink('rbspayment', 'validation')|escape:'quotes':'UTF-8'}" method="post">
		<div class="box cheque-box">
			<h3 class="page-subheading">{l s='Оплата картой банка' mod='rbspayment'}</h3>
			<p class="cheque-indent">
				<img src="{$this_path|escape:'quotes':'UTF-8'}views/img/rbs-credit-card-icon.png" alt="{l s='Оплата картой банка' mod='rbspayment'}" width="64" height="64" style="float:left; margin: 10px 10px 5px 0px;" />
				<br />
				<strong class="dark">
					{l s='Вы выбрали способ оплаты (Оплата картой банка).' mod='rbspayment'}
					<br/>
					{l s='Краткое описание вашего заказа:' mod='rbspayment'}
				</strong>
			</p>

			<p style="margin-top:20px;">
				- {l s='Общая стоимость вашего заказа составляет' mod='rbspayment'}
				<span id="amount" class="price">{displayPrice price=$total}</span>
				{if $use_taxes == 1}
					{l s='(включая налоги.)' mod='rbspayment'}
				{/if}
			</p>
			<p>
				-
				{if $currencies|@count > 1}
					{l s='Мы принимаем несколько валют.' mod='rbspayment'}
					<br /><br />
					{l s='Выберите необходимую валюту:' mod='rbspayment'}
					<select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
						{foreach from=$currencies item=currency}
							<option value="{$currency.id_currency|intval}" {if $currency.id_currency == $cust_currency}selected="selected"{/if}>{$currency.name|escape:'quotes':'UTF-8'}</option>
						{/foreach}
					</select>
				{else}
					{l s='Мы принимаем следующую валюту:' mod='rbspayment'}&nbsp;<b>{$currencies.0.name|escape:'quotes':'UTF-8'}</b>
					<input type="hidden" name="currency_payement" value="{$currencies.0.id_currency|escape:'quotes':'UTF-8'}" />
				{/if}
			</p>
			<p>
				{l s='Для оплаты покупки Вы будете перенаправлены на платежный шлюз банка для ввода реквизитов карты.' mod='rbspayment'}
				<br /><br />
				<strong>{l s='Подтвердите ваш заказ, нажав на кнопку - \'Оплатить\'' mod='rbspayment'}.</strong>
			</p>
		</div>
		<p class="cart_navigation clearfix" id="cart_navigation">
			<a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'html':'UTF-8'}" class="button-exclusive btn btn-default">
				<i class="icon-chevron-left"></i>{l s='Другие способы оплаты' mod='rbspayment'}
			</a>
			<button type="submit" class="button btn btn-default button-medium">
				<span>{l s='Оплатить' mod='rbspayment'}<i class="icon-chevron-right right"></i></span>
			</button>
		</p>
	</form>
{/if}
