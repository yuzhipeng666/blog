/*!
 * Page Index
 * @Author Gang Chen
 */

'use strict';

AS.home = function($){

    var $flexslider = $('#flexslider');

    // Load Works

    // Load Blog


    // Load Slider
    // var loadSlider = function(){
    //     if (AS.sliderData.length < 2){ return false; }
    //     $('<img/>').on('load',function(){ setSlider(AS.sliderData); }).attr('src',AS.sliderData[1].img);
    // };

    // Set slider
    var setSlider = function(data){

        $('#first').remove();

        var len = data.length, html = '';

        for (var i=1; i<len; i++){
            var link = data[i].linkId ? AS.path+'page/worksDetail'+(AS.lang=='en'?'_en':'')+'.html?id='+data[i].linkId : 'javascript:;';
            html += '<li><a href="'+link+'"><img src="'+AS.path+data[i].img+'"></a></li>';
        }
        $flexslider.find('>ul').append(html);

        // setTimeout(function(){
        $flexslider.flexslider({
            animation: AS.isPhone ? "slide" : "fade",
            smoothHeight: true,
            controlNav: false,
            slideshowSpeed: 6000
            // ,slideshow: false
        });
        // },5000);

    };

    // Set window resize
    var setResize = function(){

        // $('.slider').setScaleHeight({scaleW:1920, scaleH:651});

        // if ($(window).width() > 782){ $('.home-client li').setScaleHeight({scaleW:161, scaleH:78}); }
        //
        // $(window).on('resize',function(){
        //     $('.slider').setScaleHeight({scaleW:1920, scaleH:651});
        //     if ($(window).width() > 782){ $('.home-client li').setScaleHeight({scaleW:161, scaleH:78}); } else { $('.home-client li').removeAttr('style'); }
        // });

    };

    return {
        init: function(){
            setResize();
            // loadBlog();
            // $(window).load(loadSlider);
        }
    }

}(jQuery);

$(function(){ AS.home.init(); });