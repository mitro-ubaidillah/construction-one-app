@extends('layouts.main')
@section('main')
    <div class="contact-banner">
        <div class="container d-flex flex-wrap flex-lg-row flex-column justify-content-center align-items-center">
            <div class="banner-item">
                <h1>Contact</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially uncha</p>
            </div>
            <div class="banner-img">
                <img src="{{ asset('images/contact.png') }}" alt="contact">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="get-in-touch">
            <div class="card" style="box-shadow: 4px 0px 4px rgba(0,0,0,0.25);border-radius: 20px;padding-bottom:70px;">
                <div class="card-body">
                    <div class="row text-center justify-content-evenly">
                        <h2>Temukan Saya di</h2>
                        <div class="col-md-3">
                            <img src="{{ asset('images/icons/map1.png') }}" class="icon-conctacts" alt="maps">
                            <p>
                                <strong>Address</strong>
                            </p>
                            <p>Lodoyo, Kec Kanigoro Jawa Timur Indonesia</p>
                            <p><strong>Company Name</strong></p>
                            <p>CV Manda Jaya Indah</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('images/icons/wa1.png') }}" class="icon-conctacts" alt="whatsapp">
                            <p>
                                <strong>Phone</strong>
                            </p>
                            <p>+62 82 8879 9875</p>
                            <p><strong>WhatsApp</strong></p>
                            <p>+62 82 8879 9875</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('images/icons/mail1.png') }}" class="icon-conctacts" alt="email">
                            <p>
                                <strong>Email</strong>
                            </p>
                            <p>mandala@gmail.com</p>
                            <p><strong>Company Name</strong></p>
                            <p>CV Manda Jaya Indah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection