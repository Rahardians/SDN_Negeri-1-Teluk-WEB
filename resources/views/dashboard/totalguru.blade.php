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
                            <span class="oren title-hero-2">Dashboard</span>
                        </div>
                        <div class="tengah title-hero">
                            <h2 class="putih">SD NEGERI 1 TELUK</h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Section Perpustakaan  ======= -->
        <section class="kantin">
            <div class="container">

                <h1 class="fasilitas-title oren mb-5">{{ $data->title }}</h1>
                <div class="row justify-content-center md-center">
                    <div class="col-lg-6 video-box">
                        @if (!empty($data->img))
                            <div class="text-center">
                                @foreach (json_decode($data->img) as $image)
                                    <a href="{{ url('img/photo/' . $image) }}"><img
                                            src="{{ url('img/photo/' . $image) }}" class="img-fluid"
                                            style="width:100%; height: 100%; border-radius: 15px;"
                                            alt="{{ $image }}"></a>
                                @endforeach
                            </div>
                        @else

                        @endif
                    </div>

                    <div class="row justify-content-center md-center">
                        <span class="mt-5">{{ $data->content }}
                        </span>
                    </div>
                </div>
        </section>
        
        <!-- End Section -->
    </main>
    <!-- End #main -->


@endsection
