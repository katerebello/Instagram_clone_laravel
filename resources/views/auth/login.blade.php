<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login -CRK</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"> 
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .img {
        height: 50px;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div style="text-align: center;">
                        <img src="/images/login-profile.jpg" alt="" class="w-25 mt-3">
                    </div>
                    <div class="h4 " style="text-align:center; font-weight: bold;">{{ __('LOGIN') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="text-decoration:none;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>

                                    @endif
                                </div>

                            </div>
                        </form>
                    </div>

                </div>


                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <p style="text-align: center;" class="pt-3">Dont't have an account?
                            <a class="" style="font-weight: bold; text-decoration:none;" href="{{ route('register') }}">{{ __('Register') }}</a>

                        </p>
                    </div>
                </div>

                <div style="text-align: center;">Get the app.</div>

                <div class="mt-4 mb-5" style="text-align: center;">
                    <a class="download" href="https://apps.apple.com/us/app/instagram/id389801252" target="_blank">
                        <img class="w-25 pr-3" src="/svg/app-store.svg" alt="">
                    </a>

                    <a class="download " href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en_IN" target="_blank">
                        <img class="img " src="/svg/play-store.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>