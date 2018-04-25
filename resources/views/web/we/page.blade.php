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
                            <li class="flex-active" style="width:100%; display: list-item;"><a href="javascript:void(0)" title="{{$v['title']}}"><img
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
                        <h1>快象花絮</h1>
                    </div>
                    <div class="panel-bd">
                        <div class="works">
                            <ul>
                                @foreach($wedataB as $k => $v)
                                    <li><a href="javascript:void(0)" title="{{$v['title']}}">
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
                            <h1>快象影视</h1>

                        </div>
                        <div class="text-title-div">
                            <p class="text-title text-titlep">
                                快象文化传播（上海）有限公司（以下称“快象影视”）在上海、深圳拥有两大基地，公司由多位具有十年以上影视行业经验的导演摄影师共同组建，联动北上广专业创作人才，为长三角、珠三角乃至全国中高端客户提供企业宣传片、TVC广告片、微电影、MV、三维动画、数字多媒体、产品展示片等的策划、拍摄、制作、营销服务。
                            </p>
                            <p class="text-title text-titlep">
                                在企业宣传片制作领域，无论策划、撰稿、拍摄还是后期制作，快象影视认真对待每个环节，确保最终品质。将创新思维注入每件作品，树立个性化的企业形象。凭借专业团队和良好口碑，先后为华为、深圳航空、UC、阿里云、高斯贝尔、长青股份、江化微电子、三超股份、雷迪克科技、圣邦科技、吉大通信等200多家大型企业和上市公司制作高水准的影视广告和商业宣传片。</p>

                            <p class="text-title text-titlep">
                                公司旗下野孩子Studio是优酷土豆视频网站知名自媒体，是2015年合一集团开放生态大会估值过千万的自媒体之一，打造过《电影人生》《那时那你》《电影知道答案》《比较好玩》四档网络栏目，视频播放总量过2亿，积累了超100万粉丝。
                            </p>
                            <p class="text-title text-titlep">
                                目前，公司与阿里影业合作，已为《侠盗联盟》 《敦刻尔克》 《三生三世十里桃花》 《精灵宝可梦》 《绝世高手》等电影和《反黑》 《白夜追凶》等电视剧定制营销视频，其中《侠盗联盟》宣发视频获得优酷网综合表现一等奖，《三生三世十里桃花》《敦刻尔克》《反黑》等宣发视频获得二等奖。

                            </p>
                            <p class="text-title text-titlep">
                                快象团队核心成员包括留学西班牙的艺术博士，云南艺术学院硕士研究生，以及中国美院、南京大学和重庆大学艺术学院等重点院校毕业的艺术生，成员曾在电视剧《北平无战事》、电影《影》等剧组参与拍摄，为杨丽萍舞蹈巡演拍摄纪录片，在导演、摄影、录音、后期制作上有着扎实的功底和丰富经验。

                            </p>
                            <p class="text-title text-titlep">
                                我们致力于成为您的事业伙伴。我们珍重并以真诚回报您给予的信任和期待。

                            </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="panel-wrap">
                <div class="panel home-contact">

                    <div class="panel-bd">
                        <div class="">
                            <h3>快象文化传播（上海）有限公司 </h3>
                            <p><span>地址：</span><a href="">{{$sstt->homedata()->address}}</a></p>
                            <p><span>电话：</span><a href="tel:{{$sstt->homedata()->phone}}">{{$sstt->homedata()->phone}} </a>
                            </p>
                            <p><span>网址：</span><a href="{{$sstt->homedata()->url}}">{{$sstt->homedata()->url}}</a>
                            </p>
                            <p><span>备案号：</span><a >沪ICP备17052966号-1</a>
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

@stop

@stop

