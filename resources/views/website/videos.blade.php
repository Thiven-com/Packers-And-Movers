@extends('layouts.website')
@section('content')


    <style>
        .video-image {
            overflow: hidden;
            border-radius: 18px;
        }

        .video-link {
            position: relative;
            display: block;
        }

        .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background: #ff7a00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
        }
    </style>




    <!--==================================
                                            VIDEO HERO SECTION
                                    ===================================-->

    <section class="video-hero" style="background:
                        linear-gradient(120deg, rgba(12, 42, 82, 0.92), rgba(12, 42, 82, 0.55)),
                        url('{{ asset('website') }}/img/pbcmov.png') center center / cover no-repeat;">

        <div class="video-overlay"></div>

        <!-- Floating Shapes -->
        <span class="shape shape-1"></span>
        <span class="shape shape-2"></span>
        <span class="shape shape-3"></span>

        <div class="container">

            <div class="video-hero-content" data-aos="fade-up">

                <span class="hero-badge">
                    <i class="fa-solid fa-circle-play"></i>
                    PBC Packers & Movers
                </span>

                <h1>
                    Our
                    <span>Video Gallery</span>
                </h1>

                <p>
                    Watch our expert team in action as we provide safe packing,
                    loading, transportation, vehicle shifting, warehouse storage,
                    and hassle-free relocation services across India.
                </p>

                <div class="hero-buttons">

                    <a href="{{ route('contact') }}" class="hero-btn btn-orange">

                        <i class="fa-solid fa-phone"></i>

                        Get Free Quote

                    </a>

                    <a href="{{ route('services') }}" class="hero-btn btn-white">

                        <i class="fa-solid fa-truck-fast"></i>

                        Our Services

                    </a>

                </div>

                <div class="hero-breadcrumb">

                    <a href="{{ route('home') }}">Home</a>

                    <i class="fa-solid fa-angle-right"></i>

                    <span>Videos</span>

                </div>

            </div>

        </div>

    </section>





    <!--==================================
                                    LATEST VIDEOS
                            ===================================-->

    <section class="latest-videos">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="section-subtitle">
                    <i class="fa-solid fa-video"></i>
                    Latest Videos
                </span>

                <h2>Explore Our Moving Services in Action</h2>

                <p>
                    Watch our latest packing, loading, transportation and relocation
                    videos to see how we ensure a safe and hassle-free moving experience.
                </p>

            </div>


            <div class="video-grid">

                @forelse($videos as $video)

                    <div class="video-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                        <div class="video-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="video-image position-relative">

                                {{-- YouTube Thumbnail --}}
                                <a href="https://www.youtube.com/watch?v={{ $video->youtube_video }}" target="_blank"
                                    class="video-link">

                                    <img src="https://img.youtube.com/vi/{{ $video->youtube_video }}/hqdefault.jpg"
                                        alt="{{ $video->title }}" class="img-fluid w-100 rounded-4">


                                    {{-- Play Button --}}
                                    <span class="video-play-btn">
                                        <i class="fa-solid fa-play"></i>
                                    </span>

                                </a>

                            </div>


                            <div class="video-content mt-3">

                                <h4>{{ $video->title }}</h4>


                                <span>
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $video->created_at->format('F Y') }}
                                </span>

                            </div>

                        </div>



                    </div>

                @empty

                    <div class="text-center w-100">
                        <p>No videos available.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </section>



    <!--==================================
                              YOUTUBE CHANNEL
                        ===================================-->

    {{-- <section class="youtube-section">

        <div class="container">

            <div class="youtube-wrapper">

                <div class="youtube-left" data-aos="fade-right">

                    <div class="youtube-icon">

                        <i class="fa-brands fa-youtube"></i>

                    </div>

                </div>

                <div class="youtube-right" data-aos="fade-left">

                    <span class="youtube-tag">

                        Official YouTube Channel

                    </span>

                    <h2>

                        Watch More Packing & Moving Videos

                    </h2>

                    <p>

                        Stay connected with PBC Packers & Movers and explore our
                        latest house shifting, office relocation, vehicle
                        transportation, packing techniques, customer success
                        stories, and moving tips through our official YouTube
                        channel.

                    </p>

                    <div class="youtube-buttons">

                        <a href="https://youtube.com/" target="_blank" class="subscribe-btn">

                            <i class="fa-brands fa-youtube"></i>

                            Subscribe Now

                        </a>

                        <a href="{{ route('contact') }}" class="contact-btn">

                            <i class="fa-solid fa-phone"></i>

                            Contact Us

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section> --}}




    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>

@endsection