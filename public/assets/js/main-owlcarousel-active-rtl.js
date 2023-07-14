/*==================================================
                    vankine Theme Js
==================================================*/
(function ($) {
    ("use strict");
/*-----------------------------
        Theme Carousel
 -----------------------------*/
 function vankine_theme_owl_carousel() {
    if ($('.theme_carousel').length) {
        $(".theme_carousel").each(function (index) {
        var $owlAttr = {
            thumbs: false,
            rtl : true ,
            navText: [ '<i class="fi-rs-arrow-small-left"></i>', '<i class="fi-rs-arrow-small-right"></i>' ],
        },
        $extraAttr = $(this).data("options");
        $.extend($owlAttr, $extraAttr);
        $(this).owlCarousel($owlAttr);
        
    });
    }
}
/*-------------------------------------
Product details big image slider
---------------------------------------*/
if ($('.pro-dec-big-img-slider').length) {
$(".pro-dec-big-img-slider").owlCarousel({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    thumbs: false,
    fade: false,
    asNavFor: ".product-dec-slider-small , .product-dec-slider-small-2"
});
}
/*---------------------------------------
Product details small image slider
-----------------------------------------*/
if ($('.product-dec-slider-small').length) {
$(".product-dec-slider-small").owlCarousel({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".pro-dec-big-img-slider",
    dots: false,
    focusOnSelect: true,
    fade: false,
    thumbs: false,
    arrows: false,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2
            }
        }
    ]
});
}


/* ==========================================================================
Elementor front end start
========================================================================== */
$(window).on('elementor/frontend/init', function() {
    elementorFrontend.hooks.addAction('frontend/element_ready/vankine-service-carousel-v1.default', vankine_theme_owl_carousel);
    elementorFrontend.hooks.addAction('frontend/element_ready/ankine-testimonil-vertical-v1.default', vankine_theme_owl_carousel);
});
/* ==========================================================================
    When document is Scrollig, do
========================================================================== */
jQuery(document).on('ready', function () {
    (function ($) {
        // add your functions
        vankine_theme_owl_carousel();
    })(jQuery);
});

})(jQuery);

