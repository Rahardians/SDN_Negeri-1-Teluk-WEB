@extends('partials.user_partials')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="container">
                        <div class="tengah title-hero-2">
                            <span class="oren">KONTAK</span>
                        </div>
                        <div class="tengah title-hero">
                            <h2 class="putih tittle-hero-2">SD NEGERI 1 TELUK</h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- Kontak -->
        <section class="Kontak mt-1">
            <div class="container">
                <h1 class="left-oren-title oren mb-5" style="width: 350px;">Alamat dan Email</h1>
                <div class="row">
                    @if(!empty($kontak))
                    <div class="col">
                        <h1><b>{{ $kontak->title }}</b></h1>
                        <ul class="pb-3">
                            <li class="pb-3">
                                <span>{{ $kontak->alamat }}</span>
                            </li>

                            <li class="pb-3 kontak-list">
                                <span>{{ $kontak->email }}</span>
                            </li>

                            <li class="pb-3">
                                <span>{{ $kontak->hp }}</span>
                            </li>
                        </ul>
                    </div>
                    @endif
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
        {{-- End Section --}}
    </main>
    <!-- End #main -->


@endsection
