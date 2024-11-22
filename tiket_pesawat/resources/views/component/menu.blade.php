<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplanes Ticket</title>

    <!-- Menambahkan Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJvYNo3fP6wS7t9tFlT9I8XsmTxkp+XWwqvX5tkO3y56XtQoJlxrbjsTbAWZ" crossorigin="anonymous">
    <style>
        /* Mengganti font untuk seluruh body */
        body {
            font-family: 'Roboto', sans-serif;
            /* Ganti font body dengan Roboto */
        }

        /* Menambahkan efek zoom-in pada item navbar */
        .navbar-nav .nav-item .nav-link {
            transition: transform 0.3s ease, color 0.3s ease;
            font-size: 18px;
            /* Ukuran font default */
        }

        .navbar-nav .nav-item:hover .nav-link {
            transform: scale(1.1);
            /* Membesarkan item navbar saat di-hover */
            color: #000000;
            /* Mengubah warna teks saat hover */
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 20px;
            /* Ukuran font untuk navbar item */
        }

        /* Custom Shadow untuk Navbar */
        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Bayangan dengan arah 4px ke bawah dan opacity 0.2 */
        }
    </style>
</head>

<body>

    <!-- Navbar dengan sticky-top dan shadow -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tiket Pesawat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('tiket') }}">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
            </div>
            <div class="d-flex ms-2">
                <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybBf0D1E5w2V1C3M4pa2z12Fj7v9RS76P5ag3O5Y/9JzD6v8W" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0j+KryoJm7D3Gv1ng2+FvyGQj5KNHk8L6zpkw1YJJ9pFOn8W" crossorigin="anonymous">
    </script>

</body>

</html>
