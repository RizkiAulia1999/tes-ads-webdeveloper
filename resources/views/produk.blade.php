@extends('layouts.app')

@section('content')
<!-- Section  1-->
<section class="mb-5">
    <div class="section-produk">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 pt-4">
                    <h4 class="text-produk">Nikmati Produk Pilihan Terbaik dari Kami</h4>
                    <button class="produk-button mt-4">
                        <a class="link-button" href="http://">Langganan Sekarang</a>
                    </button>
                </div>
                <div class="col-md-6 produk-image">
                    <img src="{{url('/img/produk-layer.png')}}" alt="" width="685px" height="480px">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Section 2 -->
<section class="container">
    <h2 class="text-center">Produk Kami</h2>
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
            <div class="col">
                <div class="card card-produk">
                    <div class="container">
                        <img src="{{url('/img/produk4.png')}}" alt="">
                        <div class="text-produk2">
                            <h4 class="title-produk">Burger Panen</h4>
                            <p>Hidangan yang gurih dan praktis ini cocok untuk dinikmati kapan saja dan di mana
                                saja. Rasakan kenikmatan sensasi gigitan pertama dari hidangan burger yang lezat dan
                                bergizi!.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-produk">
                    <div class="container">
                        <img src="{{url('/img/produk5.png')}}" height="300px" alt="">
                        <div class="text-produk2">
                            <h4 class="title-produk">Kopi Panen</h4>
                            <p>Nikmati sensasi kopi yang kaya aroma dan cita rasa dengan produk kopi kami yang
                                terbuat dari biji kopi pilihan. Segera cicipi dan rasakan pengalaman kopi yang
                                memikat lidah!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="bg-white">
    <div class="container-fluid">
        <div class="section-aboutproduk">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{url('/img/image1.png')}}" alt="" width="550px" height="400px" />
                </div>
                <div class="col-md-5 px-5">
                    <span class="text-about">Pesan catering, solusi makan bebas pusing</span>
                    <p class="text-about6">
                        Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah
                        hanya kebutuhan, tetapi juga faktor penting dalam produktivitas
                        dan kesehatan. Oleh karena itu, kami menawarkan layanan catering
                        yang dapat memenuhi kebutuhan nutrisi dan selera Anda, serta
                        mempermudah Anda dalam menyediakan makanan berkualitas untuk
                        karyawan atau siswa Anda.
                    </p>
                    <button class="navbar-button">
                        <a class="link-button" href="http://">Langganan Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<img src="{{url('/img/Vector (3).png')}}" alt="" class="image-footerproduk">
@endsection