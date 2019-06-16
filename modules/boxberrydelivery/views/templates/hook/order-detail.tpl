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
        <div class="box">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="{if 1.6 === $psVersion}page-subheading{/if}">
                        {if 1.6 === $psVersion}
                            <i class="icon-truck"></i>
                        {/if}
                        {l s='Pick point address' mod='boxberrydelivery'}
                    </h3>
                    <div>
                        {$details->details|escape:'htmlall':'UTF-8'}
                    </div>
                </div>
            </div>
        </div>
    {else}
        <div>
            <h3>{l s='Pick point address' mod='boxberrydelivery'}</h3>
            <div>
                <b>{$details->details|escape:'htmlall':'UTF-8'}</b>
            </div>
        </div>
        <hr>
        <br>
    {/if}
{/if}