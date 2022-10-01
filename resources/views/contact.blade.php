@extends('layouts.main')
@section('main')
    <div class="contact-banner">
        <div class="container d-flex flex-wrap flex-lg-row flex-column justify-content-center align-items-center">
            <div class="banner-item">
                <h1>Contact</h1>
                <p>Kamu dapat berkonsultasi atau menghubungi kami disini. Selain itu, kamu juga dapat menanyakan mengenai renovasi, jasa gambar dan lain sebagainya.</p>
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
                            <p>Perumahan Lodoyo Asri Blok D No.2 Lingk.Brubuh Kel.Kalipang, Kec.Sutojayan, Kab.Blitar</p>
                            <p><strong>Company Name</strong></p>
                            <p>CV Grahari Group</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('images/icons/wa1.png') }}" class="icon-conctacts" alt="whatsapp">
                            <p>
                                <strong>WhatsApp</strong>
                            </p>
                            <p>0857-3627-2728 (Disga)</p>
                            <p><strong>WhatsApp</strong></p>
                            <p>0858-0415-4016 (Elsa)</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('images/icons/mail1.png') }}" class="icon-conctacts" alt="email">
                            {{-- <p>
                                <strong>Email</strong>
                            </p>
                            <p>mandala@gmail.com</p> --}}
                            <p><strong>Company Name</strong></p>
                            <p>CV Grahari Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection