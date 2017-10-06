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



    <div class="product-prices">
        {block name='hook_display_product_rating'}
            {hook h='displayProductRating' product=$product}
        {/block}
        {if $product.show_price}
        {if !$configuration.is_catalog}
            {block name='product_availability'}
                <span id="product-availability"
                      class="badge {if $product.availability == 'available'}badge-success product-available{elseif $product.availability == 'last_remaining_items'}badge-warning product-last-items{else}badge-danger product-unavailable{/if}">
              {if $product.show_availability && $product.availability_message}
                  {if $product.availability == 'available'}
                      <i class="fa fa-check" aria-hidden="true"></i>
                           {$product.availability_message}
                  {elseif $product.availability == 'last_remaining_items'}

                      <i class="fa fa-exclamation" aria-hidden="true"></i>
                           {$product.availability_message}
                  {else}

                      <i class="fa fa-ban" aria-hidden="true"></i>
                           {$product.availability_message}
                      {if isset($product.available_date) && $product.available_date != '0000-00-00'}
                      {if $product.available_date|strtotime > $smarty.now}<span
                              class="available-date">{l s='until' d='Shop.Theme.Catalog'} {$product.available_date}</span>{/if}
                  {/if}
                  {/if}
              {/if}
            </span>
            {/block}
        {/if}


        {block name='product_price'}
            <div class="{if $product.has_discount}has-discount{/if}"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer"
            >
                <link itemprop="availability" href="https://schema.org/InStock"/>
                <meta itemprop="priceCurrency" content="{$currency.iso_code}">

                <div>
                    <span itemprop="price" class="product-price" content="{$product.price_amount}">{$product.price}</span>
                    {if $product.has_discount}
                        <span class="product-discount">
                            {hook h='displayProductPriceBlock' product=$product type="old_price"}
                            <span class="regular-price">{$product.regular_price}</span>
                         </span>

                        {if $product.discount_type === 'percentage'}
                            <span class="badge badge-discount discount discount-percentage">-{$product.discount_percentage_absolute}</span>
                        {else}
                            <span class="badge badge-discount discount discount-amount">-{$product.discount_to_display}</span>
                        {/if}

                        {if isset($product.specific_prices.to) && $product.specific_prices.to != '0000-00-00 00:00:00'}<meta itemprop="priceValidUntil" content="{$product.specific_prices.to}"/>{/if}

                    {/if}
                </div>

                {block name='product_unit_price'}
                    {if $displayUnitPrice}
                        <p class="product-unit-price text-muted">{l s='(%unit_price%)' d='Shop.Theme.Catalog' sprintf=['%unit_price%' => $product.unit_price_full]}</p>
                    {/if}
                {/block}
            </div>
        {/block}

        {block name='product_without_taxes'}
            {if $priceDisplay == 2}
                <p class="product-without-taxes text-muted">{l s='%price% tax excl.' d='Shop.Theme.Catalog' sprintf=['%price%' => $product.price_tax_exc]}</p>
            {/if}
        {/block}

        {block name='product_pack_price'}
            {if $displayPackPrice}
                <p class="product-pack-price">
                    <span>{l s='Instead of %price%' d='Shop.Theme.Catalog' sprintf=['%price%' => $noPackPrice]}</span>
                </p>
            {/if}
        {/block}

        {block name='product_ecotax'}
            {if $product.ecotax.amount > 0}
                <p class="price-ecotax text-muted">{l s='Including %amount% for ecotax' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.ecotax.value]}
                    {if $product.has_discount}
                        {l s='(not impacted by the discount)' d='Shop.Theme.Catalog'}
                    {/if}
                </p>
            {/if}
        {/block}

        {hook h='displayProductPriceBlock' product=$product type="weight" hook_origin='product_sheet'}

        <div class="tax-shipping-delivery-label text-muted">
            {if $configuration.display_taxes_label}
                {$product.labels.tax_long}
            {/if}
            {hook h='displayProductPriceBlock' product=$product type="price"}
            {hook h='displayProductPriceBlock' product=$product type="after_price"}
        </div>
        {hook h='displayCountDown'}
        {/if}
    </div>






