{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

  <div class="dropdown mf-header__profile-link">
    <a class="dropdown-toggle" href="#" role="button" id="profile-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Профиль</a>
    <div class="dropdown-menu" aria-labelledby="profile-link">

      {if $logged}
        <a class="dropdown-item" href="{$my_account_url}" id="headCustomerName">{$customerName}</a>
        <a class="dropdown-item" href="{$logout_url}">{l s='Выйти' d='Shop.Theme.Actions'}</a>
      {else}
        <a class="dropdown-item" href="{$my_account_url}">{l s='Войти' d='Shop.Theme.Actions'}</a>
    {/if}
    </div>
  </div>
