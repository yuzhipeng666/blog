@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">影视栏目修改</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('upsetAdmsections')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$sectionsup->id}}">
            <div class="form-group">
                <label class="col-xs-2">Title</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="title" value="{{$sectionsup->title}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Name</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" value="{{$sectionsup->name}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" value="{{$sectionsup->url}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="type" class="form-control" >
                        <option @if($sectionsup->type == "a") selected @endif value="a">那时那你</option>
                        <option @if($sectionsup->type == "b") selected @endif  value="b">电影知道答案</option>
                        <option @if($sectionsup->type == "c") selected @endif value="c">比较好玩</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">上传图片</label>
                <div class="col-xs-8">
                    <input id="image_select"  type="file"  name="file" class="form-control" value="{{$sectionsup->path}}">
                    <input type="hidden" name="body_pic_back" value="{{$sectionsup->path}}">
                    <div id="image_back">{{$sectionsup->path}}</div>
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