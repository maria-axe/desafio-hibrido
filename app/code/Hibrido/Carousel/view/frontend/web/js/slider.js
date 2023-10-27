
require(['jquery', 'slick'], function ($) {
    $(document).ready(function () {
        $('.banner-slider').slick({
            arrows: true,
            dots: true,
        });
        $('.product-launches .product-items').slick({
            arrows: true,
            dots: false,
            infinite: true,
            slidesToShow: 4,
        });
        $('.content-grid').slick({
            arrows: false,
            dots: false,
            infinite: true,
            slidesToShow: 5,
        });
    });
});
