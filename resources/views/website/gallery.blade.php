@extends('layouts.website')
@section('content')
    <!--==================================
                                                                    GALLERY HERO SECTION
                                                            ===================================-->

    <!--=========================
                                                            GALLERY HERO
                                                    ==========================-->

    <!--=========================
                                GALLERY HERO
                        ==========================-->
    <!--==================================
                            GALLERY HERO SECTION
                    ===================================-->

    <section class="gallery-hero">

        <div class="hero-overlay"></div>

        <!-- Floating Elements -->
        <span class="hero-circle circle-one"></span>
        <span class="hero-circle circle-two"></span>
        <span class="hero-circle circle-three"></span>

        <div class="container">

            <div class="gallery-hero-content" data-aos="fade-up">

                <span class="hero-badge">
                    <i class="fa-solid fa-camera-retro"></i>
                    PBC Packers & Movers
                </span>

                <h1>
                    Our
                    <span>Photo Gallery</span>
                </h1>

                <p>
                    Explore our successful house shifting, office relocation,
                    vehicle transportation, packing, loading, unloading,
                    warehouse and storage projects completed safely across India.
                </p>

                <div class="hero-btns">

                    <a href="{{ route('contact') }}" class="hero-btn hero-orange">
                        <i class="fa-solid fa-phone-volume"></i>
                        Get Free Quote
                    </a>

                    <a href="{{ route('services') }}" class="hero-btn hero-white">
                        <i class="fa-solid fa-truck-fast"></i>
                        Our Services
                    </a>

                </div>

                <div class="hero-breadcrumb">

                    <a href="{{ route('home') }}">Home</a>

                    <span><i class="fa-solid fa-angle-right"></i></span>

                    <span>Gallery</span>

                </div>

            </div>

        </div>

    </section>





    <!--==============================
                        PHOTO GALLERY
                ===============================-->

    <section class="gallery-section">

        <div class="container">

            <div class="gallery-heading">

                <span class="gallery-tag">
                    Photo Gallery
                </span>

                <h2>Our Successful Moving Projects</h2>

                <p>
                    Explore our professional packing, loading, transportation,
                    and relocation services delivered safely across India.
                </p>

            </div>


            <div class="gallery-grid">

                @forelse($galleries as $gallery)

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                        <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">


                        <div class="gallery-overlay">

                            <h4>
                                {{ $gallery->title }}
                            </h4>


                            {{-- <a href="{{ asset($gallery->image) }}" data-fancybox="gallery">

                                <i class="fa-solid fa-magnifying-glass-plus"></i>

                            </a> --}}

                        </div>

                    </div>

                @empty

                    <div class="text-center w-100">
                        <p>No gallery images found.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </section>


    <section class="work-highlights">

        <div class="container">

            <div class="section-title">

                <span>OUR STRENGTH</span>

                <h2>
                    Work Highlights
                </h2>

                <p>
                    Quality, safety and reliability in every move we handle.
                </p>

            </div>


            <div class="highlight-grid">


                <div class="highlight-card">

                    <div class="highlight-icon">
                        📦
                    </div>

                    <h3>
                        Safe Packing
                    </h3>

                    <p>
                        Premium packing materials and expert handling
                        to protect your valuable belongings.
                    </p>

                </div>



                <div class="highlight-card">

                    <div class="highlight-icon">
                        👷
                    </div>

                    <h3>
                        Professional Team
                    </h3>

                    <p>
                        Experienced professionals trained to manage
                        every relocation smoothly.
                    </p>

                </div>



                <div class="highlight-card">

                    <div class="highlight-icon">
                        🚚
                    </div>

                    <h3>
                        Modern Fleet
                    </h3>

                    <p>
                        Reliable vehicles equipped for secure
                        transportation across locations.
                    </p>

                </div>



                <div class="highlight-card">

                    <div class="highlight-icon">
                        🔒
                    </div>

                    <h3>
                        Secure Delivery
                    </h3>

                    <p>
                        Committed to safe, timely and hassle-free
                        delivery solutions.
                    </p>

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