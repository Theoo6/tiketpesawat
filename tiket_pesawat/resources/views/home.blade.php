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
    </style>
</head>
<body>

  <!-- Hero Section -->

  <div class="bg-image">
    <div class="container text-center text-white py-5">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h1>Selamat datang di Pemesanan Tiket Pesawat</h1>
        <p>Pesan tiket pesawat dengan mudah dan cepat.</p>
    </div>
</div>
  <!-- Form Pemesanan -->
  <div class="container mt-5">
    <h2>Pemesanan Tiket Pesawat</h2>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="asal">Asal</label>
          <input type="text" class="form-control" id="asal" placeholder="Kota Asal">
        </div>
        <div class="form-group col-md-6">
          <label for="tujuan">Tujuan</label>
          <input type="text" class="form-control" id="tujuan" placeholder="Kota Tujuan">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tanggal">Tanggal Keberangkatan</label>
          <input type="date" class="form-control" id="tanggal">
        </div>
        <div class="form-group col-md-6">
          <label for="penumpang">Jumlah Penumpang</label>
          <input type="number" class="form-control" id="penumpang" placeholder="Jumlah Penumpang" min="1">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Cari Tiket</button>
    </form>
  </div>

  <!-- Tabel Hasil Pencarian Tiket -->
  <div class="container mt-5">
    <h2>Hasil Pencarian</h2>
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
