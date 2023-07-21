 @extends('layouts.app')

 @section('content')
 <!-- Section  -->
 <section class="container-fluid mb-5">
     <div class="section-promo">
         <div class="row">
             <div class="col-md-6 pt-4">
                 <h3 class=" text-uppercase">
                     <span class="span-text-promo">Gratis</span>
                 </h3>
                 <h4 class="text-promo">Burger Panen</h4>
                 <p class="text-promo2">Hanya dengan Download Aplikasi Panenpanen.id dan
                     Klaim Voucher gratis burger panen untuk pengguna baru</p>
                 <button class="promo-button mt-4">
                     <a class="link-button" href="http://">Download Aplikasi Sekarang</a>
                 </button>
             </div>
             <div class="col-md-6 promo-image">
                 <img src="{{url('/img/image 20.png')}}" alt="" height="350px" width="400px">
             </div>
         </div>
     </div>
 </section>

 <!-- Section Menu -->
 <section class="section-menu">
     <img src="{{url('/img/wave2.svg')}}" class="wave2" />
     <div class="container">
         <div class="section-button">
             <div class="row">
                 <div class="col">
                     <button class="section-button1">
                        Semua Promo
                     </button>
                 </div>
                 <div class="col">
                     <button class="section-button2">
                         Promo Ready to Cook
                     </button>
                 </div>
                 <div class="col">
                     <button class="section-button2">
                         Promo Readt to Eat
                     </button>
                 </div>
                 <div class="col">
                     <button class="section-button2">
                         Promo Kopi
                     </button>
                 </div>
             </div>
             <div class="row pt-4">
                 <div class="col"></div>
                 <div class="col">
                     <button class="section-button2">
                         Promo Burger Panen
                     </button>
                 </div>
                 <div class="col">
                     <button class="section-button2">
                         Promo Catering
                     </button>
                 </div>
                 <div class="col"></div>
             </div>
         </div>

         <!-- Card Menu -->
         <div class="section-card">
             <div class="row">
                 <div class="col">
                     <div class="card card-menu">
                         <div class="container ">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
                     <div class="card card-menu">
                         <div class="container">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
                     <div class="card card-menu">
                         <div class="container">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
             <div class="row pt-5">
                 <div class="col">
                     <div class="card card-menu">
                         <div class="container ">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
                     <div class="card card-menu">
                         <div class="container">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
                     <div class="card card-menu">
                         <div class="container">
                             <img src="{{url('/img/image 6.png')}}" class="image-card" alt="">
                             <div class="text-card pt-3 px-2">
                                 <img src="{{url('/img/calender.svg')}}" />
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
     </div>
 </section>
 @endsection