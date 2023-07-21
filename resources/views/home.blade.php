@extends('layouts.app')

@section('content')
<!-- Section  1-->
<section class="section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-4">
                <h4 class="text-produk">Sajikan hidangan terbaikmu, bersama DapurPanen</h4>
                <p class="text-home2">
                    Kualitas terbaik selalu jadi prioritas kami. Berkomitmen memberikan pengalaman terbaik,
                    produk aman, halal, dan legal, serta memenuhi standar pelanggan. Tepat waktu dan mutu produk
                    kami jadi fokus utama untuk kepuasan pelanggan.
                </p>
                <button class="produk-button mt-4">
                    <a class="link-button" href="http://">Langganan Sekarang</a>
                </button>

            </div>
            <div class="col-md-6 home-image">
                <img src="{{url('/img/Untitled (1).png')}}" alt="" width="600px" height="500px">
            </div>
        </div>
    </div>
</section>

<!-- Sextion 2 -->
<section class="container-fluid pt-5">
    <h1 class="text-center">Pelanggan Kami</h1>
    <div class="section-pelanggan2">
        <div class="row">
            <div class="col-md-3">
                <img src="{{url('/img/Logoptkian.png')}}" alt="" />
            </div>
            <div class="col-md-4 pt-4">
                
            </div>
            <div class="col">
                <img src="{{url('/img/logojumat.png')}}" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="bg-white pt-5">
    <div class="container-fluid">
        <div class="section-about">
            <div class="row">
                <div class="col-2">
                    <div class="row image1">
                        <img src="{{url('/img/Rectangle 1286.png')}}" alt="">
                    </div>
                    <div class="row image1">
                        <img src="{{url('/img/Rectangle 1288.png')}}" alt="" height="230px">
                    </div>
                </div>
                <div class="col-3 px-5 mx-4">
                    <img src="{{url('/img/produk.png')}}" alt="">
                </div>
                <div class="col pt-4">
                    <span class="text-about">Tentang Kami</span>
                    <p class="text-about6">
                        Kami menyediakan berbagai macam pilihan menu yang sudah matang,
                        siap masak untuk memudahkan anda dalam memilih makanan yang diinginkan.
                        Kami berkomitmen untuk menggunakan bahan-bahan berkualitas dan segar
                        untuk menjaga kualitas dan rasa dari setiap hidangan yang kami sajikan.
                        Selain itu, kami juga menyediakan layanan catering untuk berbagai acara
                        seperti pesta ulang tahun, pernikahan, dan acara bisnis. Kami dapat
                        menyesuaikan menu sesuai dengan kebutuhan dan preferensi pelanggan untuk
                        memastikan bahwa setiap acara berjalan dengan sukses.
                    </p>
                    <button class="promo-button mt-3">
                        <a class="link-button" href="">Lihat Selengkapnya

                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Section 4 -->
<section class="container pt-5">
    <h1 class="text-center">Produk Kami</h1>
    <!-- Card Menu -->
    <div class="section-produk">
        <div class="row">
            <div class="col">
                <div class="card card-produk">
                    <div class="container ">
                        <img src="{{url('/img/produk1.png')}}" alt="">
                        <div class="text-produk2">
                            <h4 class="title-produk">Ready To Cook</h4>
                            <p>Dapur Panen hadir dengan solusi praktis
                                memasak dengan produk siap masak dari bahan-bahan dan bumbu
                                segar berkualitas. Buat hidangan spesial di rumah dengan
                                mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-produk">
                    <div class="container">
                        <img src="{{url('/img/produk2.png')}}" alt="">
                        <div class="text-produk2">
                            <h4 class="title-produk">Ready To Eat</h4>
                            <p>Nikmati hidangan spesial praktis dari Dapur Panen dengan produk siap saji berkualitas
                                tinggi, aman dikonsumsi, dan terjaga kebersihannya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-produk">
                    <div class="container">
                        <img src="{{url('/img/produk3.png')}}" class="pt-3">
                        <div class="text-produk3">
                            <h4 class="title-produk">Catering</h4>
                            <p>Berbagai hidangan lezat dan berkualitas tinggi tersedia dalam produk catering kami,
                                yang siap memenuhi kebutuhan acara Anda dengan beragam pilihan menu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <center>
                    <button class="promo-button mt-2 mx-5">
                        <a class="link-button" href="">Lihat Semuanya
                            <img src="{{url('/img/panah.svg')}}" alt="" />
                        </a>
                    </button>
                </center>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<!-- Section 5 -->
