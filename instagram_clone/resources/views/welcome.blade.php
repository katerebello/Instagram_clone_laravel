<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>CRK</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    
</head>

<body style="overflow-y: hidden;">
    <img id="background" src="/svg/bg.svg" alt="">
    <div class="full-height">
        <div class="appname">
            <div class="name">Instagram</div>
        </div>


        <div class="position">
            @if (Route::has('login'))
            <div class="links">
                @auth

                <a href="/home" class="pt-5">Home</a>
                <a href=" /profile/{{ Auth::user()->id }} " class="pt-2">My Profile</a>
                <a href="/all " class="pt-2">See All Users</a>
                @else
                <div class="subtitle">Sign up to see photos and videos from your friends.</div>

                <a class="btn btn-primary login" role="button" href="{{ route('login') }}">Log In</a>

                @if (Route::has('register'))
                <a class="btn btn-primary register" role="button" href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

        <div class="imgblock">
            <a class="download" href="https://apps.apple.com/us/app/instagram/id389801252" target="_blank">
                <img class="img app" src="/svg/app-store.svg" alt="">
            </a>

            <a class="download " href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en_IN" target="_blank">
                <img class="img play" src="/svg/play-store.svg" alt="">
            </a>
        </div>
    </div>
</body>

</html>