<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset("/css/all.min.css")}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="navigation">
                <div class="container">
                    <nav class="d-flex justify-content-between align-items-center">
                        <div class="logo_ d-flex justify-content-between align-items-center">
                            <div class="img">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <h4 class=" d-none d-md-inline">Instagram-clone</h4>
                        </div>
                    @guest
                        <div>
                            @if (Route::has('login'))
                                <a class="btn btn-head btn-outline-dark me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="btn btn-head btn-outline-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </div>
                        
                    @else
                        <ul class="navbar_ d-flex flex-row-reverse list-unstyled justify-content-between align-items-center">
                            <li class="navbar_items" style="padding-top:0 ">
                                <a href="#" class="navbar_item test" id="dropdown">
                                    <span class="user-image">
                                        <img src="{{asset('image/avatarjpg.png')}}" alt="" class="img-thumbnail rounded-circle" >
                                    </span>
                                </a>
                                <ul class="dropdown_ list-unstyled d-none" id="setting">
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
                                        <a href="{{ route('logout') }}" class="d-flex align-items-center"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>logout</span>
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
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
                        </ul>
                        @endguest
                        
                    </nav>
                </div>
            </div>
            
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/all.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</body>
</html>
