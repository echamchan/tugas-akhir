<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/fav.png">
  <meta name="author" content="codepixer">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/linearicons.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}        ">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}   ">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('css/hexagons.min.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}             ">
    @yield('css')
  </head>

  <body>
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="img/ball.png" width="50px" height="50px" alt="" title="Corner"/>Corner</a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
              </ul>
            </nav>
          </div>
        </div>
      </header>
@yield('css')
  </head>
  <body>
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="image/ppid.png" width="200px" height="55px"/></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="/">Beranda</a></li>
                @auth

                @else
                <li><a href="{{ URL('register') }}">Registrasi</a></li>
                <li><a href="{{ route('login') }}">Login <i class="fa fa-sign-in-alt"></i></a></li>
                </li>
            @endauth
              </ul>
            </nav>
          </div>
        </div>
      </header>

      @yield('content')

    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="container text-center">
            <div class="row">
              <div class="col-sm-12">
                <br><p>&copy; Copyright 2022 | Built by. <a href="https://chat.whatsapp.com/Kr2pwlY8aGX0bPR7VYCEtf">Nyee</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{URL::asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{URL::asset('js/easing.min.js')}}"></script>
    <script src="{{URL::asset('js/hoverIntent.js')}}"></script>
    <script src="{{URL::asset('js/superfish.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/hexagons.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/mail-script.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    @yield('js')
  </body>
</html>
