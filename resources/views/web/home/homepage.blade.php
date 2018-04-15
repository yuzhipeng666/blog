@extends('web.layout_main')
@inject('sstt', 'App\Models\Homeinformation')
@section('content')

    <div class="main main-scroll" id="main">

        <div>
            <!-- Slider begin -->
            <div class="slider">
                <div class="flexslider" id="flexslider">
                    <ul class="slides">
                        @foreach($bannerdata as $k => $v)
                        {{--<li class="flex-active" style="width:100%; display: list-item;"><img--}}
                                    {{--src="{{asset("./web/static/images/lunbo1.jpg")}}" style="width: 100%;"></li>--}}
                           <li class="flex-active" style="width:100%; display: list-item;"><a href="javascript:void(0)" title="{{$v['title']}}"><img
                                      class="tow-video-content-img videosrcval" datasrc="{{$v['url']}}"  src="{{asset('storage/'.$v['path'])}}" style="width: 100%;"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Slider end -->
        </div>

        <div class="main-content clear" style="min-height: 754px;">

            <!-- Product list begin -->
            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1><a href="{{asset("/promotional")}}">快象作品</a></h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($promotionaldata as $k => $v)
                                    <li><a class="tow-video-content-img videosrcval" datasrc="{{$v['url']}}" href="javascript:void(0)" title="{{$v['title']}}">
                                            <div class="pic"><img class="lazy "
                                                                  src="{{asset('storage/'.$v['path'])}}"
                                                                  style="display: inline;height: 100%"><span></span></div>
                                            <div class="info">
                                                {{--<p class="sub-title">品牌纪录片 | 服装 | 2018.1.2</p>--}}
                                                <p class="title">{{$v['title']}}</p>
                                            </div>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{--<div class="panel-ft"><a href="page/works.html" class="more">了解更多 》</a>--}}
                    </div>
                </div>

            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1><a href="{{asset("/we")}}">快象团队</a></h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($we as $k => $v)
                                    <li><a  href="javascript:void(0)" title="{{$v['name']}}">
                                            <div class="pic"><img class="lazy"
                                                                  src="{{asset('storage/'.$v['path'])}}"
                                                                  style="display: inline;height: 100%"><span></span></div>
                                            <div class="info">
                                                <p class="title">{{$v['name']}}</p></div>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            {{--<div class="panel-wrap bg-gray">--}}
                {{--<div class="panel home-team clear">--}}
                    {{--<div class="panel-hd">--}}
                        {{--<h1>快象团队</h1>--}}
                    {{--</div>--}}
                    {{--<div class="panel-bd">--}}
                        {{--<div class="team clear">--}}
                            {{--<ul>--}}
                                {{--@foreach($we as $k => $v)--}}
                                    {{--<li>--}}
                                        {{--<img class="lazy" width="100%" style="display: inline;" src="{{asset('storage/'.$v['path'])}}">--}}
                                        {{--<div><span><p class="name">{{$v['name']}}</p></span></div>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                                    {{--<div style="clear: both"></div>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd" style="margin-right: 10px!important;margin-left: 10px!important;">
                        <h1>新闻动态</h1>
                        <div class="xinwen" style="float: left;width: 100%">
                            @foreach($newsdata as $k => $v)
                                <a href="{{asset("/homeid/".$v['id'])}}">{{$v['title']}}</a>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            </div>

            <div class="panel-wrap">
                <div class="panel home-contact">
                    <div class="panel-bd" >
                        <div class="">
                            <h3>联系方式 </h3>
                            <p><span>地址：</span><a href="">{{$sstt->homedata()->address}}</a></p><br>
                            <p><span>电话：</span><a href="tel:{{$sstt->homedata()->phone}}">{{$sstt->homedata()->phone}} </a>
                            </p><br>
                            <p><span>网址：</span><a href="{{$sstt->homedata()->url}}">{{$sstt->homedata()->url}}</a>
                            </p>

                        </div>
                        <div class="">
                            <img width="80px" class="lazy"src="{{asset("./web/static/images/WechatIMG5.jpeg")}}">
                            <img width="80px" class="lazy"src="{{asset("./web/static/images/WechatIMG6.jpeg")}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact end -->

        </div>

    </div>
@section('javascript')
    <script>
        $(function () {

//            var video1=document.getElementById("cideo");
//            video1.onclick=function(){
//                if(video1.paused){
//                    video1.play();
//                }else{
//                    video1.pause();
//                }
//            }
        })
    </script>
@stop

@stop

