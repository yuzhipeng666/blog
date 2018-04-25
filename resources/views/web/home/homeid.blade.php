@extends('web.layout_main')
@inject('sstt', 'App\Models\Homeinformation')
@section('content')

    <div class="main main-scroll" id="main">

        <div class="main-content clear" style="min-height: 754px;">

            <!-- Product list begin -->
            <div class="panel-wrap">
                <div class="panel">
                    <div class="" style="margin-top:20px!important;margin-bottom: 20px!important;margin-right: 10px!important;margin-left: 10px!important;">
                        <div id="htmls">{{$newsid->content}}</div>
                    </div>
                </div>
            </div>

            </div>

        <div class="panel-wrap">
            <div class="panel home-contact">

                <div class="panel-bd">
                    <div class="">
                        <h3>快象文化传播（上海）有限公司 </h3>
                        <p><span>地址：</span><a href="">{{$sstt->homedata()->address}}</a></p><br/>
                        <p><span>电话：</span><a href="tel:{{$sstt->homedata()->phone}}">{{$sstt->homedata()->phone}} </a>
                        </p><br/>
                        <p><span>网址：</span><a href="{{$sstt->homedata()->url}}">{{$sstt->homedata()->url}}</a>
                        </p><br/>
                        <p><span>备案号：</span><a >沪ICP备17052966号-1</a>
                        </p>

                    </div>
                    <div class="">
                        <img width="80px" style="margin-right: 10px" class="lazy"src="{{asset("./web/static/images/WechatIMG5.jpeg")}}">
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
            $("#htmls").html($("#htmls").text());

        })
    </script>
@stop

@stop

