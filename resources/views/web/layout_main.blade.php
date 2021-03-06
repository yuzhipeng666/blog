@inject('sstt', 'App\Models\Homeinformation')
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>快象影视</title>
    <meta name="keywords" content="{{$sstt->homedata()->keywords}}">
    <meta name="description" content="{{$sstt->homedata()->description}}">
    <link href="{{asset("./web/static/images/WechatIMG7.jpg")}}" type="image/x-icon" rel="shortcut icon">
    <meta name="author" content="Aosum">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_475975_4j9tcc3y9n5ng66r.css">
    <link rel="stylesheet" href="{{asset("./web/static/css/font.min.css?v=a0es784c4ca")}}">
    <link rel="stylesheet" href="{{asset("./web/static/css/base.css?v=cf757s43c24")}}">
    <link rel="stylesheet" href="{{asset("./web/static/css/blog.css?v=c4aasffdas15")}}">
    <link rel="stylesheet" href="{{asset("./web/static/css/index.css?v=9a3s46774b5")}}">
    <script src="{{asset("./web/static/js/jquery.min-1.12.4.min.js?v=61s8538b4ab")}}"></script>
    <script src="{{asset("./web/static/js/jquery.lazyload.min.js?v=78ds00cf8cb")}}"></script>
    <link rel="stylesheet" href="{{asset("./web/static/css/flexslider.css?v=d4es3619abd")}}">
    <script src="{{asset("./web/static/js/jquery.flexslider.min.js?v=b8c19s259c6")}}"></script>
    <script src="{{asset("./web/static/js/global.js?v=59fa0fs1452")}}"></script>
    <script src="{{asset("./web/static/js/index.js?v=59fa0fs1452")}}"></script>
    {{--<script>--}}
        {{--var _hmt = _hmt || [];--}}
        {{--(function() {--}}
            {{--var hm = document.createElement("script");--}}
            {{--hm.src = "https://hm.baidu.com/hm.js?61303e65809d6d64a2edb550e1c1af26";--}}
            {{--var s = document.getElementsByTagName("script")[0];--}}
            {{--s.parentNode.insertBefore(hm, s);--}}
        {{--})();--}}
    {{--</script>--}}
    <script language="javascript" src="http://dct.zoosnet.net/JS/LsJS.aspx?siteid=DCT82612458&float=1&lng=cn"></script>
    <style>
        /*.home-contact {*/
            /*background: #f0f0f0;*/
        /*}*/
        img {
            object-fit: cover;
        }
        .clear {
            clear: both;
        }
        #htmls img {
            width: 100%!important;
        }
        #htmls {
            max-width: 800px!important;
            margin: 0 auto!important;
        }
        .xinwen a {
            color: #fff;
            display: block;
            font-size: 18px;
            margin: 20px 0;
            float: left;
            width: 33%;
        }
        .xinwen {
            padding: 20px;
            width: 100%;
            background: #000;
            /*height: 250px;*/
            margin-top: 35px;
        }

        .back-to-top {
            position: fixed;
            /*right: 20px;*/
            bottom: 10px;
            left: calc(50% - 25px);
            margin: 0 auto;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            color: #2C2C2C;
            text-decoration: none;
            /*border: 1px solid #CCCCCC;*/
            z-index: 999999;
            background-image: url({{asset("/web/static/images/5-120601160008-50.png")}});
            background-origin: no-repeat;
            background-size: 100% 100%;
        }
        @media (max-width: 750px){
            #htmls img {
                width: 100%;
            }
            .xinwen a {
                width: 100%;
            }
            #videovl {
                height: 200px;
            }
            .video-show {
                width: 95%;
            }
        }
    </style>
</head>

<body>
<div style="margin: 0 auto;width: 100%;">
    <a class="back-to-top" href="#top"></a>
</div>
<!-- Site begin -->

<div class="sitecontent transform">
    <div class="focusvideo-pop">
        <div class="video-close">
            <i href="#close" id="close" class="iconfont  icon-X"></i>
        </div>
        <div class="video-show">
            <iframe id="videovl" width="100%" height="500"  src="" scrolling="no"  style="border: none;"  allowfullscreen="" frameborder="0" ></iframe>
            {{--<embed id="videovl" src='' allowFullScreen='true'   autostart=true quality='high' width="100%" height="500" align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed>--}}
            {{--<video id="videovl" width="100%" height="500" controls src="" type="video/mp4">--}}
            {{--</video>--}}
        </div>
    </div>
    <!-- Header begin -->
    <div class="header">
        <div class="h-body">
            <div class="logo"><a href="./"><img src="{{asset("./web/static/images/logs.png")}}"></a></div>
            <div class="nav">
                <ul>
                    <li><a href="{{asset("/")}}" ><span @if(Request::segment(1)=='') class="active"
                            @endif>首页</span></a></li>
                    <li><a href="{{asset("/promotional")}}" ><span @if(Request::segment(1)=='promotional') class="active"
                                    @endif>宣传片</span></a>
                    </li>
                    <li><a href="{{asset("/sections")}}" ><span @if(Request::segment(1)=='sections') class="active"
                                    @endif>影视栏目</span></a>
                    </li>
                    <li><a href="{{asset("/diffusion")}}" ><span @if(Request::segment(1)=='diffusion') class="active"
                                    @endif>媒体推广</span></a></li>
                    <li><a href="{{asset("/we")}}" ><span @if(Request::segment(1)=='we') class="active"
                                    @endif>我们</span></a></li>
                </ul>
            </div>
            <div class="tel"><a href="021-58649529">电话：021-58649529</a></div>
        </div>
    </div>
    <div class="header-m">
        <div class="side-toggle"></div>
        <div class="title">
            <div class="logo"></div>
            <a href="tel:021-58649529" class="tel"><i class="icon-tel"></i>电话：021-58649529</a></div>
    </div>
    <!-- Header end -->

    <!-- Main begin -->
