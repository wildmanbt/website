function animatedslider_pluginAppObj_5_12() {
var pluginAppObj_5_12Swiper;

    x5engine.boot.push(function(){
        resizeAnimatedSwiper_pluginAppObj_5_12();
        loadSwiper();
    
        (function($) {
           var $window = $(window);

            $window
                .resize(resize);
        })(jQuery);
    });

    function resize() {    
        pluginAppObj_5_12Swiper.destroy(true);
        resizeAnimatedSwiper_pluginAppObj_5_12();
        loadSwiper();
    }

    function resizeAnimatedSwiper_pluginAppObj_5_12(){
        var height = 350;
        var width = 500;
        var controls_padding =   70
        var pagination_padding = 18
        var container_width = $("#pluginAppObj_5_12").width();
        var max_width = (container_width < width ? container_width : width);
        height = ((max_width - controls_padding) / width) * height;
        width = max_width - controls_padding;

        $("#pluginAppObj_5_12 .swiper-container.main").css({"width": width,"height": height});
        $("#pluginAppObj_5_12 .swiper-button-next, #pluginAppObj_5_12 .swiper-button-prev").css({"top": height/2});
        $("#swiper_pluginAppObj_5_12").css({"width": max_width,"height": height + pagination_padding});
    }

    function loadSwiper(){
    
        pluginAppObj_5_12Swiper = new Swiper('#pluginAppObj_5_12 .swiper-container.main', {

        freeMode:            false,
        speed:               1000,
        loop:                true,
        direction:           'horizontal',
        roundLengths:        true,
        autoplay:            3000,
            autoplayDisableOnInteraction: false,
            pagination:          '#pluginAppObj_5_12 .swiper-pagination',
            paginationClickable: true,
            nextButton:          '#pluginAppObj_5_12 .swiper-button-next',
            prevButton:          '#pluginAppObj_5_12 .swiper-button-prev',
            effect:              getBestEffect('cube'),
            cube:                {slideShadows: false, shadow: false},
 });
    }

    function isIE(){
        var ua = window.navigator.userAgent;
        var old_ie = ua.indexOf('MSIE ');
        var new_ie = ua.indexOf('Trident/');
        return (old_ie > -1 || new_ie > -1);
    }

    function getBestEffect(effect){
        if(effect == 'none')
            return 'fade';
        

        if(isIE()){
            if (['cube', 'flip', 'stack'].indexOf(effect) >= 0)
                return 'fade'
        }

        return effect;
    }

}