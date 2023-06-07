{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
    <title>Stock Management</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/vendors/material-icons/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/mono-social-icons/monosocialiconsfont.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/vendors/feather-icons/feather.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url({{ asset('assets/img/site-bgs.jpg') }})">
    <div id="wrapper" class="row wrapper multi-step-signup">
        <!-- 3 Step Navigation -->
        <div class="steps-tab clearfix" data-target="#multi-step-signup">
            <ul class="list-unstyled list-inline text-center mt-4">
                <li class="list-inline-item"><a href="#">
                        <h1></h1>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.step-tabs -->
        <!-- Register Form -->
        <div class="col-12 col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <form id="multi-step-signup" class="multi-step-form overflow-hidden" method="POST"
                action="{{ route('register') }}">
                @csrf
                <fieldset id="signup-step-1" class="form-material active animated fadeInRight">
                    <img src="{{ asset('assets/img/logo-collapses.png') }}" width="50" height="50"
                        alt="">
                    <h6 class="text-uppercase">Register Now</h6>
                    <p class="text-muted">Create your account and enjoy.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Name" id="name" name="name"
                            value="{{ old('name') }}">
                        <label>
                            @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                            @else
                                Name
                            @endif
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Email" id="email" type="email" name="email"
                            value="{{ old('email') }}">
                        <label>
                            @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @else
                                Email
                            @endif
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" id="password" type="password"
                            name="password">
                        <label>
                            @if ($errors->has('password'))
                                {{ $errors->first('password') }}
                            @else
                                Password
                            @endif
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Confirm Password"
                            id="password_confirmation" type="password" name="password_confirmation">
                        <label>Confirm Password</label>
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox checkbox-primary">
                            <label>
                                <input type="checkbox"> <span class="label-text">I agree to all <a href="#">Terms
                                        &amp; Conditions</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block ripple next-btn">Sign Up</button>
                    </div>
                </fieldset>
            </form>
            <footer class="col-sm-12 text-center">
                <hr>
                <p>Already have an account? <a href="{{ route('login') }}" class="text-primary m-l-5"><b>Log In</b></a>
                </p>
            </footer>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/material-design.js') }}"></script>
    {{-- <script>
        jQuery(document).ready(function($) {
        			var el = $('.multi-step-form');
        			el.each(function(){
        				var $this = $(this),
        						$stepsTab = $('.steps-tab[data-target="#' + $this.attr('id') + '"]');
        				$this.find('.next-btn').on( "click", function(){
        					$this.find('fieldset.active').removeClass('active').addClass('done').next('fieldset').addClass('active');
        					$stepsTab.find('li.active').removeClass('active').addClass('done').next('li').addClass('active');
        				});
        				$this.find('.prev-btn').on( "click", function(){
        					$this.find('fieldset.active').removeClass('active').prev('fieldset').addClass('active');
        					$stepsTab.find('li.active').removeClass('active').removeClass('done').prev('li').addClass('active');
        				});
        			});
        		});
    </script> --}}
</body>

</html>