<section class="section-bg pb-0">
    <hr class="hr">
    <div class="container">
        <h1 class="text-center pt-4">Promo Menarik</h1>
        <div class="section-cardhome">
            <div class="row">
                <div class="col">
                    <div class="card card-home">
                        <div class="container ">
                            <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="/public/img/calender.svg" />
                                <span class="text-date">Berlaku hingga 31 May 2023</span>
                            </div>
                            <p class="text-desc">Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo
                                Catering Khusus!</p>
                        </div>
                        <button class="card-button mt-4">
                            <a class="link-button" href="http://">Selengkapnya
                                <img src="{{url('/img/panah.svg')}}" alt="" />
                            </a>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-home">
                        <div class="container">
                            <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="/img/calender.svg" />
                                <span class="text-date">Berlaku hingga 31 May 2023</span>
                            </div>
                            <p class="text-desc">Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo
                                Catering Khusus!</p>
                        </div>
                        <button class="card-button mt-4">
                            <a class="link-button" href="http://">Selengkapnya
                                <img src="{{url('/img/panah.svg')}}" alt="" />
                            </a>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-home">
                        <div class="container">
                            <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="/public/img/calender.svg" />
                                <span class="text-date">Berlaku hingga 31 May 2023</span>
                            </div>
                            <p class="text-desc">Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo
                                Catering Khusus!</p>
                        </div>
                        <button class="card-button mt-4">
                            <a class="link-button" href="http://">Selengkapnya
                                <img src="{{url('/img/panah.svg')}}" alt="" />
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="" class="link-promo">Lihat Semua Promo</a>
    </div>
    <br>
    <hr class="hr">

    <!-- Reviewer Section 6 -->
    <h1 class="text-center pt-4">Kata Mereka</h1>
    <div class="container pt-4">
        <div class="section-review">
            <div class="row">
                <div class="col">
                    <div class="review">
                        <h4>Murah , cepet bree</h4>
                        <p>
                            Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                        </p>
                    </div>
                    <img src="{{url('/img/Ellipse7.png')}}" alt="" class="image-user">
                    <br>
                    <div class="text-user">
                        <h4 class="title-user">Asep M</h4>
                        <h5>Mahasiswa</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="review">
                        <h4>Murah , cepet bree</h4>
                        <p>
                            Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                        </p>
                    </div>
                    <img src="{{url('/img/Ellipse7.png')}}" alt="" class="image-user">
                    <br>
                    <div class="text-user">
                        <h4 class="title-user">Asep M</h4>
                        <h5>Mahasiswa</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="review">
                        <h4>Murah , cepet bree</h4>
                        <p>
                            Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^
                        </p>
                    </div>
                    <img src="{{url('/img/Ellipse7.png')}}" alt="" class="image-user">
                    <br>
                    <div class="text-user">
                        <h4 class="title-user">Asep M</h4>
                        <h5>Mahasiswa</h5>
                    </div>
                </div>
                <img src="{{url('/img/right.svg')}}" class="arrowright" />
            </div>
        </div>
    </div>
    <br>
    <center>
        <img src="{{url('/img/scrol.svg')}}" alt="" class="scroll">
    </center>
    <br>
    </div>
    <hr class="hr">
</section>

<!-- Section 7 -->
<section class="pb-0">
    <div class="container">
        <h1 class="text-center pt-4">Blog Terbaru Kami</h1>
        <div class="section-cardhome">
            <div class="row">
                <div class="col">
                    <div class="card card-home">
                        <div class="container ">
                            <img src="{{url('/img/image 6 (1).png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="asset/calender.svg" />
                                <span class="text-date">20 September 2022</span>
                            </div>
                            <p class="text-desc2">3 Makanan yang bikin kecerdasarn menuru, penting dihindari!</p>
                            <span class="px-2">by <b>Najwa Putri</b></span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-home">
                        <div class="container">
                            <img src="{{url('/img/image 6 (1).png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="{{url('/img/calender.svg')}}">
                                <span class="text-date">20 September 2022</span>
                            </div>
                            <p class="text-desc2">3 Makanan yang bikin kecerdasarn menuru, penting dihindari!</p>
                            <span class="px-2">by <b>Najwa Putri</b></span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-home">
                        <div class="container">
                            <img src="{{url('/img/image 6 (1).png')}}" class="image-card" alt="">
                            <div class="text-card pt-3 px-2">
                                <img src="{{url('/img/calender.svg')}}" />
                                <span class="text-date">20 September 2022</span>
                            </div>
                            <p class="text-desc2">3 Makanan yang bikin kecerdasarn menuru, penting dihindari!</p>
                            <span class="px-2">by <b>Najwa Putri</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col mt-4">
                    <center>
                        <button class="promo-button mx-5">
                            <a class="link-button" href="">Lihat Semuanya
                                <img src="{{url('/img/panah.svg')}}" alt="" />
                            </a>
                        </button>
                    </center>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <br>
    <hr class="hr">
</section>

@endsection