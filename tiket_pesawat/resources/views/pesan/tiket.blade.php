@extends('master.layout')

@section('title')
    Pesan Tiket
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <section id="matches" class="mt-5">
                <h2 class="text-center mb-4 text-dark">Pilih Penerbanganmu Sekarang Juga</h2>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Garuda Indonesia - Jakarta - Amsterdam -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="Garuda Indonesia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Garuda Indonesia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 10:00 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Amsterdam</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Garuda Indonesia - Jakarta - Tokyo -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="Garuda Indonesia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Garuda Indonesia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 12:00 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Tokyo (Narita)</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Garuda Indonesia - Jakarta - Sydney -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="Garuda Indonesia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Garuda Indonesia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 14:00 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Sydney</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- AirAsia - Jakarta - Kuala Lumpur -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top" alt="AirAsia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">AirAsia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 08:00 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Kuala Lumpur</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- AirAsia - Surabaya - Singapore -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top" alt="AirAsia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">AirAsia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 11:00 WIB</p>
                                <p class="card-text">Tujuan: Surabaya - Singapore</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- AirAsia - Jakarta - Bangkok -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top" alt="AirAsia">
                            <div class="card-body">
                                <h5 class="card-title text-primary">AirAsia</h5>
                                <p class="card-text">Waktu Pemberangkatan: 16:00 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Bangkok</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Lion Air - Jakarta - Bali -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="Lion Air">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Lion Air</h5>
                                <p class="card-text">Waktu Pemberangkatan: 07:30 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Bali</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lion Air - Jakarta - Surabaya -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="Lion Air">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Lion Air</h5>
                                <p class="card-text">Waktu Pemberangkatan: 09:15 WIB</p>
                                <p class="card-text">Tujuan: Jakarta - Surabaya</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lion Air - Bali - Makassar -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="Lion Air">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Lion Air</h5>
                                <p class="card-text">Waktu Pemberangkatan: 14:45 WIB</p>
                                <p class="card-text">Tujuan: Bali - Makassar</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="bg-dark text-white text-center d-flex py-3 align-items-center justify-content-center mt-5">
                    <p>&copy; 2024 Pemesanan Tiket Pesawat. Semua Hak Dilindungi.</p>
                </footer>
            </section>
        </div>
    </body>
    </html>
@endsection
