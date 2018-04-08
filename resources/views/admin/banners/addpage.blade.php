@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banners添加</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('createBanner')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-xs-2">名称</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="name" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">类型</label>
                <div class="col-xs-2">
                    <select required="required" name="types" class="form-control" >
                        <option  value="1">首页</option>
                        <option  value="2">宣传片</option>
                        <option  value="3">影视栏目</option>
                        <option  value="4">媒体推广</option>
                        <option  value="5">我们</option>
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

