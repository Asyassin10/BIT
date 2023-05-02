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

        section {
            margin-top: 40px;
        }

        section:last-of-type {
            margin-bottom: 40px;
        }



        .x-icon {
            height: 1em;
            width: 1em;
            top: .125em;
            position: relative;
        }

        .x-alt {
            color: #324389;
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
                                <p>Bienvenue chez to BTI – Advisory. L'administrateur manquant pour BTI</p>
                            </div>
                        </div> <!-- .logo-title-container -->
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">

                <div class="login-container">
                    <p>CONNECTEZ-VOUS :</p>

                    <form method="POST" action="{{ url('/admin/login/verify') }}">
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
                        </div>

                        @if ($errors->any())
                            <h4 class="text-center text-red">{{ $errors->first() }}</h4>
                        @endif
                        @if ($message = Session::get('error'))
                            <h4 class="text-center text-red">{{ $message }}</h4>
                        @endif
                        <button type="submit" class="btn btn-block  login-button" style="background-color: #e99b17">
                            <span class="signingin hidden"><span class="voyager-refresh"></span>
                                Logging in...</span>
                            <span class="signin">Connexion</span>
                        </button>
                        <br>
                    </form>
                    <center>
                        <section>
                            <div class="bsk-container">
                                <a href="{{ route('connect') }}">
                                    <button class="bsk-btn bsk-btn-default text-white">
                                        <object type="image/svg+xml"
                                            data="https://cdn.worldvectorlogo.com/logos/office-1.svg"
                                            class="x-icon"></object>
                                        Connectez-vous avec Office 365</button>
                                </a>
                            </div>
                        </section>
                    </center>

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
