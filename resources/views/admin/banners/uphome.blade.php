@extends('admin.layout_main')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">首页信息</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form-horizontal" action="{{asset('upsetHomeinformation')}}" enctype='multipart/form-data' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-xs-2">Keywords</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="keywords" value="{{$bannersup->keywords}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Description</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="description" value="{{$bannersup->description}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Address</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="address" value="{{$bannersup->address}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Phone</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="phone" value="{{$bannersup->phone}}" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2">Url</label>
                <div class="col-xs-8">
                    <input required="required" type="text" name="url" value="{{$bannersup->url}}" class="form-control" >
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