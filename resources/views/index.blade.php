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