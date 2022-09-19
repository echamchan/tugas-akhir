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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    @yield('css')
  </head>

  <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="img/ball.png" width="50px" height="50px" alt="" title="Corner">Corner</a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="/">Beranda</a></li>
              @auth

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ようこそ、{{ auth()->user()->name }} さん
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('coupon') }}">my クーポン <i class="fas fa-ticket-alt"></i></a></li>
                    <li><a class="dropdown-item" href="{{ url('cart') }}">買い物かご</a></li>
                    <li><hr class="dropdown-divider"></li>

                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item text-center">ログアウト <i class="fa fa-sign-out-alt"></i></button>
                    </form>
                  </ul>
                  
                @else
                  <li><a href="{{ URL('register') }}">Registrasi</a></li>
                  <li><a href="{{ URL('mitreg') }}">Daftar Mitra</a></li>
                  <li><a href="{{ route('login') }}">Login <i class="fa fa-sign-in-alt"></i></a></li>
                </li>
            @endauth
              </ul>
            </nav>
          </div>
        </div>
      </header>

  <body>

      @yield('content')<br><br><br><br><br>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
