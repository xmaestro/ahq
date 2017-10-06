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
{block name='product_cover'}
    <div class="product-cover">

        {block name='product_flags'}
            <ul class="product-flags">
                {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                {/foreach}
            </ul>
        {/block}

        <a class="expander" data-toggle="modal" data-target="#product-modal"><i class="fa fa-expand" aria-hidden="true"></i></a>
        <div id="product-images-large" class="product-images-large slick-slider">
            {foreach from=$product.images item=image}
                <div>
                    <div class="easyzoom easyzoom-product">
                        <a href="{$image.large.url}" class="js-easyzoom-trigger"></a>


                    </div>

                    <img
                            data-lazy="{$image.bySize.large_default.url}"
                            data-image-large-src="{$image.large.url}"
                            alt="{$image.legend}"
                            title="{$image.legend}"
                            itemprop="image"
                            content="{$image.bySize.large_default.url}"
                            width="{$image.bySize.large_default.width}"
                            height="{$image.bySize.large_default.height}"
                            class="img-fluid"
                    >
                </div>
            {/foreach}
        </div>
    </div>
{/block}
