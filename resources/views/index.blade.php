@extends('navbar.layout')

@section('content')
<head>
    <style type="text/css">
      
        *{
            margin: 0;
            outline: none;
            box-sizing: border-box;
        }        
        body{
            font-family: Space Grotesk;
            background-color: #cfd4d8;
            overflow-x: hidden;
        }
       
        .wrapper{
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        header{
            padding: 50px 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header ul li{
            list-style: none;
            display: inline-block;
            margin: 0 15px;
        }
        header ul li a{
            color: #aba9b4;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all ease 0.5s;
        }
        header ul li a:hover{
            color: #53c9f0;
        }
        header ul li a.btn{
            display: inline-block;
            width: 180px;
            height: 60px;
            line-height: 60px;
            background-color: #53c9f0;
            color: #fff;
            text-align: center;
            font-size: 18px;
            border-radius: 50px;
            transition: all ease 0.5s;
        }
        header ul li a.btn:hover{
            background-color: #615c59;
        }

        .content{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 50px 100px 0;
        }
        .text{
            width: 50%;
            padding-right: 150px;
        }
        .text p{
            font-size: 28px;
            line-height: 46px;
            color: #fff;
        }
        .text p span{
            color: #53c9f0;
        }
        .text a{
            position: relative;
            display: inline-block;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 18px 30px;
            letter-spacing: 2px;
            font-weight: 500;
            margin-top: 60px;
        }
        .text a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            background-color: #53c9f0;
            z-index: -1;
            transition: all ease 0.5s;
        }
        .text a:hover:before{
            width: 100%;
        }

        .img{
            position: relative;
            width: 500px;
            height: 500px;
            background: radial-gradient(520px, #53a7f08c, transparent 50%);
            margin-top: -50px;
        }
        .email-icon{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .social-icons{
            height: 100%;
            animation: rotation 60s linear infinite;
        }
        @keyframes rotation {
            100%{
                transform: rotate(360deg);
            }
        }
        .social-icons img{
            position: absolute;
        }
        .social-icons img:nth-child(1){
            top: 0;
            left: 42%;
        }
        .social-icons img:nth-child(2){
            top: 25%;
            right: 0;
        }
        .social-icons img:nth-child(3){
            top: 70%;
            left: 70%;
        }
        .social-icons img:nth-child(4){
            top: 25%;
            left: 0;
        }
        .social-icons img:nth-child(5){
            top: 70%;
            left: 10%;
        }


        .wave{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            line-height: 0;
        }
        .wave:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(img/wave.svg) repeat-x;
            background-size: cover;
            background-position: -1000px 0;
            opacity: .2;
            animation: waveOne 60s linear infinite; 
        }
        @keyframes waveOne {
            50%{
                background-position: 0 0;
            }
        }
        .wave:after{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(img/wave.svg) repeat-x;
            background-size: cover;
            background-position: 2732px 0;
            opacity: .3;
            animation: waveOne 120s linear infinite; 
        }


        /*SUBMENU*/
        ul ul{
            max-width: 250px;
            position: absolute;
            padding: 10px 0;
            opacity: 0;
            z-index: -9999;
            transition: all ease 0.5s;
        }
        ul li:hover ul{
            opacity: 1;
            z-index: 9;
            padding: 30px 0;
        }
        ul ul li{
            margin: 0;
            width: 100%;
        }
        ul ul li a{
            width: 100%;
            display: inline-block;
            padding: 20px;
            background-color: #383a58;
            color: #fff;
        }
        ul ul li:first-child a{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        ul ul li:last-child a{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        ul ul li a:hover{
            background-color: #53c9f0;
            color: #fff;
        }

        .homehead{
        background: #98c4e9;
         padding: 0px 0px 20px 0px;
        }
    </style>
</head>
<body>


<div class="wrapper">
    <header>
        {{-- <div class="logo">
            <img src="img/ " alt="">
        </div>
        <nav>
            <ul>
                <li><a href="#">sepak</a>
                    <ul>
                        <li><a href="#">bola</a></li>
                        <li><a href="#">emm</a></li>
                        <li><a href="#">menu</a></li>
                        <li><a href="#">aa</a></li>
                    </ul>
                </li>
                <li><a href="#">gatau</a></li>
                <li><a href="#">Pokok</a></li>
                <li><a href="#">Support</a></li>
                <li><a class="btn" href="#">Sign Up</a></li>
            </ul>
        </nav> --}}
    </header>

    <div class="content">
        <div class="text">
            <p>Libero sunt aut excepturi natus leo etiam <span>corporis lobortis</span> quas nunc semper eius ullam ullam velit voluptas.</p>
            <a href="#" class="btn">Pesan Sekarang</a>
        </div>
        <div class="img">
            <div class="social-icons">
                <img src="img/social-icon1.png" alt="">
                <img src="img/social-icon2.png" alt="">
                <img src="img/social-icon3.png" alt="">
                <img src="img/social-icon4.png" alt="">
                <img src="img/social-icon5.png" alt="">
            </div>
            <img class="email-icon" src="img/ball1.png" alt="">
        </div>
    </div>

<div class="wave">
    <img src="img/wave.svg" alt="">
</div>

</div>
       
  
</head>

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
