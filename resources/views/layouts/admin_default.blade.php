<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index2.html" class="logo">
                <span class="logo-lg">@lang('message.admin')</span>
            </a>
            <nav class="navbar navbar-static-top">
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        {{ Html::image(asset('storage/image/avatar/'.Auth::user()->avatar), '', ['class' => 'img-circle']) }}
                    </div>
                    <div class="pull-left info">
                         {{ Auth::user()->name }}
                    </div>
                </div>
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">@lang('message.main_navigation')</li>
                    <li class="active treeview menu-open">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>@lang('message.dashboard')</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>@lang('message.table')</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> @lang('message.category_management')</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> @lang('message.user')</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> @lang('message.post')</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> @lang('message.comment')</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <span>@lang('message.logout')</span>
                        </a>
                    </li>

                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>@lang('message.dashboard')</h1>
            </section>
            <div>
                @yield('content')
            </div>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                @lang('message.version')
            </div>
            <strong>@lang('message.copyright') &copy;<a href="https://adminlte.io">@lang('message.cource')</a></strong>@lang('message.allright')
        </footer>
    </div>
    <script src="{{asset('js/adminlte.min.js')}}"></script>
</body>
</html>
