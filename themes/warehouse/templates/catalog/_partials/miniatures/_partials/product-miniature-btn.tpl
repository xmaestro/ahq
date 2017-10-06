{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="product-add-cart">
    {if $product.add_to_cart_url && ($product.quantity > 0 || $product.allow_oosp)}
        <form action="{$product.add_to_cart_url}" method="post">

            <input type="hidden" name="id_product" value="{$product.id}">
            <div class="input-group input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="{$product.minimal_quantity}"
                        class="input-group form-control input-qty"
                        min="{$product.minimal_quantity}"
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                        {if !$product.add_to_cart_url}
                            disabled
                        {/if}
                ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> {l s='Add to cart' d='Shop.Theme.Actions'}
                </button>
            </div>

        </form>
    {else}
        <a href="{$product.url}"
           class="btn btn-product-list"
        > {l s='View' d='Shop.Theme.Actions'}
        </a>
    {/if}
</div>