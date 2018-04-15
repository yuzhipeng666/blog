<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>快象影视后台管理</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset("./admin/startbootstrap/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset("./admin/startbootstrap/vendor/metisMenu/metisMenu.min.css")}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset("./admin/startbootstrap/dist/css/sb-admin-2.css")}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset("./admin/startbootstrap/vendor/morrisjs/morris.css")}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset("./admin/startbootstrap/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">快象后台管理</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>-->
                    <!--</li>-->
                    <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>-->
                    <!--</li>-->
                    <li><a href="{{asset("admins")}}"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="chs">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{asset("/banner")}}"><i class="fa fa-dashboard fa-fw"></i>Banners</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/admpromotional")}}"><i class="fa fa-table fa-fw"></i>宣传片</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/admsections")}}"><i class="fa fa-bar-chart-o fa-fw"></i>影视栏目</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/admdiffusion")}}"><i class="fa fa-files-o fa-fw"></i>媒体推广</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/admwe")}}"><i class="fa fa-sitemap fa-fw"></i>我们</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/admnews")}}"><i class="fa fa-sitemap fa-fw"></i>新闻</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{asset("/upHomeinformation")}}"><i class="fa fa-sitemap fa-fw"></i>首页信息</a>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

@yield('content')
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset("./web/static/js/jquery.min-1.12.4.min.js")}}"></script>
@yield('javascript')
<!-- Bootstrap Core JavaScript -->
<script src="{{asset("./admin/startbootstrap/vendor/bootstrap/js/bootstrap.min.js")}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset("./admin/startbootstrap/vendor/metisMenu/metisMenu.min.js")}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset("./admin/startbootstrap/vendor/raphael/raphael.min.js")}}"></script>
{{--<script src="{{asset("./admin/startbootstrap/vendor/morrisjs/morris.min.js")}}"></script>--}}
{{--<script src="{{asset("./admin/startbootstrap/data/morris-data.js")}}"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{asset("./admin/startbootstrap/dist/js/sb-admin-2.js")}}"></script>
</body>

</html>
