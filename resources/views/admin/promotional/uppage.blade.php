@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">宣传片修改</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('upsetAdmpromotional')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$promotionalup->id}}">
            <div class="form-group">
                <label class="col-xs-2">Title</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="title" value="{{$promotionalup->title}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Name</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" value="{{$promotionalup->name}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" value="{{$promotionalup->url}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="type" class="form-control" >
                        <option @if($promotionalup->type == "a") selected @endif value="a">企业宣传片</option>
                        <option @if($promotionalup->type == "b") selected @endif  value="b">电视广告TVC</option>
                        <option @if($promotionalup->type == "c") selected @endif value="c">动画制作</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">上传图片</label>
                <div class="col-xs-8">
                    <input id="image_select"  type="file"  name="file" class="form-control" value="{{$promotionalup->path}}">
                    <input type="hidden" name="body_pic_back" value="{{$promotionalup->path}}">
                    <div id="image_back">{{$promotionalup->path}}</div>
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