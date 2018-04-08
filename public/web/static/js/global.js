/*!
 * Layout
 * @Author Gang
 */

// jQuery Methods Extend

'use strict';

(function($){

    'use strict';

    $.extend({

        // Get OS type
        getOS: function(){
            var UA = window.navigator.userAgent;
            return /Android/i.test(UA) && 'Android' || /iPhone/i.test(UA) && 'iPhone' || /iPad/i.test(UA) && 'iPad' || /Nokia/i.test(UA) && 'Nokia' || /macintosh|mac os x/i.test(UA) && 'Mac' || 'PC';
        },

        // Is Phone
        isPhone: function(){
            var UA = window.navigator.userAgent;
            return /Android/i.test(UA) || /iPhone/i.test(UA) ? true : false;
        },

        // Get url parameter
        getUrlPara: function (paramName) {
            var searchString = window.location.search.substring(1),
                i, val, params = searchString.split("&");

            for (i = 0; i < params.length; i++) {
                val = params[i].split("=");
                if (val[0] == paramName) {
                    return decodeURIComponent(val[1]);
                }
            }
            return null;
        },

        // Check is positive integer or not
        isPosInt: function(val){
            return (val!="") ? /^\d+$/.test(val) : false;
        },

        // Get transition event name
        getTransitionEvent: function(){
            var t;
            var el = document.createElement('fakeelement');
            var transitions = {
                'transition':'transitionend',
                'OTransition':'oTransitionEnd',
                'MozTransition':'transitionend',
                'WebkitTransition':'webkitTransitionEnd'
            }
            for(t in transitions){
                if( el.style[t] !== undefined ){
                    return transitions[t];
                }
            }
        }

    });

    // Set ele height by
    $.fn.setScaleHeight = function(options){
        return this.each(function(){
            var o = $.extend({
                    baseBy: 'width',
                    scaleW: 3,
                    scaleH: 2,
                    isMin: false
                },options),
                $self = $(this), w, h;

            // console.log(JSON.stringify(o));

            if (o.baseBy == 'width'){
                $self.css(o.isMin ? 'min-height' : 'height',Math.round(o.scaleH * parseInt($self.css('width')) / o.scaleW) + 'px');
            }
            else {
                $self.css(o.isMin ? 'min-width' : 'width',Math.round(o.scaleW * parseInt($self.css('height')) / o.scaleH) + 'px');
            }
        });
    };


})(jQuery);


// Global Object

var AS = window.AS = AS || {}, path = window.path = path || '', lang = window.lang = lang || {};

(function(jQuery){

    'use strict';

    // Set AS Object

    // AS.pagecode = pagecode || '';
    AS.lang = lang || 'cn';
    AS.path = path;
    AS.isPhone = $.isPhone();
    AS.os = $.getOS();
    AS.layout = function($){

        // Set Nav path,active and Img path
        var setNavAndPath = function(){
            $(this).find('a[data-href]').each(function(){ $(this).prop('href',AS.path + $(this).attr('data-href')); });
            $(this).find('img[data-href]').each(function(){ $(this).prop('src',AS.path + $(this).attr('data-src')); });
            $(this).find('a[page-code="'+AS.pagecode+'"]').addClass('active');
        };

        // Set footer postion
        // var setMainHeight = function(){
        //     var wH = $(window).height();
        //     var h = wH - (AS.isPhone ? -10 : 84) - 60 - 2;
        //
        //     $('.main-content').css('min-height',h+'px');
        // };

        // Load Side
        var setLayout = function(){

            // Nav, Side, Footer
            // $('.nav').load(AS.path + 'inc/'+(AS.lang=='en'?'nav_en':'nav')+'.html',function(){ setNavAndPath.call($('.nav').get(0)); });
            // $('.side').load(AS.path + 'inc/'+(AS.lang=='en'?'side_en':'side')+'.html',function(){ setNavAndPath.call($('.side').get(0)); });
            $('.footer').load(AS.path + 'inc/'+(AS.lang=='en'?'footer_en':'footer')+'.html',function(){

                setNavAndPath.call($('.footer').get(0));

                // Goto top
                if (!AS.isPhone){
                    $('.gotop').on('click',function(){
                        $('body').scrollTop(0);
                    });
                    $(window).on('scroll',function(){
                        $('.gotop').toggleClass('hide',$(window).scrollTop() < 100);
                        // console.log($(window).scrollTop());
                    });
                }

                // Set wx
                $('.wx').on('click',function(){
                    var $div = $(this).find('.wx-img'), s = $div.css('display');
                    // if (s == 'none'){ $div.show(); } else { $div.hide(); }

                    $div.show();

                    if (s == 'none'){
                        $(document).off('click touchstart').on('click touchstart',function(e){
                            // alert('click');
                            e = window.event || e;
                            if (!$(e.srcElement || e.target).parents('.wx').length){ $('.wx-img').hide(); }

                            e.stopPropagation();
                        });
                    }

                    e.stopPropagation();
                    // e.preventDefault();
                });
                // $('.wx-img').on('click',function(e){
                //     $(this).hide();
                //     e.stopPropagation();
                // });

            });

            // Side toggle
            $('.side-toggle').on('click',function(){
                var $self = $(this), $body = $('body'), open = $body.hasClass('side-open'), $mask = $('.page-mask');
                $self.toggleClass('close',!open);
                $body.toggleClass('side-open',!open);
                if (!open){
                    $mask.removeClass('hide').off('click').on('click',function(){
                        $(this).addClass('hide');
                        $self.removeClass('close');
                        $body.removeClass('side-open');
                    });
                }
            });

            // Img lazyload
            $('img.lazy').lazyload({effect : "fadeIn", threshold: -50, container: AS.isPhone ? $('#main') : window });
            // Trigger windwo scroll
            if (!AS.isPhone){
                $('.main-scroll').on('scroll',function(){
                    $(window).trigger('scroll');
                });
            }
        };

        // Set window resize
        var setResize = function(){

            // $(window).on('resize',function(){

                // Reset pic height
                $('.pic').setScaleHeight();
                // setMainHeight();

            // });

        };

        // Set font-family
        var setFont = function(){
            if ($.getOS() == 'PC'){
                $('body').attr("style","font-family: 'Microsoft YaHei', sans-serif;");
            }
        };

        return {
            init: function(){
                setFont();
                setLayout();
                setResize();
                // setMainHeight();
            }
        }

    }(jQuery);

})(jQuery);


// Document ready

$(function(){ AS.layout.init(); });