{*
* 2007-2017 IQIT-COMMERCE.COM
*
* NOTICE OF LICENSE
*
*  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
*  @copyright 2007-2017 IQIT-COMMERCE.COM
*  @license   GNU General Public License version 2
*
* You can not resell or redistribute this software.
*
*}

<div class="cbp-products-big row ">
    {foreach from=$products item=product name=homeFeaturedProducts}
        <div class="product-grid-menu col-{$perline}">
            <div class="product-container">
                <div class="product-image-container">
                    <a class="product_img_link" href="{$product.link}" title="{$product.name}">
                        <img class="img-fluid"
                             src="{$product.cover.bySize.home_default.url}"
                             alt="{if !empty($product.legend)}{$product.legend}{else}{$product.name}{/if}"
                            {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
                    </a>
                </div>
                <h6 class="product-title">
                    <a href="{$product.url}">{$product.name|truncate:50:'...'}</a>
                </h6>
                <div class="product-price-and-shipping" >
                    <span class="product-price">{$product.price}</span>
                </div>
            </div>
        </div>
    {/foreach}
</div>
