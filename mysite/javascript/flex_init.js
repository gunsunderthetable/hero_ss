// Can also be used with $(document).ready()
$(window).load(function() {
    jQuery('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            slider.removeClass('loading');
        }

    });
});
