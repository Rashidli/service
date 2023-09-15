<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('front/')}}/assets/css-dep/img/logo.ico">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/plugins.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/new_styles.css">
</head>

<body>
<header class="main-header">
    <div class="container">
        <div class="header-content d-flex justify-content-between align-items-center">
            <div class="logo_side">
                <a href="{{route('main_page')}}" class="header-logo">
                    <h3>Ofisiant</h3>
                </a>
            </div>
            <div class="header-right d-flex justify-content-end align-items-center">
                <div class="dropdown drop-lang">
                    <button class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        ENG
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down.svg" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">ENG</a></li>
                        <li><a class="dropdown-item" href="#">FRA</a></li>
                        <li><a class="dropdown-item" href="#">ESP</a></li>
                    </ul>
                </div>
                @if(Auth::guard('customer')->user())
                    @if(Auth::guard('customer')->user()->user_type == 1)
                        <a href="{{route('isaxtaran')}}"
                           class="register-btn new_color d-inline-flex align-items-center justify-content-center">
                            <span>Elan yerləşdir</span>
                            <img src="{{asset('front/')}}/assets/css/icons/add.svg" alt="">
                        </a>
                    @elseif(Auth::guard('customer')->user()->user_type == 2)
                        <a href="{{route('isciaxtaran')}}"
                           class="register-btn new_color d-inline-flex align-items-center justify-content-center">
                            <span>Elan yerləşdir</span>
                            <img src="{{asset('front/')}}/assets/css/icons/add.svg" alt="">
                        </a>
                    @elseif(Auth::guard('customer')->user()->user_type == 3)
                        <a href="{{route('mehsulaxtaran')}}"
                           class="register-btn new_color d-inline-flex align-items-center justify-content-center">
                            <span>Elan yerləşdir</span>
                            <img src="{{asset('front/')}}/assets/css/icons/add.svg" alt="">
                        </a>
                    @elseif(Auth::guard('customer')->user()->user_type == 4)
                        <a href="{{route('mehsulsatan')}}"
                           class="register-btn new_color d-inline-flex align-items-center justify-content-center">
                            <span>Elan yerləşdir</span>
                            <img src="{{asset('front/')}}/assets/css/icons/add.svg" alt="">
                        </a>
                    @endif
                @else

                    <a href="{{route('main_login')}}"
                       class="register-btn new_color d-inline-flex align-items-center justify-content-center">
                        <span>Elan yerləşdir</span>
                        <img src="{{asset('front/')}}/assets/css/icons/add.svg" alt="">
                    </a>
                @endif

{{--                <a href="{{route('main_login')}}" class="login-btn d-inline-flex align-items-center justify-content-center">--}}
{{--                    <span>Log in</span>--}}
{{--                    <img src="{{asset('front/')}}/assets/css/icons/login-icon.svg" alt="">--}}
{{--                </a>--}}

                @if(Auth::guard('customer')->user())
                    <a href="{{route('personal')}}" class="register-btn d-inline-flex align-items-center justify-content-center">

                        <span>{{Auth::guard('customer')->user()->name}}</span>
                        <img src="{{asset('front/')}}/assets/css/icons/profile.svg" alt="">
                    </a>
                        @else
                            <a href="{{route('main_login')}}" class="register-btn d-inline-flex align-items-center justify-content-center">

                                <span>Giriş</span>
                                <img src="{{asset('front/')}}/assets/css/icons/profile.svg" alt="">
                            </a>
                    @endif


            </div>
        </div>
    </div>
</header>
<div class="fixed-layer"></div>
