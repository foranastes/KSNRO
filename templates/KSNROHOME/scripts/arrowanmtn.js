$(".fa-angle-double-down").bind("animation.loop", function(){
    $(this).animate({bottom: 0, easing: 'linear'}, 1000, function(){
        $(this).css("bottom", 10).trigger("animation.loop");
    });
}).trigger("animation.loop");