<style>
/* Menambahkan efek zoom-in pada item navbar */
.navbar-nav .nav-item .nav-link {
    transition: transform 0.3s ease, color 0.3s ease;
    font-size: 18px;  /* Ukuran font default */
}

.navbar-nav .nav-item:hover .nav-link {
    transform: scale(1.1);  /* Membesarkan item navbar saat di-hover */
    color: #000000;  /* Mengubah warna teks saat hover */
}

.navbar-nav .nav-item .nav-link {
    font-size: 20px; /* Ukuran font untuk navbar item */
    font-weight: bold; /* Menebalkan teks */
}


</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid">
        <br>
        <br>
        <a class="navbar-brand" href="#"><strong>Airplanes Ticket</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Pesan Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact')}}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
