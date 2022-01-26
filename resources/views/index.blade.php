@extends('partials.userdashboard_partials')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="container">
                        @if(!empty($data['sambutan']))
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <h2 class="title-hero">{{ $data['header']->title }}</h2>
                                <h4 class="desc-hero">{{ $data['header']->content }}</h4>
                                <div>
                                    <div class="text-left text-lg-start ">
                                        <a href="{{ route('pendaftaran') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center rounded-pill">
                                            <span>Pendaftaran Peserta Didik Baru</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 hero-img">
                                @foreach (json_decode($data['header']->img) as $image)
                                    <img src="{{ url('img/photo/' . $image) }}" class="img-fluid" alt="">
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- Sambutan Kepala Sekolah -->
        <section class="sambutan-kepsek section-bg">
            <div class="container">
                @if(!empty($data['sambutan']))
                <div class="row">
                    <div class="col-sm-5 video-box">
                        @foreach (json_decode($data['sambutan']->img) as $image)
                            <img src="{{ url('img/photo/' . $image) }}" class="img-fluid" alt="">
                        @endforeach
                    </div>

                    <div class="col mt-3">

                        <div class="icon-box">
                            <h4>Sambutan</h4>
                            <h2 class="oren">{{ $data['sambutan']->title }}</h2>
                            <p>{{ $data['sambutan']->content }}</p>
                        </div>

                    </div>
                </div>
                @endif
            </div>
        </section>
        <!-- End Section -->

        <!-- Jumlah Guru & Karyawan -->
        <section class="jumlah-karyawan section-sc">
            <div class="container">
                <div class="card card-jumlah-karyawan">
                    <div class="card-body">
                        <div class="row p-5">
                            @forelse ($data['total'] as $item)
                            <div class="col">
                                @foreach (json_decode($item->img) as $image)
                                    <img src="{{ url('img/photo/' . $image) }}" width="70" alt="">
                                @endforeach
                                <span class="title-jumlah-karyawan">{{ $item->title }}</span><br>
                                <span class="title-jumlah-karyawn-angka">{{ $item->content }}</span>
                            </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->

        <!-- Ekstrakulikuler -->
        <section class="ekstra">
            <div class="section-title-lg">
                <h2><b>Ekstrakulikuler</b></h2>
            </div>

            <!-- List Ekstra -->
            <div class="container" style="padding-left: 80px;">
                @foreach($data['ekstra'] as $chunk)
                <div class="row mt-3">
                    @foreach($chunk as $value)
                    <div class="col">
                        <div class="list-ekstra">
                            @foreach (json_decode($value->img) as $image)
                                <img src="{{ url('img/photo/' . $image) }}" width="50">
                            @endforeach
                            {{ $value->title }}
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </section>


        <!-- Prestasi -->
        <div class="section-title-sc" style="margin-top: 100px;">
            <h2><b>Prestasi</b></h2>
        </div>

        <!-- Prestasi Section -->
        <section class="prestasi section-sc">
            <div class="container">
                <div class="tengah">
                    <div class="row">
                        @foreach ($data['prestasi'] as $item)
                        <div class="col">
                            <div class="icon-box icon-box-blue">
                                @foreach (json_decode($item->img) as $image)
                                    <img src="{{ url('img/photo/' . $image) }}" width="150">
                                @endforeach
                                <h5 class="juara-title mt-3"><a href="">{{ $item->title }}</a></h5>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- End Section -->


        <!-- ======= Section Berita  ======= -->
        <section class="berita">
            <div class="container">

                <div class="section-title-lg pb-5">
                    <h2><b>Berita</b></h2>
                </div>

                <div class="container-sm">
                    <div class="row d-flex justify-content-center p-3">

                        @forelse ($data['berita'] as $item)
                            <div class="col-md-4 col-md-offset-5 p-3">
                                <div class="card-berita" style="width: 18rem;">
                                    @foreach (json_decode($item->img) as $image)
                                        <img src="{{ url('img/photo/' . $image) }}" class="card-img-top" alt="">
                                    @endforeach
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $item->title }}</h6>
                                        <a href="{{ route('contentberita',$item->id) }}" class="btn btn-primary btn-oren">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse

                    </div>

                </div>
        </section>
        <!-- End Section -->

        <!-- Kontak -->
        <section class="Kontak mt-5">
            <div class="container">
                <div class="row">
                    @if(!empty($data['kontak']))
                    <div class="col">
                        <h1><b>{{ $data['kontak']->title }}</b></h1>
                        <ul class="pb-3">
                            <li class="pb-3">
                                <span>{{ $data['kontak']->alamat }}</span>
                            </li>

                            <li class="pb-3 kontak-list">
                                <span>{{ $data['kontak']->email }}</span>
                            </li>

                            <li class="pb-3">
                                <span>{{ $data['kontak']->hp }}</span>
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
        <!-- End Section -->

    </main>
    <!-- End #main -->

@endsection
