@extends('layouts.main')
@section('main')
    <div class="about-banner">
        <div class="background-one">
            <h1>Tentang Kami</h1>
        </div>
        <div class="background-two row justify-content-center">
            <div class="image-about col-lg-6 offset-lg-1 align-self-center">
                <img src="{{ asset('images/image 7.jpg') }}" alt="about">
            </div>
            <div class="caption-about col-lg-4 align-self-center">
                <p>CV Mandala Jaya Solusi Bangunan Anda</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="overview d-flex flex-wrap flex-column-reverse flex-lg-row">
            <div class="content-overview w-50 px-5">
                <h1>Overview</h1>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
                </p>
            </div>
            <div class="image-overview w-50 px-5">
                <img src="{{ asset('images/image 8.jpg') }}" alt="overview">
            </div>
        </div>
    </div>
    <div class="vision-section">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-4">
                    <h1>Visi</h1>
                    <ol>
                        <li>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</li>
                        <li>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</li>
                        <li>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</li>
                        <li>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</li>
                        <li>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <h1>Misi</h1>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <div class="container">
            <h1>Tim Kami</h1>
            <div class="row justify-content-evenly">
                <div class="col-md-2">
                    <figure class="figure">
                        <img src="{{ asset('images/team/team1.jpg') }}" class="figure-img img-fluid" alt="...">
                        <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
                    </figure>
                </div>
                <div class="col-md-2">
                    <figure class="figure">
                        <img src="{{ asset('images/team/team2.jpg') }}" class="figure-img img-fluid" alt="...">
                        <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
                    </figure>
                </div>
                <div class="col-md-2">
                    <figure class="figure">
                        <img src="{{ asset('images/team/team3.jpg') }}" class="figure-img img-fluid" alt="...">
                        <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
@endsection