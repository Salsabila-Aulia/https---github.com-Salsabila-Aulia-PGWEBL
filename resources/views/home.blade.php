@extends('layout.template')

@section('content')
    {{-- Hero Section dengan Background Gambar --}}
    <section class="text-white"
        style="position: relative; background: url('{{ asset('storage/images/1750593599_point.jpeg') }}') center center / cover no-repeat; min-height: 800px;">
        <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
        <div class="container py-5 text-white position-relative" style="z-index: 7;">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold">Selamat Datang di <span class="text-warning">JEJAK</span></h1>
                    <h3 class="mb-3">Jelajah Eksotisme Karimunjawa</h3>
                    <p class="mb-3">Eksplorasi Data Geospasial Karimunjawa melalui Web Interaktif</p>
                </div>
                <div class="col-md-6">
                    {{-- Carousel Gambar --}}
                    <div id="carouselKarimunjawa" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/images/1750594504_point.png') }}" class="d-block w-100 rounded"
                                    alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750593599_point.jpeg') }}" class="d-block w-100 rounded"
                                    alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750593967_point.jpeg') }}" class="d-block w-55 rounded"
                                    alt="Slide 3">
                            </div>
                        </div>
                    </div>
                    {{-- Aktifkan slide otomatis --}}
                    <script>
                        var myCarousel = document.querySelector('#carouselKarimunjawa');
                        new bootstrap.Carousel(myCarousel, {
                            interval: 2000,
                            ride: 'carousel'
                        });
                    </script>
                </div>
            </div>
        </div>


        {{-- Fitur Section --}}
        <div class="container text-center mt-4 mb-3">
            <h3 class="text-white">Fitur Aplikasi</h3>
            <div class="row text-center">
                {{-- Peta Interaktif --}}
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-info" style="background-color: #e6f7ff;">
                        <div class="card-body">
                            <i class="fa-solid fa-map fa-2x text-info mb-2"></i>
                            <h6 class="card-title">Peta Interaktif</h6>
                            <p class="card-text small">Peta Interaktif dalam aplikasi JEJAK menampilkan sebaran lokasi-lokasi wisata unggulan di Kepulauan Karimunjawa secara visual dan informatif. Peta ini menyajikan titik-titik lokasi wisata seperti pantai, pulau kecil, spot snorkeling, hutan mangrove, hingga tempat konservasi laut</p>
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-warning" style="background-color: #fff8e6;">
                        <div class="card-body">
                            <i class="fa-solid fa-database fa-2x text-warning mb-2"></i>
                            <h6 class="card-title">Table</h6>
                            <p class="card-text small">Tabel data menyajikan informasi spasial dan atribut mengenai berbagai objek wisata, seperti pantai, pulau, atau spot snorkeling. Setiap entri mencakup nama lokasi, deskripsi singkat daya tarik wisata, pratinjau gambar, serta waktu pembuatan dan pembaruan data. </p>
                        </div>
                    </div>
                </div>

                {{-- My Profile --}}
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-danger" style="background-color: #ffe6e6;">
                        <div class="card-body">
                            <i class="fa-solid fa-chart-line fa-2x text-danger mb-2"></i>
                            <h6 class="card-title">My Profile</h6>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush small">
                                <li class="list-group-item bg-transparent"><strong>Nama:</strong> Salsabila Aulia</li>
                                <li class="list-group-item bg-transparent"><strong>NIM:</strong> 23/520763/SV/23294</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
