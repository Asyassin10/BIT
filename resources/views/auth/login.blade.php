{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - Voyager</title>
    <link rel="stylesheet" href="/assets/admin/css/login.css">
    <style>
        body {
            background-image: url('/assets/admin/img/bg.webp');
            background-color: #FFFFFF;
        }

        body.login .login-sidebar {
            border-top: 5px solid #e99b17;
        }

        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top: 0px !important;
                border-left: 5px solid #e99b17;
            }
        }

        body.login .form-group-default.focused {
            border-color: #e99b17;
        }

        .login-button,
        .bar:before,
        .bar:after {
            background: #e99b17;
        }

        .remember-me-text {
            padding: 0 5px;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>

<body class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="faded-bg animated"></div>
            <div class="hidden-xs col-sm-7 col-md-8">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-10 col-md-offset-2">
                        <div class="logo-title-container">
                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn"
                                src="/assets/admin/img/logo.svg" alt="Logo Icon">
                            <div class="copy animated fadeIn">
                                <h1>BTI – Advisory</h1>
                                <p>Welcome to BTI – Advisory. The Missing Admin for Laravel</p>
                            </div>
                        </div> <!-- .logo-title-container -->
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">

                <div class="login-container">
                    <p>CONNECTEZ-VOUS :</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group form-group-default" id="emailGroup">
                            <label>E-mail</label>
                            <div class="controls">
                                <input type="text" name="email" id="email" value="" placeholder="E-mail"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group form-group-default" id="passwordGroup">
                            <label>mot de passe</label>
                            <div class="controls">
                                <input type="password" name="password" placeholder="mot de passe" class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="form-group" id="rememberMeGroup">
                            <div class="controls">
                                <input type="checkbox" name="remember" id="remember" value="1"><label
                                    for="remember" class="remember-me-text">souviens-toi de moi</label>
                            </div>
                            <br>
                            <x-jet-validation-errors class="remember-me-text text-danger" />
                        </div>

                        <button type="submit" class="btn btn-block  login-button" style="background-color: #e99b17">
                            <span class="signingin hidden"><span class="voyager-refresh"></span>
                                Logging in...</span>
                            <span class="signin">Connexion</span>
                        </button>
                        @if (isset($message))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                <h1>{{ $message }}</h1>
                            </div>
                        @endif

                    </form>

                    <div style="clear:both"></div>


                </div> <!-- .login-container -->

            </div> <!-- .login-sidebar -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev) {
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e) {
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e) {
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e) {
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e) {
            document.getElementById('passwordGroup').classList.remove("focused");
        });
    </script>
</body>

</html>
