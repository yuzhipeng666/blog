@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banners修改</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('upsetBanner')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$bannersup->id}}">
            <div class="form-group">
                <label class="col-xs-2">名称</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" value="{{$bannersup->name}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" value="{{$bannersup->url}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="types" class="form-control" >
                        <option @if($bannersup->types == "1") selected @endif value="1">首页</option>
                        <option @if($bannersup->types == "2") selected @endif  value="2">宣传片</option>
                        <option @if($bannersup->types == "3") selected @endif value="3">影视栏目</option>
                        <option @if($bannersup->types == "4") selected @endif value="4">媒体推广</option>
                        <option @if($bannersup->types == "5") selected @endif value="5">我们</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">上传图片</label>
                <div class="col-xs-8">
                    <input id="image_select"  type="file"  name="file" class="form-control" value="{{$bannersup->path}}">
                    <input type="hidden" name="body_pic_back" value="{{$bannersup->path}}">
                    <div id="image_back">{{$bannersup->path}}</div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-5">
                    <button type="submist" class="btn btn-primary">提交</button>

                </div>
            </div>
        </form>
    </div>



@stop
@section('javascript')
    <script type="text/javascript">
        $('#image_select').on('change',function(){
            console.log($(this)[0].files[0])
            $('#image_back').text($(this)[0].files[0].name);
        });
    </script>
@stop