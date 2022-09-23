@extends('layouts.main')
@section('main')
<div class="container-fluid d-flex flex-wrap flex-collumn justify-content-evenly background-primary">
    <div class="shape align-self-center">
        <span>Bangun Rumah Impian mu</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quidem tempora aliquam porro, eius exercitationem expedita modi eum voluptas laboriosam quam sed magni qui perspiciatis officiis explicabo esse non veniam?</p>
        <a href="/about" class="btn btn-one">About Us</a>
    </div>
    <div class="img-banner">
        <img src="{{ asset('images/image1.jpg') }}" alt="construction">
    </div>
</div>
<div class="desc-content">
    <div class="d-flex flex-md-row flex-lg-row-reverse flex-sm-column flex-column-reverse flex-sm-column-reverse flex-warp justify-content-evenly">
        <div class="desc align-self-center">
            <h1>Siapa Kami ?</h1>
            <p>kami adalah CV yang bergerak dibidang kontrusi dan renovasi interior ruangan. Kami juga melayani pembangunan non rumah atau non interior yang mana dengan sistem kontrak</p>
        </div>
        <div class="img-desc">
            <img src="{{ asset('images/image8.jpg') }}" alt="construction">
        </div>
    </div>
</div>
<div class="service-content">
    <h1 class="text-center">Servis Kami</h1>
    <div class="service-section d-flex flex-wrap flex-row align-items-center justify-content-center justify-content-between text-center">
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/dollar.png') }}" alt="money">
                <figcaption>Biaya Terjangkau</figcaption>
            </figure>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam reprehenderit consectetur repudiandae ipsa tempora ullam beatae nostrum, illo eligendi ut adipisci sequi obcaecati in illum quis asperiores nihil modi nisi?</p>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/clock.png') }}" alt="time">
                <figcaption>Waktu Pengerjaan Cepat</figcaption>
            </figure>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam reprehenderit consectetur repudiandae ipsa tempora ullam beatae nostrum, illo eligendi ut adipisci sequi obcaecati in illum quis asperiores nihil modi nisi?</p>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/medal.png') }}" alt="quality">
                <figcaption>Kualitas Material Terjamin</figcaption>
            </figure>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam reprehenderit consectetur repudiandae ipsa tempora ullam beatae nostrum, illo eligendi ut adipisci sequi obcaecati in illum quis asperiores nihil modi nisi?</p>
        </div>
        <div class="service-item align-self-center">
            <figure>
                <img src="{{ asset('images/icons/shield.png') }}" alt="strong">
                <figcaption>Bangunan Kuat</figcaption>
            </figure>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam reprehenderit consectetur repudiandae ipsa tempora ullam beatae nostrum, illo eligendi ut adipisci sequi obcaecati in illum quis asperiores nihil modi nisi?</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="ourproject">
        <h1>Our Project</h1>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <img
                  src="{{ asset('images/image 4.jpg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="Boat on Calm Water"
                />
            
                <img
                  src="{{ asset('images/image 6.jpg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="Wintry Mountain Landscape"
                />
              </div>
            
              <div class="col-lg-5 mb-4 mb-lg-0">
                <img
                  src="{{ asset('images/image 3.jpg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="Mountains in the Clouds"
                />
            
                <img
                  src="{{ asset('images/image 5.jpg') }}"
                  class="w-100 shadow-1-strong rounded mb-4 item-project"
                  alt="Boat on Calm Water"
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
                <a href="wa.me/" class="btn" target="_blank">Hubungi Admin</a>
            </div>
        </div>
    </div>
</div>
@endsection