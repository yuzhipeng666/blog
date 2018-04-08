@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">我们修改</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('upsetAdmwe')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$weup->id}}">
            <div class="form-group">
                <label class="col-xs-2">Title</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="title" value="{{$weup->title}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Name</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" value="{{$weup->name}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" value="{{$weup->url}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="type" class="form-control" >
                        <option @if($weup->type == "a") selected @endif value="a">a</option>
                        <option @if($weup->type == "b") selected @endif  value="b">b</option>
                        <option @if($weup->type == "c") selected @endif value="c">c</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">上传图片</label>
                <div class="col-xs-8">
                    <input id="image_select"  type="file"  name="file" class="form-control" value="{{$weup->path}}">
                    <input type="hidden" name="body_pic_back" value="{{$weup->path}}">
                    <div id="image_back">{{$weup->path}}</div>
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