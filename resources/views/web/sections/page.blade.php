@extends('web.layout_main')

@section('content')

    <div class="main main-scroll" id="main">

        <div>
            <!-- Slider begin -->
            <div class="slider">
                <div class="flexslider" id="flexslider">
                    <ul class="slides">
                        {{--<li class="flex-active" style="width:100%; display: list-item;"><img--}}
                                    {{--src="{{asset("./web/static/images/lunbo3.jpg")}}" style="width: 100%;"></li>--}}
                        @foreach($bannerdata as $k => $v)
                            <li class="flex-active" style="width:100%; display: list-item;"><img
                                        src="{{asset('storage/'.$v['path'])}}" style="width: 100%;"></li>
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
                        <h1>快象栏目：那时那你</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                {{--<li><a href="page/worksDetail.html?id=29" title="Levi's">--}}
                                        {{--<div class="pic"><img class="lazy" --}}
                                                              {{--src="http://aosum.com/resource/works/levis1.jpg"--}}
                                                              {{--style="display: inline;"><span></span></div>--}}
                                        {{--<div class="info"><p class="sub-title">品牌纪录片 | 服装 | 2018.1.2</p>--}}
                                            {{--<p class="title">Levi's</p></div>--}}
                                    {{--</a></li>--}}
                                @foreach($sectionsdataA as $k => $v)
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
                    {{--<div class="panel-ft">--}}
                        {{--<a href="page/works.html" class="more">了解更多 》</a>--}}
                    {{--</div>--}}
                </div>
            </div>

            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1>快象栏目：电影知道答案</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($sectionsdataB as $k => $v)
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
                    {{--<div class="panel-ft">--}}
                        {{--<a href="page/works.html" class="more">了解更多 》</a>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="panel-wrap">
                <div class="panel">
                    <div class="panel-hd">
                        <h1>快象栏目：比较好玩</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($sectionsdataC as $k => $v)
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
                    {{--<div class="panel-ft">--}}
                        {{--<a href="page/works.html" class="more">了解更多 》</a>--}}
                    {{--</div>--}}

                </div>
                <div class="panel-wrap">
                    <div class="panel">
                        <div class="panel-hd">
                            <h1>快象影视</h1>

                        </div>
                        <div class="text-title-div">
                            <p class="text-title text-titlep">公司旗下野孩子Studio是优酷土豆视频网站知名自媒体，是2015年合
                                一集团开放生态大会估值过千万的自媒体之一，打造过《电影人生》《那
                                时那你》《电影知道答案》《比较好玩》四档网络栏目，视频播放总量过
                                2亿，积累了超100万粉丝。
                            </p>
                            <p class="text-title text-titlep">
                                目前，公司与阿里影业合作，已为《侠盗联盟》《敦刻尔克》《三生
                                三世十里桃花》《精灵宝可梦》《绝世高手》等电影和《反黑》《白夜追
                                凶》等电视剧定制营销视频，</p>

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
