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

  <!-- Tabel Hasil Pencarian Tiket -->
  <div class="container mt-5">
    <h2>Penerbangan</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Maskapai</th>
          <th scope="col">Waktu Keberangkatan</th>
          <th scope="col">Harga (per Penumpang)</th>
          <th scope="col">Pilih</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Garuda Indonesia</td>
          <td>10:00 AM</td>
          <td>Rp 1.500.000</td>
          <td><button class="btn btn-success">Pilih</button></td>
        </tr>
        <tr>
          <td>AirAsia</td>
          <td>12:30 PM</td>
          <td>Rp 900.000</td>
          <td><button class="btn btn-success">Pilih</button></td>
        </tr>
        <tr>
          <td>Lion Air</td>
          <td>3:00 PM</td>
          <td>Rp 1.000.000</td>
          <td><button class="btn btn-success">Pilih</button></td>
        </tr>
      </tbody>
    </table>
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
