<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SD Negeri 1 Teluk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}assets/img/kemendikbud.png" rel="icon">


    <!-- Google Fonts -->
    <link href="{{ asset('') }}https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS Files -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('') }}assets/img/logo.png"></a>
                </h1>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="{{ route('dashboard') }}">Beranda</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Profile</a>
                            <div class="dropdown-content">
                                <a href="{{ route('visidanmisi') }}">Visi dan Misi</a>
                                <a href="{{ route('gurudankaryawan') }}">Guru dan Karyawan</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Fasilitas</a>
                            <div class="dropdown-content">
                                <a href="{{ route('perpustakaan') }}">Perpustakaan</a>
                                <a href="{{ route('ruangguru') }}">Ruang Guru</a>
                                <a href="{{ route('mushola') }}">Mushola</a>
                                <a href="{{ route('kantin') }}">Kantin</a>
                                <a href="{{ route('ruanglab') }}">Ruang Lab</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="{{\Request::route()->getName() == 'berita' ? 'active submenu' : null }}" href="{{ route('berita') }}">Berita</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Galeri</a>
                            <div class="dropdown-content">
                                <a href="{{ route('galerifoto') }}">Galeri Foto</a>
                                <a href="{{ route('galerifoto') }}">Galeri Video</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SD Negeri 1 Teluk</span></strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}assets/js/main.js"></script>
    @stack('js')
</body>

</html>
