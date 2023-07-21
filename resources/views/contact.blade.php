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

    <img src="{{url('/img/wave.svg')}}" class="wave" />

    <!-- Form -->
    <section class="card border-0 card-contact">
        <div class="row">
            <div class="col">
                <h2 class="text px-5 pt-5">Contact Us</h2>
                <div class="row px-5 pt-3">
                    <div class="row-title">
                        <span>Nama Lengkap</span>
                    </div>
                    <input type="text" placeholder="Masukkan Nama Lengkap" class="input-name" />
                </div>
                <div class="row px-5 pt-3">
                    <div class="row-title">
                        <span>Nomor HP</span>
                    </div>
                    <input type="text" placeholder="Masukkan Nomor HP" class="input-name" />
                </div>
                <div class="row px-5 pt-3">
                    <div class="row-title">
                        <span>Email</span>
                    </div>
                    <input type="text" placeholder="Masukkan Email" class="input-name" />
                </div>
                <div class="row px-5 pt-3">
                    <div class="row-title">
                        <span>Pesan</span>
                    </div>
                    <textarea placeholder="Masukkan Pesan" class="input-name textarea"></textarea>
                </div>
                <button class="mt-4 mx-5 contact-button">
                    <span>Kirim</span>
                </button>
            </div>
            <div class="col">
                <img src="{{url('/img/bg-contact.png')}}" class="contact-image" />
                <h4 class="text2 pt-5 px-4">Hubungi Kami untuk info lebih lanjut</h4>
                <p class="text3 px-4">
                    Untuk pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami
                    dengan mengisi formulir disamping. Kami akan menghubungi anda
                    sesegera mungkin.
                </p>
                <img src="{{url('/img/person.png')}}" class="image-person" />
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>