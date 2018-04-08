@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">影视栏目添加</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('createAdmsections')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-xs-2">Title</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="title" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Name</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">链接</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="type" class="form-control" >
                        <option  value="a">那时那你</option>
                        <option  value="b">电影知道答案</option>
                        <option  value="c">比较好玩</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">上传图片</label>
                <div class="col-xs-8">
                    <input required="required" type="file" name="file" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-5">
                    <button type="submist" class="btn btn-primary">提交</button>

                </div>
            </div>
        </form>
    </div>

@section('javascript')

@stop

@stop

