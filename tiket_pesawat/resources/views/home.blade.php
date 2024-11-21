@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan Tiket Pesawat</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       /* Menambahkan gambar latar belakang */
    .bg-image {
        background-image: url('img/bandara soehatta.jpg'); /* Ganti dengan path gambar Anda */
        background-size: cover; /* Agar gambar menutupi seluruh elemen */
        background-position: center; /* Menempatkan gambar di tengah */
        background-repeat: no-repeat; /* Menghindari gambar terulang */
        height: 100vh; /* Mengatur tinggi elemen (misal, seukuran layar) */
        position: relative; /* Agar overlay bisa ditempatkan di atas gambar */
    }

    .bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Black overlay with 40% opacity */
    z-index: 1; /* Makes sure the overlay is above the background but below the content */
    }

    .container {
        position: relative;
        z-index: 2; /* Ensures the text content appears above the overlay */
    }
    /* Container yang mengandung teks dan elemen lainnya */
    .container {
        height: 100%; /* Full height of the parent */
        position: relative; /* Agar elemen anak (teks) tetap berada di atas overlay */
        z-index: 2; /* Menempatkan container di atas overlay */
    }

    /* Menata posisi konten secara vertikal dan horizontal */
    .d-flex {
        display: flex;
        flex-direction: column; /* Vertically center content */
        justify-content: center; /* Center vertically */
        align-items: center; /* Center horizontally */
    }

    h1 {
        margin: 0;
        color: white; /* Membuat teks menjadi putih agar kontras dengan latar belakang gelap */
    }

    /* Styling untuk card */
    .card-img-top {
        height: 200px; /* Atur tinggi gambar */
        object-fit: cover; /* Agar gambar tidak terdistorsi */
    }

    /* Menambahkan efek zoom-in pada card */
    .card {
        transition: transform 0.3s ease-in-out; /* Transisi halus saat card diperbesar */
    }

    .card:hover {
        transform: scale(1.05); /* Membuat card sedikit lebih besar saat hover */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Menambahkan efek shadow yang lebih besar saat hover */
    }

    </style>
</head>
<body>
  <div class="bg-image">
    <div class="bg-overlay"></div>
    <div class="container text-center py-5 d-flex align-items-center justify-content-center">
        <div>
            <h1 class="text-white">Selamat datang di Pemesanan Tiket Pesawat</h1>
            <h5 class="text-white">Pesan tiket pesawat dengan mudah dan cepat.</h5>
            <a href="#services" class="btn btn-light">Kebawah ↓</a>
        </div>
    </div>
  </div>

  <!-- Card Penerbangan -->
  <div id="services" class="container mt-5">
    <h2 class="mb-5 text-center">Berbagai Macam Penerbangan Kami</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg"> <!-- Menambahkan shadow-lg pada card -->
          <img src="img/Garuda.jpg" class="card-img-top" alt="Garuda Indonesia">
          <div class="card-body">
            <h5 class="card-title">Garuda Indonesia</h5>
            <p class="card-text">Garuda Indonesia melayani penerbangan ke berbagai destinasi internasional yaitu :</p>
            <ul>
                <li>Jakarta - Amsterdam</li>
                <li>Jakarta - Tokyo (Narita)</li>
                <li>Jakarta - Sydney</li>
            </ul>
            </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg"> <!-- Menambahkan shadow-lg pada card -->
          <img src="img/AirAsia.jpeg" class="card-img-top" alt="AirAsia">
          <div class="card-body">
            <h5 class="card-title">AirAsia</h5>
            <p class="card-text">Beberapa destinasi utama yang dilayani oleh Air Asia adalah:</p>
            <ul>
                <li>Jakarta - Kuala Lumpur</li>
                <li>Surabaya - Singapore</li>
                <li>Jakarta - Bangkok</li>
            </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg"> <!-- Menambahkan shadow-lg pada card -->
          <img src="img/lion.png" class="card-img-top" alt="Lion Air">
          <div class="card-body">
            <h5 class="card-title">Lion Air</h5>
            <p class="card-text">Beberapa destinasi utama yang dilayani oleh Lion Air adalah:</p>
            <ul>
                <li>Jakarta - Bali</li>
                <li>Jakarta - Surabaya</li>
                <li>Bali - Makassar</li>
            </ul>
          </div>
        </div>
      </div>
       <div class="col-md-4 mb-4">
            <div class="card shadow-lg"> <!-- Menambahkan shadow-lg pada card -->
                <img src="img/citilink.jpg" class="card-img-top" alt="Citilink">
                <div class="card-body">
                    <h5 class="card-title">Citilink Indonesia</h5>
                    <p>Beberapa destinasi utama yang dilayani oleh Citilink adalah:</p>
                    <ul>
                        <li>Jakarta - Surabaya</li>
                        <li>Jakarta - Bali</li>
                        <li>Surabaya - Makassar</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg"> <!-- Menambahkan shadow-lg pada card -->
                <img src="img/sriwijaya.jpg" class="card-img-top" alt="Sriwijaya Air">
                <div class="card-body">
                    <h5 class="card-title">Sriwijaya Air</h5>
                    <p>Beberapa destinasi utama yang dilayani oleh Sriwijaya Air adalah:</p>
                    <ul>
                        <li>Jakarta - Palembang</li>
                        <li>Jakarta - Medan</li>
                        <li>Jakarta - Bali</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <img src="img/wing.jpeg" class="card-img-top" alt="Wings Air Logo">
                <div class="card-body">
                    <h5 class="card-title">Wings Air</h5>
                    <p>Beberapa destinasi utama yang dilayani oleh Wings Air:</p>
                    <ul>
                        <li>Jakarta - Yogyakarta</li>
                        <li>Jakarta - Surabaya</li>
                        <li>Bali - Lombok</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Pemesanan Tiket Pesawat. Semua Hak Dilindungi.</p>
  </footer>

  <!-- Link ke jQuery dan Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
