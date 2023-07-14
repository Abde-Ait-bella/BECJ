/*==================================================
                    vankine Theme Js
==================================================*/
(function ($) {
("use strict");
 /*==========================================================================
                            vankine_Splitting
==========================================================================*/
function vankine_Splitting() {
    Splitting(); 
    ScrollOut({  
        threshold: .2,
        once: true
    });
}
 
/* ==========================================================================
    When document is Scrollig, do
========================================================================== */
jQuery(document).on('ready', function () {
    (function ($) {
        // add your functions
        vankine_Splitting();
    })(jQuery);
});

})(jQuery);

