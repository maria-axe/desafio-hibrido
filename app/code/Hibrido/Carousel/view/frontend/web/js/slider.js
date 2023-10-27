/**
 * Copyright © Magento, Inc. All rights reserved.
 *
 * @author    Hibrido - 2023  
 */

require(['jquery', 'slick'], function ($) {
    $(document).ready(function () {
        var commonOptions = {
            arrows: true,
            dots: false,
            infinite: true,
        };

        // Opções específicas para o carrossel banner
        var bannerOptions = {
            dots: true,
        };

        // Opções comuns para carrossel de lançamentos e grade de conteúdo
        var responsiveOptions = {
            responsive: [
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1268,
                    settings: {
                        slidesToShow: 4,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                    }
                }
            ]
        };

        // Opções específicas para o carrossel de lançamentos de produtos
        var productOptions = {
            slidesToShow: 4,
        };

        // Opções específicas para o carrossel de grade de conteúdo
        var contentOptions = {
            slidesToShow: 5,
            arrows: false,
        };

        $('.banner-slider').slick($.extend({}, commonOptions, bannerOptions));
        $('.product-launches .product-items').slick($.extend({}, commonOptions, productOptions, responsiveOptions));
        $('.content-grid').slick($.extend({}, commonOptions, contentOptions, responsiveOptions));
    });
});
