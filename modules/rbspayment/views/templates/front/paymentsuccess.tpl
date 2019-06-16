{*extends file='page.tpl'*}

{block name="content_wrapper"}

        {block name="content"}
            <h1 class="page-heading">{l s='Ваш заказ успешно оплачен' mod='rbspayment'}</h1>
            <div class="box cheque-box">
                <p style="margin-top: 20px">
                    {l s='Спасибо! Ваш заказ успешно оплачен' mod='rbspayment'}
                </p>
                {if isset($order_reference) && !empty($order_reference)}
                    <p style="margin-top: 20px">
                        {l s='Вы можете посмотреть детали вашего заказа в разделе ' mod='rbspayment'} <a
                                href="{$link->getPageLink('history')|escape:'htmlall':'UTF-8'}"> -
                            "{l s='Мои Заказы' mod='rbspayment'}"</a>

                    </p>
                    <p style="margin-top: 20px">
                        {l s='Уникальный КОД вашего заказа: ' mod='rbspayment'} {$order_reference|escape:'htmlall':'UTF-8'}
                    </p>
                {/if}
            </div>
            <p class="cart_navigation clearfix" id="cart_navigation">
                <a class="button-exclusive btn btn-default"
                   href="{$link->getPageLink('index')|escape:'htmlall':'UTF-8'}">
                    <i class="icon-chevron-left"></i>{l s='Вернуться в магазин' mod='rbspayment'}
                </a>
            </p>
        {/block}

{/block}



