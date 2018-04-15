@extends('admin.layout_main')
{{--@inject('types', 'App\Models\Diffusion')--}}
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">新闻</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row" >
            <div class="col-lg-12">
                <a href="{{asset("/addAdmnews")}}" type="button" class="btn btn-success">添加新闻</a>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
        </div>
        <div>
            <table class="table table-bordered">
                <caption>新闻列表</caption>
                <thead>
                <tr>
                    <th>序号</th>
                    <th>Title</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $k => $v )
                    <tr>
                        <th>{{$k+1}} </th>
                        <th>{{$v['title']}} </th>
                        <th>
                            <a href="javascript:if(confirm('确认删除吗?'))window.location='{{asset("/deletcAdmnews/".$v['id'])}}'" type="button" class="btn btn-danger">删除</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    {{ $news->links() }}
        <!-- /.row -->
        <!-- /.row -->
    </div>
@section('javascript')

@stop

@stop

