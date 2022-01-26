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
        <section class="detailberita">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="row mb-3">
                        <div class="col-md-11">
                        <p style="font-size: 30px; font-weight: 600;"><b>{{ $berita->title }}</b></p>
                        </div>
                      </div>
                        <div class="row">
                            <div class="col-md-5">
                                @foreach (json_decode($berita->img) as $image)
                                    <img
                                    src="{{ url('img/photo/' . $image) }}" class="img-fluid"
                                    alt="{{ $image }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-11">
                            <p style="text-justify: inter-word; text-align: justify;">{{ $berita->content }}</p>
                          </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @forelse($beritas as $data)
                        <div class="row mb-4">
                          <div class="col-sm-5">
                            @foreach (json_decode($data->img) as $image)
                                <a href="{{ route('contentberita',$data->id) }}"><img
                                src="{{ url('img/photo/' . $image) }}" class="img-thumbnail"
                                alt="{{ $image }}"></a>
                            @endforeach
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> {{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}} </b></p>
                            <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="{{ route('contentberita',$data->id) }}"><b>{{ $data->title }}</b></a></p>
                            <p style="font-size: 10px; margin-bottom: 2px ;">{{ Str::limit($data->content, 50) }}</p>
                            <a style="font-size: 12px; font-weight: 700;" href="{{ route('contentberita',$data->id) }}">
                              Readmore
                            </a>
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
