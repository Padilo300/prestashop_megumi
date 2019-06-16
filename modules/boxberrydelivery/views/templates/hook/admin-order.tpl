{**
 * BoxberryDelivery: модуль для PrestaShop 1.5-1.7
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2015-2019 Maksim T.
 * @license   https://prestashop.modulez.ru/en/content/3-terms-and-conditions-of-use#proprietary-clean EULA: Proprietary license without copy-protection
 * @link      https://prestashop.modulez.ru/en/ Модули для PrestaShop CMS
 *}

{if !empty($details->details)}
    {if $psVersion > 1.5}
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    {if 1.6 === $psVersion}
                        <h3><i class="icon-truck "></i> {l s='Pick point address' mod='boxberrydelivery'}</h3>
                    {else}
                        <div class="panel-heading"><i class="icon-truck "></i> {l s='Pick point address' mod='boxberrydelivery'}</div>
                    {/if}
                    <div>
                        {$details->details|escape:'htmlall':'UTF-8'}
                    </div>
                </div>
            </div>
        </div>
    {else}
        <br />
        <fieldset>
            <legend><img src="../img/admin/tab-shipping.gif" /> {l s='Pick point address' mod='boxberrydelivery'}</legend>
            {$details->details|escape:'htmlall':'UTF-8'}
        </fieldset>
    {/if}
{/if}