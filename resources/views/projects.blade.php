@extends('layouts.main')
@section('main')
    <div class="projects-banner">
        <h1>Projek Kami</h1>
    </div>
    <div class="container">
        <div class="projects-section">
            <div class="title-projects">
                <h2>Projects Interior</h2>
                <img src="{{ asset('images/icons/Arrow.png') }}" alt="arrow" class="icon-arrow">
            </div>
            <div class="projects-item">
                <div class="row mx-auto my-auto justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/interior1.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>       
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/interior2.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/interior3.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects-section">
            <div class="title-projects">
                <h2>Projects House</h2>
                <img src="{{ asset('images/icons/Arrow.png') }}" alt="arrow" class="icon-arrow">
            </div>
            <div class="projects-item">
                <div class="row mx-auto my-auto justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/house1.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>        
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/house2.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/house3.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects-section">
            <div class="title-projects">
                <h2>Other Projects</h2>
                <img src="{{ asset('images/icons/Arrow.png') }}" alt="arrow" class="icon-arrow">
            </div>
            <div class="projects-item">
                <div class="row mx-auto my-auto justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/pool1.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>      
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/taman.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>        
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/pool2.jpeg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="testimonial-section">
            <h1>Apa yang Pelanggan Katakan Tentang Produk Kami?</h1>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="testimoni" class="carousel slide" data-bs-ride="testimoni">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Desain Oke</h4>
                                        <p>Pengerjaan interior sangat oke serta hasilnya sangat memuaskan, banyak pilihan desain dan bisa juga sepaket dengan interior yang dibutuhkan. Dijamin Puas</p>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3">
                                                <img src="{{ asset('images/profile.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <strong>Ubaidillah</strong>
                                                <p>IT Konsultan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Pengerjaan cepat</h4>
                                        <p>Pengerjaan proyek sangat cepat dan bisa selesai sesuai dengan jadwal, bahan yang digunakan juga sesuai dengan spesifikasi yang ditentukan serta admin ramah</p>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3">
                                                <img src="{{ asset('images/profile.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <strong>Elsa</strong>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Pengerjaan profesional</h4>
                                        <p>Hasil pengerjaan yang bagus dan sesuai dengan apa yang ada digambar, tidak diragukan lagi serta pekerja kontruksi berpengalaman juga</p>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3">
                                                <img src="{{ asset('images/profile.png') }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <strong>Ahmad</strong>
                                                <p>Arsitek</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparnt w-aut" href="#testimoni" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-secondary" style="--bs-bg-opacity: .5;" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparnt w-aut" href="#testimoni" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-secondary" style="--bs-bg-opacity: .5;" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection