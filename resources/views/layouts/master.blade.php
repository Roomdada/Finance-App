<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Coin Stations | Accueil</title>
    <meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts ============================================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

    <!-- Stylesheet ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylesheet.css')}}" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>

    <div id="main-wrapper">

       @include('partials.header')
        <!-- Header End -->

       @yield('content')
        <!-- Content end -->

        <!-- Footer
  ============================================= -->
       @include('partials.footer')
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

    <!-- Video Modal
============================================= -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal end -->

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
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <!-- Style Switcher -->
    <script src="{{asset('assets/js/switcher.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>