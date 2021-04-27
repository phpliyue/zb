<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    @section('css')
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    @show

</head>

<body>
<div id="wrapper">
    @section('navbar')
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">中宝石油</span>
                                <span class="text-muted text-xs block">编辑 <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element" style="color:#e6ff00;">
                            ZB
                        </div>
                    </li>
                    <li class="@yield('home')">
                        <a href="/home"><i class="fa fa-diamond"></i> <span class="nav-label">概况</span></a>
                    </li>
                    <li class="@yield('user')">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">用户管理</span> <span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="@yield('user_list')"><a href="/user_list">用户列表</a></li>
                            <li class="@yield('user_add')"><a href="/user_add">用户添加</a></li>
                        </ul>
                    </li>


                    <li class="@yield('company')">
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">公司管理 </span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@yield('company_list')"><a href="/company_list">公司列表</a></li>
                            <li class="@yield('company_add')"><a href="/company_add">公司添加</a></li>
                        </ul>
                    </li>
                    <li class="@yield('order')">
                        <a href="/order_list"><i class="fa fa-flask"></i> <span class="nav-label">订单管理</span></a>
                    </li>
                    <li class="@yield('customer')">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">企业管理</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li @yield('customer_list')><a href="/customer_list">客户列表</a></li>
                            <li @yield('customer_add')><a href="/customer_add">添加客户</a></li>
                        </ul>
                    </li>
                    <li class="@yield('oil')">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">油厂管理</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@yield('oil_list')"><a href="/oil_list">油厂列表</a></li>
                            <li class="@yield('oil_add')"><a href="/oil_add">油厂添加</a></li>
                        </ul>
                    </li>
                    <li class="@yield('vehicle')">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">车辆管理</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@yield('vehicle_list')"><a href="/vehicle_list">车辆列表</a></li>
                            <li class="@yield('vehicle_add')"><a href="/vehicle_add">车辆添加</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    @show

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" action="">
                        <div class="form-group">
                            <input type="text" placeholder="输入要搜索的内容" class="form-control" name="top-search"
                                   id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> 退出登入
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            @section('content')

            @show
        </div>
    </div>
    @section('js')
    <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Flot -->
        <script src="js/plugins/flot/jquery.flot.js"></script>
        <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="js/plugins/flot/jquery.flot.pie.js"></script>
        <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
        <script src="js/plugins/flot/jquery.flot.time.js"></script>

        <!-- Pity -->
        <script src="js/plugins/peity/jquery.peity.min.js"></script>
        <script src="js/demo/peity-demo.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- Jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- EayPIE -->
        <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <!-- Sparkline demo data  -->
        <script src="js/demo/sparkline-demo.js"></script>
        {{--vue--}}
        <script src="js/vue.js"></script>
@show
</body>
</html>


