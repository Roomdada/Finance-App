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
    @livewireStyles
</head>
<body class="me-overflow-x">
<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="h-100">
  <div class="container-fluid px-0 h-100">
    <div class="row no-gutters h-100"> 
      <!-- Welcome Text
      ============================================= -->
      <div class="col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset('assets/images/bg/image-3.jpgs') }}');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Coin Station"><img src="{{ asset('assets/images/logo-light.png') }}" alt="Coin Station"></a> </div>
              </div>
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-10 col-lg-9 mx-auto">
                <h1 class="text-11 text-white mb-4">Bienvenue à nouveau !</h1>
                <p class="text-4 text-white line-height-4 mb-5">
                  Nous sommes heureux de vous revoir ! Des millions de personnes dans le
                  monde entier font confiance pour leur investisement instantanés.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
      
      <!-- Login Form
      ============================================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-4">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <h3 class="font-weight-400 mb-4">Identifier-vous</h3>
              @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{session()->get('message')}}
                </div>
              @endif
              @if(session()->has('error'))
               <div class="alert alert-danger text-center">
                 {{session()->get('error')}}
               </div>
              @endif
              @livewire('login-component')
              <p class="text-3 text-center text-muted">Vous n'avez pas de compte ? <a class="btn-link" href="{{ route('register') }}">Inscrivez-vous</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
    </div>
  </div>
</div>

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
    @livewireScriptsss

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <!-- Style Switcher -->
    <script src="{{asset('assets/js/switcher.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>