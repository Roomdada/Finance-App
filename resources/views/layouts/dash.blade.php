<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>{{config('app.name')}}</title>
    <meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylesheet.css')}}" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
    @livewireStyles
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>

    <div id="main-wrapper">
        <!-- Header ============================================= -->
        <header id="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo ============================= -->
                        <div class="logo">
                            <a class="d-flex" href="{{route('home.path')}}" title="Coin Stations"><img src="{{asset('assets/images/logo.png')}}" alt="Coin stations" /></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button ============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                        <!-- Collapse Button end -->

                        <!-- Primary Navigation ============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="active"><a href="{{ route('user.account') }}">Dashboard</a></li>
                                    <li><a href="{{ route('user.transaction') }}">Transaction</a></li>
                                    <li><a href="{{ route('user.money') }}">investisement/Retrait</a></li>
                                    <li><a href="{{ route('user.filleules.account') }}">Filleuls</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Primary Navigation end -->
                    </div>
                    <div class="header-column justify-content-end">
                        <!-- My Profile ============================== -->
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                <li class="dropdown language" style="display: none">
                                    <a class="dropdown-toggle" href="#">En</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="#">French</a></li>
                                        <li><a class="dropdown-item" href="#">Русский</a></li>
                                        <li><a class="dropdown-item" href="#">简体中文</a></li>
                                        <li><a class="dropdown-item" href="#">Türkçe</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown notifications" style="display: none">
                                    <a class="dropdown-toggle" href="#"><span class="text-5"><i class="far fa-bell"></i></span><span class="count">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center text-3 py-2">Notifications (3)</li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new digital FIRC document is available for you to download<span class="text-1 text-muted d-block">22 Jul 2020</span></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates to our privacy policy. Please read.<span class="text-1 text-muted d-block">04 March 2020</span></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Payyed fees<span class="text-1 text-muted d-block">18 Feb 2020</span></a></li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item text-center text-primary px-0" href="notifications.html">See all Notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown profile ml-2">
                                    <a class="px-0 dropdown-toggle" href="#"><img height="40px" width="40px" class="rounded-circle" src="{{ asset('avatar.png') }}" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center text-3 py-2">Hi, Smith Rhodes</li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="settings-profile.html"><i class="fas fa-user"></i>Mon Profile</a></li>
                                        <li><a class="dropdown-item" href="settings-profile.html#security"><i class="fas fa-shield-alt"></i>Securiter</a></li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="help.html"><i class="fas fa-life-ring"></i>Need Help?</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- My Profile end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

       @yield('content')

        <!-- Footer ============================================= -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg d-lg-flex align-items-center">
                        <ul class="nav justify-content-center justify-content-lg-start text-3">
                            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                        </ul>
                    </div>
                    <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                        <ul class="social-icons justify-content-center">
                            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                    <div class="row">
                        <div class="col-lg">
                            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2020 <a href="#">Payyed</a>. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

    <!-- Styles Switcher -->
    <div id="styles-switcher" class="left">
        <h2 class="text-3">Color Switcher</h2>
        <hr>
        <ul>
            <li class="blue" data-toggle="tooltip" title="Blue" data-path="css/color-blue.css"></li>
            <li class="indigo" data-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
            <li class="purple" data-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
            <li class="pink" data-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
            <li class="red" data-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
            <li class="orange" data-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
            <li class="yellow" data-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
            <li class="teal" data-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
            <li class="cyan" data-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
            <li class="brown" data-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
        </ul>
        <button class="btn btn-dark btn-sm btn-block border-0 font-weight-400 rounded-0 shadow-none" data-toggle="tooltip" title="Green" id="reset-color">Reset Default</button>
        <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
    </div>
    <!-- Styles Switcher End -->

    <!-- Script -->
    @livewireScripts

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Style Switcher -->
    <script src="{{asset('assets/js/switcher.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>