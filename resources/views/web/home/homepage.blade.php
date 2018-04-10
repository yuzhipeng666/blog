@extends('web.layout_main')

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
                           <li class="flex-active" style="width:100%; display: list-item;"><a href="{{$v['url']}}" title="{{$v['title']}}"><img
                                        src="{{asset('storage/'.$v['path'])}}" style="width: 100%;"></a></li>
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
                                    <li><a href="{{$v['url']}}" title="{{$v['title']}}">
                                            <div class="pic"><img class="lazy"
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
                                    <li><a href="{{$v['url']}}" title="{{$v['name']}}">
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
                    <div class="panel-hd">
                        <h1>新闻动态</h1>
                    </div>
                </div>
            </div>

            </div>

            <div class="panel-wrap">
                <div class="panel home-contact">
                    <div class="panel-bd">
                        <div class="">
                            <h3>联系方式 </h3>
                            <p><span>地址：</span><a href="">上海浦东国际传媒中心1818室</a></p><br>
                            <p><span>电话：</span><a href="tel:186073566666">186073566666 </a><a href="tel:021-888888888">021-888888888</a>
                            </p><br>
                            <p><span>网址：</span><a href="http://i.youku.com/i/UNTMzOTc1MTU2">http://i.youku.com/i/UNTMzOTc1MTU2</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact end -->

        </div>

    </div>
@section('javascript')

@stop

@stop