@yield('content')
<!-- Main end -->
    <div class="page-mask hide"></div>
</div>

<div class="side">
    <ul class="menu">
        <li></li>
        <li>
            <a data-href="" page-code="home" href="{{asset("/")}}" @if(Request::segment(1)=='') class="active"
            @endif ><i class="icon-circle transfrom"></i>首页</a>
        </li>
        <li>
            <a data-href="" page-code="home" href="{{asset("/promotional")}}" @if(Request::segment(1)=='promotional') class="active"
                    @endif ><i class="icon-circle transfrom"></i>宣传片</a>
        </li>
        <li>
            <a data-href="" page-code="home" href="{{asset("/sections")}}" @if(Request::segment(1)=='sections') class="active"
                    @endif ><i class="icon-circle transfrom"></i>影视栏目</a>
        </li>
        <li>
            <a data-href="" page-code="home" href="{{asset("/diffusion")}}" @if(Request::segment(1)=='diffusion') class="active"
                    @endif ><i class="icon-circle transfrom"></i>媒体推广</a>
        </li>
        <li>
            <a data-href="" page-code="home" href="{{asset("/we")}}" @if(Request::segment(1)=='we') class="active"
                    @endif ><i class="icon-circle transfrom"></i>我们</a>
        </li>

    </ul>
</div>
<script>

    $(document).ready(function () {
        $('.flexslider').flexslider({
            directionNav: true,
            pauseOnAction: false,
            slideshowSpeed: 5000, // 自动播放速度毫秒
            animationSpeed: 600, //滚动效果播放时长
            keyboardNav: true, //Boolean:left/right keys键盘左右方向键控制图片滑动
            mousewheel: false, //Boolean: mousewheel鼠标滚轮控制制图片滑动
        });
    });
</script>
<script>
//    (function() {
//
//        var  $backToTopEle = $('<div style="margin: 0 auto;width: 100%;">'+
//                '<a class="back-to-top" href="#top"></a>'+
//                '</div>').appendTo($("body")).click(function() {
//            $("html, body").animate({ scrollTop: 0 }, 120);
//        }), $backToTopFun = function() {
//            var st = $(document).scrollTop(), winh = $(window).height();
//            (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
//            //IE6下的定位
//            if (!window.XMLHttpRequest) {
//                $backToTopEle.css("top", st + winh - 60);
//            }
//        };
//		console.log($backToTopEle)
//        $(window).bind("scroll", $backToTopFun);
//        $(function() { $backToTopFun(); });
//    })();
    (function() {
        var backBtn= $('.back-to-top');
        function aa() {
            var st = $(document).scrollTop(), winh = $(window).height();
            console.log(st);
            (st > 0)? backBtn.show(): backBtn.hide();
            //IE6下的定位
            if (!window.XMLHttpRequest) {
                backBtn.css("top", st + winh - 60);
            }
//            if($(window).scrollTop()>$(window).height()){
//                backBtn.fadeIn();
//            }else{
//                backBtn.fadeOut();
//            }
        }
        function bb() {
            var st = $(".main-scroll").scrollTop(), winh = $(window).height();
            console.log(st);
            (st > 0)? backBtn.show(): backBtn.hide();
            //IE6下的定位
            if (!window.XMLHttpRequest) {
                backBtn.css("top", st + winh - 60);
            }
//            if($(window).scrollTop()>$(window).height()){
//                backBtn.fadeIn();
//            }else{
//                backBtn.fadeOut();
//            }
        }

        backBtn.on('click',function () {
            $('body').animate(
                    {
                        scrollTop:0
                    },120
            )
            $('.main-scroll').animate(
                    {
                        scrollTop:0
                    },120
            )

        })
        $(".main-scroll").on('scroll',function () {
            console.log("56789")
            bb()
        })
        $(window).on('scroll',function () {
            console.log("56789")
            aa()
        })
        aa()
    })();


    $(".tow-video-content-img").on("click",function () {
        $(".focusvideo-pop").addClass("show-ul");
    });
    $("#close").on("click",function () {
        $(".focusvideo-pop").removeClass("show-ul");
        $("#videovl").attr("autoplay", false);
        $("#videovl").attr("src", "");
    });
    $(".videosrcval").on("click", function () {
        var srcval = $(this).attr("datasrc");
        $("#videovl").attr("src", srcval);
        document.getElementById("videovl").autoplay = "autoplay";

    })
</script>
@yield('javascript')
</body>
</html>