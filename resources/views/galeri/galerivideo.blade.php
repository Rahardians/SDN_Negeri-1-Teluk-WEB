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
                            <span class="oren title-hero-2">GALERI</span>
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
        <section class="galerivideo">
            <div class="container">
                
                <h1 class="fasilitas-title oren mb-5">Galeri Video</h1>
                <div class="row justify-content-center md-center">
                    <div class="col-lg-7 video-box">
                        <div class="text-center">
                            @forelse ($galerivideo as $data)
                            <div><iframe width="700" height="500" src="{{ $data->content }}" title="YouTube video player" 
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                            @empty 

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
    </main>
@endsection