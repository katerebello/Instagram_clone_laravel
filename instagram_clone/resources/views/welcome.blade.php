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
    <title>CRK</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    
    <!-- Styles  -->
    <style>
        html,
        body {
            background: url();            
            color: #000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            overflow-y: hidden;
        }

        .full-height {
            height: 100vh;
            margin-left: 400px;  
        }

        .appname {
            text-align: center;
            margin-top: 130px;
        }

        .name {
            font-family: 'Pacifico', sans-serif;
            font-size: 80px;
        }

        .subtitle {
            margin-bottom: 20px;
            margin-top: 30px;
        }

        .position,
        .imgblock {
            display: flex;
            align-items:center;
            justify-content:center;
        }

        .btn {
            border-radius: 15px;
            width: 400px;
            margin-bottom: 20px;

        }

        .links>a {
            color: #000;
            padding: 5px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            display: block;
        }

        .img {
            height: 50px;
            border-radius: 5px;
            border: 0px;
        }

        .download {
            margin-top: 45px;
            /* border: 0px; */
        }

        .download:hover,
        .img:hover {
            background-color: transperent;
            box-shadow: 5px 10px 8px 2px #888888;
        }

        .app {
            border-radius: 9px;
            height: 52px;
        }

        .imgblock>a {
            margin-left: 10px;
        }
        #background{
            position: absolute;
            opacity: .9;
            width: 600px;
            top: 100px;
            left: 170px;
            z-index: -1;
        }
    </style>
</head>

<body>
    <img id="background" src="/svg/bg.svg" alt="">
    <div class="full-height">
        <div class="appname">
            <div class="name">Instagram</div>
            <div class="subtitle">Sign up to see photos and videos from your friends.</div>
        </div>


        <div class="position">
            @if (Route::has('login'))
            <div class="links">
                @auth
                <a href="{{ url('/') }}">Home</a>
                @else
                <a class="btn btn-primary" role="button" href="{{ route('login') }}">Log In</a>

                @if (Route::has('register'))
                <a class="btn btn-primary" role="button" href="{{ route('register') }}">Register</a>
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