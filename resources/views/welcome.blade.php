@extends('layouts.main')
@section('main')
<div class="container-fluid d-flex flex-wrap flex-collumn justify-content-evenly background-primary">
    <div class="shape align-self-center">
        <span>Bangun Rumah Impian mu</span>
        <p>Kamu dapat merancang dan menentukan anggaran pada rumah impian mu mulai dari sekarang</p>
        <a href="/about" class="btn btn-one">About Us</a>
    </div>
    <div class="img-banner">
        <img src="{{ asset('images/image1.jpeg') }}" alt="construction">
    </div>
</div>
<div class="desc-content">
    <div class="d-flex flex-md-row flex-lg-row-reverse flex-sm-column flex-column-reverse flex-sm-column-reverse flex-warp justify-content-evenly">
        <div class="desc align-self-center">
            <h1>Siapa Kami ?</h1>
            <p>kami adalah CV yang bergerak dibidang kontrusi dan renovasi interior ruangan. Kami juga melayani pembangunan non rumah atau non interior yang mana dengan sistem kontrak</p>
        </div>
        <div class="img-desc">
            <img src="{{ asset('images/image8.jpeg') }}" alt="construction">
        </div>
    </div>
</div>
<div class="service-content">
    <h1 class="text-center">Servis Kami</h1>
    <div class="service-section d-flex flex-wrap flex-row align-items-center justify-content-center justify-content-between text-center">
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/tie.png') }}" alt="money">
                <figcaption>Profesional</figcaption>
            </figure>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/clock.png') }}" alt="time">
                <figcaption>Pengerjaan Tepat Waktu</figcaption>
            </figure>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/puas.png') }}" alt="quality">
                <figcaption>Hasil Memuaskan</figcaption>
            </figure>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/shield.png') }}" alt="strong">
                <figcaption>Struktur Aman & Nyaman</figcaption>
            </figure>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/help.png') }}" alt="strong">
                <figcaption>Siap Membantu Mengurus IMB</figcaption>
            </figure>
        </div>
    </div>
</div>

<div class="container">
    <div class="ourproject">
        <h1>Our Project</h1>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <img
                  src="{{ asset('images/image4.jpeg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="house"
                />
            
                <img
                  src="{{ asset('images/image5.jpeg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="interior"
                />
              </div>
            
              <div class="col-lg-5 mb-4 mb-lg-0">
                <img
                  src="{{ asset('images/image3.jpeg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="interior"
                />
            
                
                <img
                src="{{ asset('images/image6.jpeg') }}"
                class="w-100 shadow-1-strong rounded mb-4 item-project"
                alt="house"
                />
              </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="section-contact">
        <div class="card">
            <div class="card-body">
                <h5>Kamu dapat menghubungi kami disini!</h5>
                <a href="wa.me/" class="btn btn-one" target="_blank">Hubungi Admin</a>
            </div>
        </div>
    </div>
</div>
@endsection