<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="navigation">
                <div class="container">
                    <nav class="d-flex justify-content-between align-items-center">
                        <a href="{{ url('/') }}" class="logo_ d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="img">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="logo_png d-none d-md-block">
                                <img src="{{asset("/images/Logo.png")}}" alt="logo" class="img-fluid"> 
                            </div>
                        </a>
                        @guest
                            <ul class="navbar_ btns d-flex flex-row-reverse list-unstyled justify-content-between align-items-center ">
                                @if (Route::has('login'))
                                    <li  class="navbar_items"><a href="{{ route('login') }}" class="navbar_item btn btn-outline-dark ">login</a></li>
                                @endif
                                @if (Route::has('register'))
                                    <li  class="navbar_items"><a href="{{ route('register') }}" class="navbar_item btn btn-outline-dark ">Register</a></li>
                                @endif
                            </ul>
                        @else
                            <ul class="navbar_ d-flex flex-row-reverse list-unstyled justify-content-between align-items-center ">
                                <li class="navbar_items">
                                    <a href="#" class="navbar_item " id="dropdown">
                                        <span class="user-image">
                                            <img src="images/profile.jpg" alt="" class="img-thumbnail rounded-circle">
                                        </span>
                                    </a>
                                    <ul class="dropdown_ list-unstyled" id="setting">
                                        <div class="my-3 text-center user-name-text py-3">
                                            {{Auth::user()->username}}
                                        </div>
                                        <li class="dropdown_item">
                                            <a href="#" class="d-flex  align-items-center">
                                                <i class="far fa-user"></i>
                                                <span>profile</span>
                                            </a> 
                                        </li>
                                        <li class="dropdown_item">
                                            <a href="#" class="d-flex  align-items-center">
                                                <i class="fas fa-cog"></i>
                                                <span>setting</span>
                                            </a>
                                        </li>
                                        <li class="dropdown_item">
                                            <!--<a href="#" class="d-flex align-items-center">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>logout</span>
                                            </a>-->
                                            <a class="d-flex align-items-center" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>logout</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar_items">
                                    <a href="#" class="navbar_item">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </li>
                                <li class="navbar_items">
                                    <a href="#" class="navbar_item">
                                        <i class="far fa-compass"></i>
                                    </a>
                                </li>
                        @endguest
                            </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--<script type="module" src="{{ asset('js/app2.js') }}" defer></script>-->
</body>
</html>
