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
                            <span class="oren title-hero-2">BERITA</span>
                        </div>
                        <div class="tengah title-hero">
                            <h2 class="putih">SD NEGERI 1 TELUK</h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    {{-- Main --}}
    <main id="main">
        <!-- ======= Section Berita  ======= -->
        <section class="berita">
            <div class="container">

                <div class="container-sm">
                    <div class="row d-flex justify-content-center p-3">
                        @forelse ($berita as $data)
                        <div class="col-md-4 col-md-offset-5 p-3">
                            <div class="card-berita-2" style="width: 18rem;">
                                @foreach (json_decode($data->img) as $image)
                                    <a href="{{ route('contentberita',$data->id) }}"><img
                                    src="{{ url('img/photo/' . $image) }}" class="card-img-top"
                                    alt="{{ $image }}"></a>
                                @endforeach
                                <div class="card-body">
                                    <p> {{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}} </p>
                                    <h6 class="card-title-2">{{ $data->title }}</h6>
                                    <a href="{{ route('contentberita',$data->id) }}" class="btn btn-oren">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @empty 

                        @endforelse
                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- End #main -->


@endsection
