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

        .bg-image::after {
            content: ""; /* Membuat elemen kosong */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3); /* Overlay gelap dengan opacity 0.3 untuk mengurangi kontras */
            z-index: 1; /* Menempatkan overlay di atas gambar */
        }

        .container {
            height: 100%; /* Full height of the parent */
        }

        .d-flex {
            display: flex;
            flex-direction: column; /* Vertically center content */
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }

        h1, p {
            margin: 0;
            
        }

        /* Styling untuk card */
        .card-img-top {
            height: 200px; /* Atur tinggi gambar */
            object-fit: cover; /* Agar gambar tidak terdistorsi */
        }

    </style>
</head>
<body>

  <!-- Hero Section -->
  <div class="bg-image">
    <div class="container text-center text-white py-5 d-flex align-items-center justify-content-center">
        <div>
            <h1>Selamat datang di Pemesanan Tiket Pesawat</h1>
            <p>Pesan tiket pesawat dengan mudah dan cepat.</p>
        </div>
    </div>
  </div>

  <!-- Card Penerbangan -->
  <div class="container mt-5">
    <h2 class="mb-4">Berbagai Macam Penerbangan Kami</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/Garuda.jpg" class="card-img-top" alt="Garuda Indonesia">
          <div class="card-body">
            <h5 class="card-title">Garuda Indonesia</h5>
            <p class="card-text">Keberangkatan: 10:00 AM</p>
            <p class="card-text mb-1"><strong>Harga: Rp 1.500.000</strong></p>
            <a href="#" class="btn btn-primary">Beli Tiket</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/AirAsia.jpeg" class="card-img-top" alt="AirAsia">
          <div class="card-body">
            <h5 class="card-title">AirAsia</h5>
            <p class="card-text">Keberangkatan: 12:30 PM</p>
            <p class="card-text mb-1"><strong>Harga: Rp 900.000</strong></p>
            <a href="#" class="btn btn-primary">Beli Tiket</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/lion.png" class="card-img-top" alt="Lion Air">
          <div class="card-body">
            <h5 class="card-title">Lion Air</h5>
            <p class="card-text">Keberangkatan: 3:00 PM</p>
            <p class="card-text mb-1"><strong>Harga: Rp 1.000.000</strong></p>
            <a href="#" class="btn btn-primary">Beli Tiket</a>
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
</body>
</html>

@endsection
