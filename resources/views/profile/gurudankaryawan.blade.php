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
                            <span class="oren title-hero-2">GURU & KARYAWAN</span>
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
        <!-- ======= Section Profile Guru  ======= -->
        <section class="profileguru">
            <div class="container">

                <h1 class="visi-misi-title oren mb-5" style="width: 350px;">Guru & Karyawan</h1>

                <div class="container-sm">
                    <div class="row d-flex justify-content-center p-3">
                        @forelse ($guru as $data)
                        <div class="col-md-4 col-md-offset-5 p-3 ">
                            <div class="card-guru" style="width: 18rem;">
                                @foreach (json_decode($data->img) as $image)
                                    <a href="{{ url('img/photo/' . $image) }}"><img
                                            src="{{ url('img/photo/' . $image) }}" class="card-img-top"
                                            alt="{{ $image }}"></a>
                                @endforeach
                                <div align="center" class="card-body">
                                    <h5>{{ $data->title }}</h5>
                                    <h6>{{ $data->content }}</h6>
                                </div>
                            </div>
                        </div>
                        @empty 

                        @endforelse

                    </div>

                </div>

            </div>
        </section>
        <!-- End Section -->
    </main>
@endsection