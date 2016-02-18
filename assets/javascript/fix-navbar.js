/**
 * Created by roberto on 17/02/16.
 */

$(document).ready(function () {
    function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top;
        if (window_top > div_top) {
            $('#sticky').addClass('stick');
        } else {
            $('#sticky').removeClass('stick');
        }
    }

    $(window).scroll(sticky_relocate);
    $(window).bind('DOMMouseScroll MouseScrollEvent MozMousePixelScroll wheel scroll', sticky_relocate);
    sticky_relocate();
});
