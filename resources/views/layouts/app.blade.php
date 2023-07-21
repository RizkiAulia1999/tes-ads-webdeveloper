<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DapurPanen - Tes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
</head>

<body>
    <!-- Navbar -->
    @section('navbar')
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="{{url('/img/Logo.svg')}}" alt="" srcset="" />
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                &emsp;
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                &emsp;
                <li class="nav-item">
                    <a class="nav-link" href="/promo">Promo</a>
                </li>
                &emsp;
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                &emsp;
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <button class="navbar-button">
            <a class="nav-link" href="http://">Download App</a>
        </button>
    </nav>

    <!-- Section Content -->
    @yield('content')

    <!-- Section Footer-->
    @section('footer')
    <section class="container-fluid">
        <div class="section-footer pt-4">
            <div class="row">
                <div class="col-md-7">
                    <span class="text-footer">
                        Makin Mudah dan Praktis <br>dengan Aplikasi Panenpanen.id
                        Download Sekarang
                    </span><br><br>
                    <button class="footer-button">
                        <img src="{{url('/img/image 16.png')}}" alt="" srcset="">
                    </button>
                </div>
                <div class="col-md-4 px-2">
                    <div class="row">
                        <div class="col mockup-footer">
                            <img src="{{url('/img/App mockup2.png')}}" alt="">
                        </div>
                        <div class="col">
                            <img src="{{url('/img/App mockup1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @show
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>