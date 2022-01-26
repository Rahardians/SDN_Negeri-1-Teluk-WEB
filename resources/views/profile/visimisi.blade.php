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
                            <span class="oren">VISI SD NEGERI 1 TELUK</span>
                        </div>
                        <div class="tengah title-hero">
                            <h2 class="putih tittle-hero-2">"UNGGUL DAN RELIGI"</h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- Indikator Visi -->
        @forelse ($visi as $data)
        <section class="visi-misi section-bg">
            <div class="container">
                <h1 class="visi-misi-title oren mb-5">{{ $data->title }}</h1>
                <ol class="visi-misi-list">{!! str_replace("\s","<br/>", $data->content) !!}
                </ol>
            </div>
        </section>
        @empty
            
        @endforelse
    </main>
    <!-- End #main -->


@endsection
