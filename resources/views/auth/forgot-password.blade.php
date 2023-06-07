{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/logo-collapses.png')}}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forgot Password</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url({{asset('assets/img/site-bgs.jpg')}})">
    <div id="wrapper" class="wrapper">
        <div class="row container-min-full-height align-items-center">
            <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center login-center-mini mx-auto">
                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="index.html">
                        <img alt="" src="{{asset('assets/img/logo-lights.png')}}">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <form method="POST" action="{{ route('password.email') }}" class="form-material" >
                    @csrf
                    <p class="text-center text-muted">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    @if (session('status'))
                       <p class="text-center text-muted" style="color: #058b22 !important;">
                            We have emailed your password reset link!
                        </p> 
                    @endif
                    @if ($errors->has('email'))
                        <p class="text-center text-muted" style="color: #8b0505 !important;">
                            Whoops! Something went wrong. <br> {{$errors->first('email')}}
                        </p>
                    @endif
                    
                    <div class="form-group no-gutters">
                        <input name="email" id="email" type="email" placeholder="type your email" class="form-control form-control-line" value="{{old('email')}}">
                        <label for="example-email" class="col-md-12 mb-1">Email</label>
                    </div>
                    <div class="form-group mb-5">
                        <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit">Submit</button>
                    </div>
                </form>
                <!-- /.form-material -->
                <footer class="col-sm-12 text-center">
                    <hr>
                    <p>Back to <a href="{{route('login')}}" class="text-primary m-l-5"><b>Login</b></a>
                    </p>
                </footer>
            </div>
            <!-- /.login-right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/material-design.js')}}"></script>
</body>

</html>