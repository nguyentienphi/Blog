<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/all.css')}}" />
</head>
<body>
    <header id="header">
        <div id="nav">
            <div id="nav-top">
                <div class="container">
                    <ul class="nav-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div></div>
                    <div class="nav-logo">
                        <h1>@lang('message.logo')</h1>
                    </div>
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            {{ Form::open() }}
                                {{ Form::text('search', '', ['class' => 'input', 'placeholder' => 'Enter your search...']) }}
                            {{ Form::close() }}
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nav-bottom">
                <div class="container">
                    <ul class="nav-menu nav-bar">
                        <li><a href="{{ route('home') }}">@lang('message.home')</a></li>
                        <li class="has-dropdown">
                            <a href="">@lang('message.category')</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        <li><a href=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">@lang('message.contact')</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">@lang('message.login')</a></li>
                            <li><a href=" {{ route('register') }} ">@lang('message.register')</a></li>
                        @else
                        <li class="has-dropdown">
                            <a>{{Auth::user()->name}}
                                @if(isset(Auth::user()->avatar))
                                    <img src="../storage/image/avatar/{{Auth::user()->avatar}}" class="img-circle" alt="Cinque Terre" width="30px" height="30px">
                                @else
                                    <img src="../storage/image/abstract-user-flat-3.svg" class="img-circle" alt="Cinque Terre" width="30px" height="30px">
                                @endif
                            </a>
                            <ul class="dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" id="logout" onclick="return false">
                                    @lang('message.logout')
                                </a>
                                {{ Form::open(['route' => 'logout', 'id' => 'logout-form', 'display' => 'none']) }}
                                {{ Form::close() }}
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div id="nav-aside">
                <ul class="nav-aside-menu">
                    <li><a href="index.html">@lang('message.home')</a></li>
                    <li class="has-dropdown"><a>@lang('message.category')</a>
                        <ul class="dropdown">
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">@lang('message.contact')</a></li>
                </ul>
                <button class="nav-close nav-aside-close"><span></span></button>
            </div>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <div >
                            <a href="index.html" class="logo"><img src="./img/logo-alt.png" alt=""></a>
                        </div>
                        <p>@lang('message.info')</p>
                        <ul class="contact-social">
                            <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">@lang('message.category')</h3>
                        <div class="category-widget">
                            <ul>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="{{ route('home') }}">@lang('message.home')</a></li>
                        <li><a href="">@lang('message.contact')</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                         &copy;@lang('message.infomation')<i class="fa fa-heart-o" aria-hidden="true"></i> @lang('message.by') <a href="https://colorlib.com" target="_blank">@lang('message.colorlib')</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
</body>
</html>
