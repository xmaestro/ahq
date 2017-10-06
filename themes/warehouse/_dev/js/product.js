/**
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
 */
import $ from 'jquery';
import 'easyzoom/dist/easyzoom';

$(document).ready(function () {
    createProductSpin();
    createInputFile();
    coverImage();
    imageScrollBox();
    createToolTip();

    $('body').on('click', '[data-button-action="add-to-cart"]', (event) => {
            event.preventDefault();
            $(event.target).addClass('processing-add');
        }
    );

    prestashop.on('updateCart', function (event) {
        $('.add-to-cart.processing-add').removeClass('processing-add');
    });

    prestashop.on('updatedProduct', function (event) {
        createInputFile();
        createToolTip();
        coverImage();
        if (event && event.product_minimal_quantity) {
            const minimalProductQuantity = parseInt(event.product_minimal_quantity, 10);
            const quantityInputSelector = '#quantity_wanted';
            let quantityInput = $(quantityInputSelector);

            // @see http://www.virtuosoft.eu/code/bootstrap-touchspin/ about Bootstrap TouchSpin
            quantityInput.trigger('touchspin.updatesettings', {min: minimalProductQuantity});
        }
        imageScrollBox();
        $($('.tabs .nav-link.active').attr('href')).addClass('active').removeClass('fade');
        $('.js-product-images-modal').replaceWith(event.product_images_modal);
    });

    function coverImage() {
        let fade = false;
        if (iqitTheme.pp_zoom == 'inner') {
            fade = true;
        }

        $('#product-images-large').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: fade,
            lazyLoad: 'ondemand',
            asNavFor: '#product-images-thumbs'
        });


        if (iqitTheme.pp_zoom == 'inner') {
            let $easyzoom = $('.easyzoom-product').easyZoom();
        } else {
            $('.js-easyzoom-trigger').on('click', (event) => {
                event.preventDefault();
            });
        }
    }

    function imageScrollBox() {
        let vertical = false;
        let slides = 5;
        let lazyLoad = 'ondemand';
        let responsive = [];

        if (iqitTheme.pp_thumbs == 'left' || iqitTheme.pp_thumbs == 'leftd') {
            vertical = true;
            slides = 4;
            lazyLoad = 'progressive';
        }

        if (iqitTheme.pp_thumbs == 'leftd') {
            responsive = [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },
            ];
        }

        $('#product-images-thumbs').slick({
            slidesToShow: slides,
            slidesToScroll: slides,
            asNavFor: '#product-images-large',
            dots: false,
            arrows: true,
            vertical: vertical,
            verticalSwiping: vertical,
            focusOnSelect: true,
            lazyLoad: lazyLoad,
            responsive: responsive,
        });
    }

    function createInputFile() {
        let $input = $('.js-file-input');
        $input.filestyle();
        $input.on('change', (event) => {
            let target, file;

            if ((target = $(event.currentTarget)[0]) && (file = target.files[0])) {
                $(target).prev().text(file.name);
            }
        });
    }

    function createToolTip() {
        $('body > .tooltip.bs-tether-element').remove();
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    }

    function createProductSpin() {
        let quantityInput = $('#quantity_wanted');
        quantityInput.TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'fa fa-angle-up touchspin-up',
            verticaldownclass: 'fa fa-angle-down touchspin-down',
            buttondown_class: 'btn btn-touchspin js-touchspin',
            buttonup_class: 'btn btn-touchspin js-touchspin',
            min: parseInt(quantityInput.attr('min'), 10),
            max: 1000000
        });

        quantityInput.on('change', function (event) {
            let $productRefresh = $('.product-refresh');
            $(event.currentTarget).trigger('touchspin.stopspin');
            $productRefresh.trigger('click', {eventType: 'updatedProductQuantity'});
            event.preventDefault();

            return false;
        });
    }
});
