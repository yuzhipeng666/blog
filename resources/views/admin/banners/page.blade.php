@extends('admin.layout_main')
@inject('types', 'App\Models\Banners')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banner</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row" >
            <div class="col-lg-12">
                <a href="{{asset("/addBanner")}}" type="button" class="btn btn-success">添加Banner</a>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
                <form class="form-inline" action="{{asset('bannerListchax')}}" enctype='multipart/form-data' method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input  type="text" name="name" class="form-control" placeholder="请输入名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <select  name="types" class="form-control" >
                                <option  value="">请选择类型</option>
                                <option  value="1">首页</option>
                                <option  value="2">宣传片</option>
                                <option  value="3">影视栏目</option>
                                <option  value="4">媒体推广</option>
                                <option  value="5">我们</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <select  name="status" class="form-control" >
                                <option  value="">请选择状态</option>
                                <option  value="Y">启用</option>
                                <option  value="N">禁用</option>
                            </select>
                        </div>
                    </div>
                    <button type="submist" class="btn btn-success ">查询</button>
                </form>
        </div>
        <div>
            <table class="table table-bordered">
                <caption>Banner列表</caption>
                <thead>
                <tr>
                    <th>序号</th>
                    <th>名称</th>
                    <th>Url</th>
                    <th>类型</th>
                    <th>Banner图</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banners as $k => $v )
                <tr>
                    <th>{{$k+1}} </th>
                    <th>{{$v['name']}} </th>
                    <th>{{$v['url']}} </th>
                    <th>{{$types->typest($v['types'])}} </th>
                    <th><img width="80px" height="50px" src="{{asset('storage/'.$v['path'])}}" alt=""> </th>
                    <th>
                        <a href="{{asset("/upBanner/".$v['id'])}}" type="button" class="btn btn-info">修改</a>
                        <a href="javascript:if(confirm('确认删除吗?'))window.location='{{asset("/deletcBanner/".$v['id'])}}'" type="button" class="btn btn-danger">删除</a>
                        <a href="{{asset("/statusBanner/".$v['id']."/".$v['status'])}}" type="button" class="btn btn-warning">{{$v['status'] == 'Y' ? '启用': '禁用' }}</a>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{ $banners->links() }}
        <!-- /.row -->
        <!-- /.row -->
    </div>
@section('javascript')

@stop

@stop

