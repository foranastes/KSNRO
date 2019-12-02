function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#stickymenu-anchor').offset().top;
    if (window.width > 800 && window_top > div_top) {
        $('#stickymenu').addClass('stick');
        $('#stickymenu-anchor').height($('#stickymenu').outerHeight());
    } else {
        $('#stickymenu').removeClass('stick');
        $('#stickymenu-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});