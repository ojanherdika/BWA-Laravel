<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
        
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand"><img src="frontend/images/logo.png" alt="logo nomand"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="#navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx md-2">
                        <a href="detail.html" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link1</a>
                            <a href="#" class="dropdown-item">Link2</a>
                            <a href="#" class="dropdown-item">Link3</a>
                        </div>
                    </li>
                    <li class="nav-item mx md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>
                </ul>
                <!-- Moblie Button -->
                <form action="" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>
                <!-- Dekstop Button -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
            </div>
        </nav>
    </div>
    <!-- header -->
    @yield('content')
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Comunity</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Reward</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Carier</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Jakarta Selatan</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">083821845139</a></li>
                                <li><a href="#">ojanherdika@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2020 Copyright Nomads - All rights reserved - Made in Jakarta
                </div>
            </div>
        </div>
    </footer>
    <script src="{{url('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
    <script src=" {{url('frontend/libraries/retina/retina.min.js')}}"></script>
</body>

</html>