{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo-collapses.png') }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet"
        type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page">
    <div id="wrapper" class="wrapper">
        <div class="row container-min-full-height">
            <div class="col-lg-8 p-3 login-left">
                <div class="w-50">
                    <h2 class="mb-4 text-center">Welcome back!</h2>
                    <form method="POST" class="text-center" action="{{ route('login') }}">
                        @csrf
                        <div style="color: rgb(189, 4, 4)">
                            {{ $errors->first() }}
                        </div>
                        @if (session('failed'))
                            <div style="color: rgb(189, 4, 4)">
                                {{ session('failed') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="text-muted" for="example-email">Email</label>
                            <input type="email" placeholder="type your email" class="form-control form-control-line"
                                id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="example-password">Password</label>
                            <input type="password" placeholder="type your password"
                                class="form-control form-control-line" id="password" name="password">
                        </div>
                        @if (Route::has('password.request'))
                            <div class="form-group no-gutters mb-5 text-center">
                                <a href="{{ route('password.request') }}" id="to-recover"
                                    class="text-muted fw-700 text-uppercase heading-font-family fs-12">Forgot
                                    Password?</a>
                            </div>
                        @endif
                        <!-- /.form-group -->
                        <div class="form-group mr-b-20">
                            <button class="btn btn-block btn-rounded btn-md btn-primary text-uppercase fw-600 ripple"
                                type="submit">Sign In</button>
                        </div>
                    </form>
                    <!-- /form -->
                </div>
                <!-- /.w-75 -->
            </div>
            <div class="col-lg-4 login-right d-lg-flex d-none pos-fixed pos-right text-inverse container-min-full-height"
                style="background-image: url({{ asset('assets/img/site-bg-smalls.jpg') }})">
                <div class="login-content px-3 w-75 text-center">
                    <h2 class="mb-4 text-center fw-300">New here?</h2>
                    <p class="heading-font-family fw-300 letter-spacing-minus">Sign up and discover the many great
                        features that our app provides</p>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="btn btn-rounded btn-md btn-outline-inverse text-uppercase fw-600 ripple pd-lr-60 mr-t-200">Sign
                            Up</a>
                    @endif
                </div>
                <!-- /.login-content -->
            </div>
            <!-- /.login-right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrapper -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/material-design.js') }}"></script>
</body>

</html>
