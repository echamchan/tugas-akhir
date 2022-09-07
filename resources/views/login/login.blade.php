@extends('navbar.layout')

@section('content')

<head>

    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card" style="margin-top: 155px; margin-bottom: 120px;">
                <div class="d-flex justify-content-center">
                </div>
                <div class="brand_logo_container">
                        <img src="img/ball.png" class="brand_logo" alt="Logo" style="height: 150px; margin-left: 50px;">
                    </div><br>
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif

                    <br>

     <form action="/login" method="post">

        @csrf

        <div class="input-group mb-3">
           <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="text" name="email" class="form-control input_user" value="" placeholder="Email" autofocus required> 
           </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" name="password" class="form-control input_pass" value="" placeholder="password" required>
            </div>
        </div>

        <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
        </div><br />

        <button type="submit" class="btn login_btn">Login</button>

    </form>
   </div>
  </div>
</div>
@endsection