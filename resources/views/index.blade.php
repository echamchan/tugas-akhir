@extends('navbar.layout')

@section('content')
<head>
    <style type="text/css">
        body{
            background-color: #eee;
        }
        .homehead{
            background: #C0C0C0;
            padding: 0px 0px 20px 0px;
        }
    </style>
</head>

    <header class="homehead">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="img/ball.png" width="50px" height="50px" alt="" title="Corner"/>Corner</a>
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
                    <li><a class="dropdown-item" href="#">買い物かご</a></li>
                    <li><hr class="dropdown-divider"></li>

                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item text-center">ログアウト <i class="fa fa-sign-out-alt"></i></button>
                    </form>
                  
                  </ul>
                </li>

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
    
	
	<section class="product-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 heaader-text text-center">
                    <h1 class="pb-10">Lapangan Untuk Futsal</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="thumb">
                            <img src="img/lapangan.jpg" width="175px" height="120px" alt="">
                        </div>
                        <h4>Scudetto</h4>
                        <p>
                            Harga: Rp. 50.000/Jam
                        </p>
                        <p>
                            Sepatu: 
                        </p>
                        <p>
                            Bola:
                        </p>
                        <a href="/details" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

@endsection