<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>DISTRICT POLICE PABNA | DATABASE-SYSTEMS</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/favicon/apple-touch-icon-152x152.jpg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/favicon/favicon-32x32.jpg') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/horizontal-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/horizontal-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/layouts/style-horizontal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/login.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="horizontal-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                         @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                <img style="float: right;" class="hide-on-med-and-down" src="{{ asset('backend/app-assets/images/logo/rajshahi-range.png') }}" alt="materialize logo"/>
                                <img style="float: left;" class="hide-on-med-and-down" src="{{ asset('backend/app-assets/images/logo/police.png') }}" alt="materialize logo"/>
                               
                                <h5 style="color: red; font-size: 30px; text-align: center;"><u><b><i>DISTRICT POLICE PABNA</i></b></u></h5><br>
                                    <h5 style="text-align: center;" class="ml-4">Sign in</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">email_outline</i>
                                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
                                    <label for="email" class="center-align">E-Mail</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" class="block mt-1 w-full" type="password" name="password"  required>
                                  
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backend/app-assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('backend/app-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/search.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/custom/custom-script.js') }}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>

</html>