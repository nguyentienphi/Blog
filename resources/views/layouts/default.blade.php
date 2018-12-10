<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/all.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/log.css')}}" />
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
                    <div class="nav-logo">
                        <h1>Nguyễn Tiến Phi</h1>
                    </div>
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form>
                                <input class="input" name="search" placeholder="Enter your search...">
                            </form>
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
                        <li><a href="">{{ trans('message.home') }}</a></li>
                        <li class="has-dropdown">
                            <a href="">{{ trans('message.category') }}</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        @foreach($category as $categories)
                                            <li><a href="">{{ $categories->name }}</a></li>
                                        @endforeach()
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">{{ trans('message.contact') }}</a></li>
                        @guest
                            <li style="float: right" >
                                <a  href="{{ route('login') }}">{{ trans('message.login') }}</a>
                            </li>
                            <li style="float: right">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ trans('message.register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="has-dropdown" style="float: right">
                                <a>{{Auth::user()->name}} <img src="../storage/image/abstract-user-flat-3.svg" width="30px"></a>
                                <ul class="dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" id="logout">
                                    {{ trans('message.logout') }}
                                    </a>
                                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf
                                        </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div id="nav-aside">
                <ul class="nav-aside-menu">
                    <li><a href="index.html">{{ trans('message.home') }}</a></li>
                    <li class="has-dropdown"><a>{{trans('message.category')}}</a>
                        <ul class="dropdown">
                            @foreach($category as $categories)
                                <li><a href="">{{ $categories->name }}</a></li>
                            @endforeach()
                        </ul>
                    </li>
                    <li><a href="about.html">{{ trans('message.contact') }}</a></li>
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
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                        <ul class="contact-social">
                            <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">{{ trans('message.category') }}</h3>
                        <div class="category-widget">
                            <ul>
                                @foreach($category as $categories)
                                    <li><a href="">{{ $categories->name }}</a></li>
                                @endforeach()
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="footer-widget">
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="">{{ trans('message.home') }}</a></li>
                        <li><a href="contact.html">{{ trans('message.contact') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
</body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#logout').click(function(e){
                e.preventDefault();
                $('#logout-form').submit();
            })
        });
    </script>
</html>