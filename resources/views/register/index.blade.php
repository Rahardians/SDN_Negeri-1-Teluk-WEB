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
    <link href="{{asset('')}}https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS Files -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
    {{-- Bootstrap  Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {{-- Style CSS login --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html">
                        <img src="{{asset('')}}assets/img/logo.png"></a>
                </h1>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="index.html">Beranda</a></li>
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
                    <li><a href="kontak.html">Kontak</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">
                        <i class="bi bi-box-arrow-right"></i> Login </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                {{-- Menu Login & Regis --}}
                {{-- <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="/login" class="nav-link"> Login </a>
                    </li>
                </ul> --}}
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    {{-- Form Login --}}
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-register">
                <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                  <div class="form-floating">
                        <input type="email" name="name" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                  </div>
                  <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="password">
                        <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already Register ? 
                    <a href="/login">Login</a></small>
              </main>
        </div>
    </div>
    
   

        <!-- Kontak -->
        <section class="Kontak mt-5">
            <div class="container">
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
    <!-- End #main -->

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
    <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('')}}assets/js/main.js"></script>

</body>

</html>
