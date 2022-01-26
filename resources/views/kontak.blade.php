<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SD Negeri 1 Teluk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('')}}assets/img/kemendikbud.png" rel="icon">
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS Files -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{asset('')}}assets/css/style2.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html">
                        <img src="{{asset('')}}assets/img/logo2.png"></a>
                </h1>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Profile</a>
                            <div class="dropdown-content">
                                <a href="profile.html">Visi dan Misi</a>
                                <a href="guru.html">Guru dan Karyawan</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Fasilitas</a>
                            <div class="dropdown-content">
                                <a href="perpustakaan.html">Perpustakaan</a>
                                <a href="ruangguru.html">Ruang Guru</a>
                                <a href="mushola.html">Mushola</a>
                                <a href="kantin.html">Kantin</a>
                                <a href="ruanglab.html">Ruang Lab</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="berita.html">Berita</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Galeri</a>
                            <div class="dropdown-content">
                                <a href="galerifoto.html">Galeri Foto</a>
                                <a href="galerivideo.html">Galeri Video</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="active" href="kontak.html">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Hero -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="container">
                        <div class="tengah title-hero-2">
                            <span class="oren title-hero-2">KONTAK</span>
                        </div>
                        <div class="tengah title-hero">
                            <h2 class="putih">SD NEGERI 1 TELUK</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Section kritik dan saran  ======= -->
        <section class="kritik-saran">
            <div class="container">
                <h1 class="left-oren-title oren mb-5" style="width: 650px;">Kritik dan Saran atau pertanyaan</h1>
                <form>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <a href="comingsoon.html" class="btn btn-oren">Kirim Pesan</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Section -->

        <!-- Kontak -->
        <section class="Kontak mt-1">
            <div class="container">
                <h1 class="left-oren-title oren mb-5" style="width: 350px;">Alamat dan Email</h1>
                <div class="row">
                    <div class="col">
                        <h1><b>Kontak</b></h1>
                        <ul class="pb-3">
                            <li class="pb-3">
                                <img src="{{asset('')}}assets/img/location.png">
                                <span>HOS Notosuwiryo, Purwokerto Selatan, Kruwet, Teluk, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53145</span>
                            </li>

                            <li class="pb-3 kontak-list">
                                <img src="{{asset('')}}assets/img/email.png"> Support@Figma.com
                            </li>

                            <li class="pb-3">
                                <img src="{{asset('')}}assets/img/phone.png"> +62281624540
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=SDN%20Teluk%2001%20JL%20HOS%20Notosuwiryo,%20Purwokerto%20Selatan,%20Kruwet,%20Teluk,%20Kec.%20Purwokerto%20Sel.,%20Kabupaten%20Banyumas,%20Jawa%20Tengah%2053145&t=&z=19&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none!important;
                                        height: 500px;
                                        width: 600px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong>
          <span>SD Negeri 1 Teluk</span>
                                </strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('')}}assets/js/main.js"></script>

</body>

</html>