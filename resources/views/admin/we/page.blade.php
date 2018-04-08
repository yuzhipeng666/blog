@extends('admin.layout_main')
@inject('types', 'App\Models\We')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">我们</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row" >
            <div class="col-lg-12">
                <a href="{{asset("/addAdmwe")}}" type="button" class="btn btn-success">添加我们</a>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <form class="form-inline" action="{{asset('admweListchax')}}" enctype='multipart/form-data' method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-xs-2">
                        <input  type="text" name="title" class="form-control" placeholder="请输入Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <input  type="text" name="name" class="form-control" placeholder="请输入Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <select  name="type" class="form-control" >
                            <option  value="">请选择类型</option>
                            <option  value="a">a</option>
                            <option  value="b">b</option>
                            <option  value="c">c</option>
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
                <caption>宣传片列表</caption>
                <thead>
                <tr>
                    <th>序号</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>类型</th>
                    <th>图片</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($we as $k => $v )
                    <tr>
                        <th>{{$k+1}} </th>
                        <th>{{$v['title']}} </th>
                        <th>{{$v['name']}} </th>
                        <th>{{$v['url']}} </th>
                        <th>{{$types->typest($v['type'])}} </th>
                        <th><img width="80px" height="50px" src="{{asset('storage/'.$v['path'])}}" alt=""> </th>
                        <th>
                            <a href="{{asset("/upAdmwe/".$v['id'])}}" type="button" class="btn btn-info">修改</a>
                            <a href="javascript:if(confirm('确认删除吗?'))window.location='{{asset("/deletcAdmwe/".$v['id'])}}'" type="button" class="btn btn-danger">删除</a>
                            <a href="{{asset("/statusAdmwe/".$v['id']."/".$v['status'])}}" type="button" class="btn btn-warning">{{$v['status'] == 'Y' ? '启用': '禁用' }}</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{ $we->links() }}
        <!-- /.row -->
        <!-- /.row -->
    </div>
@section('javascript')

@stop

@stop

