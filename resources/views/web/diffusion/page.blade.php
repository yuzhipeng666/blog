@extends('web.layout_main')

@section('content')

    <div class="main main-scroll" id="main">

        <div>
            <!-- Slider begin -->
            <div class="slider">
                <div class="flexslider" id="flexslider">
                    <ul class="slides">
                        @foreach($bannerdata as $k => $v)
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
                        <h1>视频推广</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($diffusiondataA as $k => $v)
                                    <li><a href="{{$v['url']}}" title="{{$v['title']}}">
                                            <div class="pic"><img class="lazy"
                                                                  src="{{asset('storage/'.$v['path'])}}"
                                                                  style="display: inline;height: 100%"><span></span></div>
                                            <div class="info">
                                                {{--<p class="sub-title">品牌纪录片 | 服装 | 2018.1.2</p>--}}
                                                <p class="title">{{$v['title']}}</p></div>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{--<div class="panel-ft"><a href="page/works.html" class="more">了解更多 》</a>--}}
                    {{--</div>--}}
                </div>
            </div>

            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1>新闻发布</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($diffusiondataB as $k => $v)
                                    <li><a href="{{$v['url']}}" title="{{$v['title']}}">
                                            <div class="pic"><img class="lazy"
                                                                  src="{{asset('storage/'.$v['path'])}}"
                                                                  style="display: inline;height: 100%"><span></span></div>
                                            <div class="info">
                                                {{--<p class="sub-title">品牌纪录片 | 服装 | 2018.1.2</p>--}}
                                                <p class="title">{{$v['title']}}</p></div>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1>大V营销</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($diffusiondataC as $k => $v)
                                    <li><a href="{{$v['url']}}" title="{{$v['title']}}">
                                            <div class="pic"><img class="lazy"
                                                                  src="{{asset('storage/'.$v['path'])}}"
                                                                  style="display: inline;height: 100%"><span></span></div>
                                            <div class="info">
                                                {{--<p class="sub-title">品牌纪录片 | 服装 | 2018.1.2</p>--}}
                                                <p class="title">{{$v['title']}}</p></div>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="panel-wrap">
                    <div class="panel">
                        <div class="panel-hd">
                            <h1>推广介绍</h1>

                        </div>
                        <div class="text-title-div">
                            <p class="text-title text-titlep">快象影视品牌全案 = 战略定位+视觉设计+传播营销
                            </p>
                            <p class="text-title text-titlep">
                                快象团队由来自广告学、市场营销学、心理学、美学、语言学、社会
                                学、文化学等众多领域的专家组成，他们来自五湖四海，怀着共同的品牌
                                理想走到一起，他们热情 四溢，挑战创意极限。先知创始人思翰说，“我
                                们走到一起为了一个共同的目标，帮助客户实现品牌梦想，其实这就是我
                                们的理想。与客户一起见证品牌的成长，就 像看着自己孩子一天天长大，
                                倾注所有，矢志不渝。”本着以上原则，快象与众多国内外客 户建立了深
                                厚的情谊。</p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="panel-wrap">
                <div class="panel home-contact">

                    <div class="panel-bd">
                        <div class="">
                            <h3>联系方式 </h3>
                            <p><span>地址：<a href="">上海浦东国际传媒中心1818室</a></p><br>
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

