@extends('layouts.website')
@section('content')







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

                <!-- Video 1 -->

                <div class="video-card" data-aos="zoom-in">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video1.jpg') }}" alt="">

                        <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID" target="_blank" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            03:45
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>House Shifting Services</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

                <!-- Video 2 -->

                <div class="video-card" data-aos="zoom-in" data-aos-delay="100">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video2.jpg') }}" alt="">

                        <a href="#" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            04:10
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>Office Relocation</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

                <!-- Video 3 -->

                <div class="video-card" data-aos="zoom-in" data-aos-delay="200">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video3.jpg') }}" alt="">

                        <a href="#" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            05:15
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>Bike Transportation</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

                <!-- Video 4 -->

                <div class="video-card" data-aos="zoom-in">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video4.jpg') }}" alt="">

                        <a href="#" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            04:40
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>Car Transportation</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

                <!-- Video 5 -->

                <div class="video-card" data-aos="zoom-in" data-aos-delay="100">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video5.jpg') }}" alt="">

                        <a href="#" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            03:30
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>Packing & Unpacking</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

                <!-- Video 6 -->

                <div class="video-card" data-aos="zoom-in" data-aos-delay="200">

                    <div class="video-image">

                        <img src="{{ asset('website/img/video/video6.jpg') }}" alt="">

                        <a href="#" class="video-play">

                            <i class="fa-solid fa-play"></i>

                        </a>

                        <span class="video-duration">
                            04:55
                        </span>

                    </div>

                    <div class="video-content">

                        <h4>Warehouse & Storage</h4>

                        <span>
                            <i class="fa-regular fa-calendar"></i>
                            June 2026
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--==================================
                  YOUTUBE CHANNEL
            ===================================-->

    <section class="youtube-section">

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

    </section>


    <!--==================================
                VIDEO CTA SECTION
        ===================================-->

    <section class="video-cta">

        <div class="cta-overlay"></div>

        <span class="cta-shape shape-one"></span>
        <span class="cta-shape shape-two"></span>
        <span class="cta-shape shape-three"></span>

        <div class="container">

            <div class="video-cta-content" data-aos="zoom-in">

                <span class="cta-badge">

                    <i class="fa-solid fa-truck-fast"></i>

                    Let's Move Together

                </span>

                <h2>

                    Ready For A Safe & Stress-Free Relocation?

                </h2>

                <p>

                    Whether you're moving your home, office, bike, or car,
                    our experienced professionals ensure secure packing,
                    careful transportation, and timely delivery anywhere in India.

                </p>

                <div class="cta-buttons">

                    <a href="tel:+919866166456" class="cta-btn call-btn">

                        <i class="fa-solid fa-phone-volume"></i>

                        Call Now

                    </a>

                    <a href="https://wa.me/919866166456" target="_blank" class="cta-btn whatsapp-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                        WhatsApp

                    </a>

                    <a href="{{ route('contact') }}" class="cta-btn quote-btn">

                        <i class="fa-solid fa-file-signature"></i>

                        Get Free Quote

                    </a>

                </div>

            </div>

        </div>

    </section>



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