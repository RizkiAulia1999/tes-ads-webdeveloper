@extends('layouts.app')

@section('content')
  <!-- Section  -->
  <section class="container-fluid">
    <div class="section-about">
      <div class="row">
        <div class="col-md-6">
          <span class="text-about">Kami hanya akan memberikan hidangan
            <span class="span-text-about">terbaik dan berkualitas</span>
            untukmu</span>
        </div>
        <div class="col-md-6">
          <p class="text-about2">
            Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean
            nisi dui purus accumsan sit amet vel.
          </p>
        </div>
      </div>
    </div>
  </section>
  <img src="{{url('/img/layer-about.png')}}" alt="" class="section-layer" />
  <!-- Section 2 -->
  <section class="container-fluid">
    <div class="section-about">
      <hr />
      <div class="row">
        <div class="col-md-6">
          <span class="text-about">Pelayanan terbaik dengan harga terjangkau</span>
        </div>
        <div class="col-md-6">
          <p class="text-about3">
            Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean
            nisi dui purus accumsan sit amet vel.
          </p>
          <p class="text-about4">
            Lorem ipsum dolor sit amet consectetur. Ultrices nisi ornare non
            nunc sit. Sem turpis sit tellus sed fringilla suspendisse.
            Faucibus in in velit mauris amet tempor tempor. Vestibulum at amet
            vivamus ridiculus nibh aenean purus vitae. Enim urna adipiscing
            massa dictum faucibus. Nulla porttitor cras fermentum justo. Nisl
            in purus non adipiscing placerat. Velit risus mattis dolor nam
            vitae vulputate augue. Scelerisque tortor viverra in libero
            malesuada augue viverra. Consequat vehicula fringilla et velit
            habitant tincidunt mollis sem quis. Sit cras auctor rutrum
            feugiat. Faucibus ante at tempor laoreet. Pharetra risus libero
            bibendum posuere consequat consequat nibh. Feugiat cras nunc eget
            cras gravida in nam aliquet imperdiet. Suspendisse egestas
            pulvinar ut pulvinar est ligula. Sollicitudin dui nibh eu tellus.
            Condimentum amet integer elit in cras.
          </p>
        </div>
      </div>
      <hr />
    </div>
  </section>

  <!-- Sextion 3 -->
  <section class="container-fluid">
    <div class="section-about pt-3">
      <h4 class="text-center">Pelanggan Kami</h4>
      <div class="container">
        <div class="section-pelanggan">
          <div class="row">
            <div class="col-md-3">
              <img src="{{url('/img/Logoptkian.png')}}" alt="" />
            </div>
            <div class="col-md-3 pt-4">
              <img src="{{url('/img/Rectangle.png')}}" alt="" />
            </div>
            <div class="col-md-4">
              <img src="{{url('/img/logojumat.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="section-bg">
    <div class="container-fluid">
      <div class="section-about">
        <div class="row">
          <div class="col-md-5">
            <img src="{{url('/img/image1.png')}}" alt="" width="550px" height="400px" />
          </div>
          <div class="col-md-5 px-5">
            <span class="text-about">Pesan catering, solusi makan bebas pusing</span>
            <p class="text-about5">
              Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah
              hanya kebutuhan, tetapi juga faktor penting dalam produktivitas
              dan kesehatan. Oleh karena itu, kami menawarkan layanan catering
              yang dapat memenuhi kebutuhan nutrisi dan selera Anda, serta
              mempermudah Anda dalam menyediakan makanan berkualitas untuk
              karyawan atau siswa Anda.
            </p>
            <button class="navbar-button mt-3">
              <a class="link-button" href="http://">Langganan Sekarang</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection