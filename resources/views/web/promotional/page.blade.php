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
                                        {{--src="{{asset("./web/static/images/lunbo2.jpg")}}" style="width: 100%;"></li>--}}
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
                        <h1>企业宣传片</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($promotionaldataA as $k => $v)
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
                        <h1>电视广告TVC</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($promotionaldataB as $k => $v)
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
                        <h1>动画制作</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($promotionaldataC as $k => $v)
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
                            <h1>拍摄介绍</h1>

                        </div>
                        <div class="text-title-div">
                            <p class="text-title text-titlep">快象影视在上海、深圳拥有两大基地，公司由多位具有十年以上影视行
                                业经验的导演摄影师共同组建，联动北上广专业创作人才，为长三角、珠三
                                角乃至全国中高端客户提供企业宣传片、TVC广告片、微电影、MV、三维动画、
                                数字多媒体、产品展示片等的策划、拍摄、制作、营销服务。
                            </p>
                            <p class="text-title text-titlep">
                                快象影视认真对待每个环节，确保最终品质。将创新思维注入每件作品，
                                树立个性化的企业形象。凭借专业团队和良好口碑，先后为华为、深圳航空、
                                UC、阿里云、高斯贝尔、长青股份、江化微电子、三超股份、雷迪克科技、圣
                                邦科技、吉大通信等200多家大型企业和上市公司制作高水准的影视广告和商
                                业宣传片。</p>

                        </div>

                        <div class="text-title-div" style="margin-top: 35px;">
                            <img src="{{asset("./web/static/images/xcbott.jpg")}}" style="width: 100%;" alt="">

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

