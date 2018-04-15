@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">新闻添加</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal"  id="myForm"  action="{{asset('createAdmnews')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-xs-2">Title</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="title" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">编辑</label>
                <div class=" col-xs-8">
                    <div id="ueditor" class="edui-default">
                        @include('UEditor::head')
                    </div>
                </div>

            </div>
            <input type="hidden" id="content" value="">
            <div class="form-group">
                <div class="col-xs-offset-5">
                    <button type="submit"  class="btn btn-primary">提交</button>

                </div>
            </div>
        </form>
    </div>

@section('javascript')
    {{--<script id="ueditor" name="content" type="text/plain">--}}
    {{--这里写你的初始化内容--}}
{{--</script>--}}
    <script id="ueditor"></script>
    <script>
        var content;
        var ue=UE.getEditor("ueditor");
        ue.ready(function(){
            //因为Laravel有防csrf防伪造攻击的处理所以加上此行
            ue.execCommand('serverparam','_token','{{ csrf_token() }}');
             content = ue.getContent();

        });

    </script>
@stop

@stop

