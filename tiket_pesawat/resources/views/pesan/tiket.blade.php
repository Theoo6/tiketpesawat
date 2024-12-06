@extends('master.layout')

@section('title')
    Contact
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
                    <!-- Pertandingan 1 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-dark"></h5>
                                <h5 class="card-title text-dark">Garuda Indonesia</h5>
                                <p class="card-text">Tanggal: 10 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Amsterdam</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 2 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="Arema FC vs Persija">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Garuda Indonesia</h5>
                                <p class="card-text">Tanggal: 18 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Tokyo (Narita)</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 3 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/garuda.jpg') }}" class="card-img-top" alt="Bali United vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Garuda Indonesia</h5>
                                <p class="card-text">Tanggal: 20 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Sydney</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 4 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top"
                                alt="Persija Jakarta vs PSS Sleman">
                            <div class="card-body">
                                <h5 class="card-title text-dark">AirAsia</h5>
                                <p class="card-text">Tanggal: 24 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Kuala Lumpur</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 5 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top" alt="Arema FC vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">AirAsia</h5>
                                <p class="card-text">Tanggal: 28 Desember 2024</p>
                                <p class="card-text">Tujuan : Surabaya - Singapore</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 6 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm">
                            <img src="{{ asset('img/AirAsia.jpeg') }}" class="card-img-top" alt="Persib Vs Persis">
                            <div class="card-body">
                                <h5 class="card-title text-dark">AirAsia</h5>
                                <p class="card-text">Tanggal: 30 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Bangkok</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Pertandingan 1 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Lion Air</h5>
                                <p class="card-text">Tanggal: 10 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Bali</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 2 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="Arema FC vs Persija">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Lion Air</h5>
                                <p class="card-text">Tanggal: 18 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Surabaya</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 3 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/lion.png') }}" class="card-img-top" alt="Bali United vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Lion Air</h5>
                                <p class="card-text">Tanggal: 20 Desember 2024</p>
                                <p class="card-text">Tujuan : Bali - Makassar</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 4 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/citilink.jpg') }}" class="card-img-top"
                                alt="Persija Jakarta vs PSS Sleman">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Citilink Indonesia</h5>
                                <p class="card-text">Tanggal: 24 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Surabaya</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 5 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/citilink.jpg') }}" class="card-img-top" alt="Arema FC vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Citilink Indonesia</h5>
                                <p class="card-text">Tanggal: 28 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Bali</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 6 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-4">
                            <img src="{{ asset('img/citilink.jpg') }}" class="card-img-top" alt="Persib Vs Persis">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Citilink Indonesia</h5>
                                <p class="card-text">Tanggal: 30 Desember 2024</p>
                                <p class="card-text">Tujuan : Surabaya - Makassar</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Pertandingan 1 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/sriwijaya.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Sriwijaya Air</h5>
                                <p class="card-text">Tanggal: 10 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Medan</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 2 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/sriwijaya.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Sriwijaya Air</h5>
                                <p class="card-text">Tanggal: 18 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Bali</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 3 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/sriwijaya.jpg') }}" class="card-img-top" alt="Bali United vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Sriwijaya Air</h5>
                                <p class="card-text">Tanggal: 20 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Palembang</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 4 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/wing.jpeg') }}" class="card-img-top"
                                alt="Persija Jakarta vs PSS Sleman">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Wings Air</h5>
                                <p class="card-text">Tanggal: 24 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Yogyakarta</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 5 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/wing.jpeg') }}" class="card-img-top" alt="Arema FC vs Persebaya">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Wings Air</h5>
                                <p class="card-text">Tanggal: 28 Desember 2024</p>
                                <p class="card-text">Tujuan : Jakarta - Surabaya</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pertandingan 6 -->
                    <div class="col">
                        <div class="card match-card h-100 shadow-sm mt-5">
                            <img src="{{ asset('img/wing.jpeg') }}" class="card-img-top" alt="Persib Vs Persis">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Wings Air</h5>
                                <p class="card-text">Tanggal: 30 Desember 2024</p>
                                <p class="card-text">Tujuan : Bali - Lombok</p>
                                <a href="https://wa.me/085648554408" class="btn btn-outline-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="bg-dark text-white text-center d-flex py-3 align-items-center justify-content-center mt-5">
            <p>&copy; 2024 Pemesanan Tiket Pesawat. Semua Hak Dilindungi.</p>
        </footer>
    </body>

    </html>
@endsection
