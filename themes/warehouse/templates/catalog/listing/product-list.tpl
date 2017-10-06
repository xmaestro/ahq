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
{extends file=$layout}

{block name='content'}
    <section id="main">

        {block name='product_list_header'}
            <h1 class="h1 page-title"><span>{$listing.label}</span></h1>
        {/block}

        <section id="products">
            {if $listing.products|count}
                {block name='product_list_active_filters'}
                    <div id="">
                        {$listing.rendered_active_filters nofilter}
                    </div>
                {/block}
                <div id="">
                    {block name='product_list_top'}
                        {include file='catalog/_partials/products-top.tpl' listing=$listing}
                    {/block}
                </div>
                {if $iqitTheme.pl_faceted_position}
                    {block name='product_list_facets_center'}
                        <div id="facets_search_center">
                            {widget name="ps_facetedsearch"}
                        </div>
                    {/block}
                {/if}
                <div id="">
                    {block name='product_list'}
                        {include file='catalog/_partials/products.tpl' listing=$listing}
                    {/block}
                </div>
                <div id="js-product-list-bottom">
                    {block name='product_list_bottom'}
                        {include file='catalog/_partials/products-bottom.tpl' listing=$listing}
                    {/block}
                </div>
                    {block name='product_list_bottom_static'}{/block}
            {else}

                {block name='product_list_not_found'}
                    <div class="alert alert-warning" role="alert">
                        <strong>{l s='There are no products.' d='Shop.Theme.Catalog'}</strong>
                    </div>
                {/block}

            {/if}
        </section>

    </section>
{/block}
