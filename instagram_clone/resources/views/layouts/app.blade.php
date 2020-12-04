<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--bootstrap-->

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/svg/instagram-logo.svg" style="height:22px; border-right:2px solid black;"
                            class="pr-3"></div>
                    <div class="pl-3 pt-.95" style="font-weight:bold;">Instagram</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-weight: bold;">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold; color:black;"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold; color:black;"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <div class="mt-1">
                            <a href="/home" title="Home" class="mr-3">
                                <img src="https://img.icons8.com/fluent-systems-regular/30/000000/home.png" />
                            </a>
                            <a href="/explore" title="Explore" class="mr-3">
                                <img src="https://img.icons8.com/ios-filled/30/000000/compass--v2.png" />
                            </a>
                            <a href="/profile/{{ Auth::user()->id }}">
                                <img src="{{ Auth::user()->profile->profileImage() }}" alt="" class="" width="35"
                                    height="35" style="border-radius:50%;">
                            </a>
                        </div>
                        <li class="nav-item dropdown mt-1">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                style="color: black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                {{ Auth::user()->profileImage }} <span class="caret"></span>
                            </a>

                            <!-- settings -->
                            <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
                                    <span><img src="https://img.icons8.com/ios/20/000000/user-male-circle.png"
                                            class="mb-1 mr-1" /></span>
                                    {{ __('Profile') }}
                                </a>
                                <a class="dropdown-item" href="/settings">
                                    <span><img
                                            src="https://img.icons8.com/fluent-systems-regular/20/000000/settings.png"
                                            class="mb-1 mr-1" /></span>
                                    {{ __('Settings') }}
                                    </button>
                                </a>
                                <a class="dropdown-item" href="/feedback">
                                    <span><img class="mb-1 mr-1"
                                            src="https://img.icons8.com/fluent/20/000000/feedback-hub.png" /></span>
                                    {{ __('Feedback') }}
                                </a>
                                <hr>
                                <a class="dropdown-item pl-5" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!--modal content-->
        <!--
        <div class="modal  " id="content">
            <div class="modal-dailog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Theme</h1>
                    </div>
                
                    <div class="modal-body">
                        <div class="container card mt-5" >
                            <div class="row p-5">
                                <div class="col-lg-1">
                                    <p class="mt-2 font-weight-bold">
                                        Theme
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <label class="switch">
                                    <input id="check" type="checkbox" onclick="validate();">
                                    <span class="slider round"></span> 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>