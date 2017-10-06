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
{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}
    <h1 class="h1 page-title"><span>{$category.name}</span></h1>
    {if $iqitTheme.cat_image == 1}
        {if $category.image.bySize.category_default.url}
            <div class="category-image {if $iqitTheme.cat_hide_mobile} hidden-sm-down{/if}">
                {if $iqitTheme.cat_desc == 'onimage'}
                    {if $category.description}
                        <div class="category-description category-description-image">{$category.description nofilter}</div>
                    {/if}
                {/if}
                <img src="{$category.image.bySize.category_default.url}" alt="{$category.image.legend}"
                     class="img-fluid" width="{$category.image.bySize.category_default.width}" height="{$category.image.bySize.category_default.height}" >
            </div>
        {else}
            {if $iqitTheme.cat_desc == 'onimage'}
                {if $category.description}
                    <div class="category-description category-description-top {if $iqitTheme.cat_hide_mobile} hidden-sm-down{/if}">{$category.description nofilter}</div>
                {/if}
            {/if}
        {/if}
    {/if}

    {if $iqitTheme.cat_desc == 'above'}
        {if $category.description}
            <div class="category-description category-description-top {if $iqitTheme.cat_hide_mobile} hidden-sm-down{/if}">{$category.description nofilter}</div>
        {/if}
    {/if}

    {if $iqitTheme.cat_sub_thumbs == 1}
        {include file='catalog/_partials/category-subcategories.tpl'}
    {/if}

{/block}

{block name='product_list_bottom'}
    {include file='catalog/_partials/products-bottom.tpl' listing=$listing}
{/block}

{block name='product_list_bottom_static'}
    {if $iqitTheme.cat_desc == 'below'}
        {if $category.description}
            <div class="category-description category-description-bottom {if $iqitTheme.cat_hide_mobile} hidden-sm-down{/if}"><hr />{$category.description nofilter}</div>
        {/if}
    {/if}
{/block}


