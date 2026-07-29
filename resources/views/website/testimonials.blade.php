@extends('layouts.website')
@section('content')

    <!--==================================
                TESTIMONIAL HERO
        ===================================-->

    <section class="testimonial-hero" style="background:
            linear-gradient(120deg, rgba(12, 42, 82, 0.92), rgba(12, 42, 82, 0.55)),
            url('{{ asset('website') }}/img/pbcmov.png') center center / cover no-repeat;">

        <div class="hero-overlay"></div>

        <span class="hero-shape shape-one"></span>
        <span class="hero-shape shape-two"></span>
        <span class="hero-shape shape-three"></span>

        <div class="container">

            <div class="testimonial-hero-content" data-aos="fade-up">

                <span class="hero-tag">

                    <i class="fa-solid fa-star"></i>

                    Trusted By Thousands

                </span>

                <h1>

                    Customer
                    <span>Testimonials</span>

                </h1>

                <p>

                    Discover why thousands of families and businesses trust
                    PBC Packers & Movers for safe, reliable, and stress-free
                    relocation services across India.

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

                    <span>Testimonials</span>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
            FEATURED TESTIMONIAL
    ===================================-->

    <section class="featured-testimonial">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="section-tag">
                    <i class="fa-solid fa-quote-left"></i>
                    Featured Review
                </span>

                <h2>What Our Happy Customers Say</h2>

                <p>
                    Customer satisfaction is our greatest achievement. Here's what one
                    of our valued customers shared about their relocation experience.
                </p>

            </div>

            <div class="testimonial-wrapper">

                <!-- Customer Image -->

                <div class="testimonial-image" data-aos="fade-right">

                    <img src="{{ asset('website/img/testimonials/customer-1.jpg') }}" alt="Customer">

                    <div class="experience-badge">

                        <i class="fa-solid fa-award"></i>

                        Trusted Service

                    </div>

                </div>

                <!-- Review -->

                <div class="testimonial-content" data-aos="fade-left">

                    <div class="quote-icon">

                        <i class="fa-solid fa-quote-right"></i>

                    </div>

                    <div class="rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>

                    <p class="review">

                        "PBC Packers & Movers made our house shifting completely
                        stress-free. The team arrived on time, packed every item with
                        great care, and delivered everything safely without any damage.
                        Their professionalism and friendly service exceeded our
                        expectations. I highly recommend them for anyone planning a move."

                    </p>

                    <div class="customer-info">

                        <h4>Rahul Kumar</h4>

                        <span>House Shifting • Hyderabad</span>

                    </div>

                    <div class="review-footer">

                        <div class="verified">

                            <i class="fa-solid fa-circle-check"></i>

                            Verified Customer

                        </div>

                        <a href="{{ route('contact') }}" class="review-btn">

                            Get Free Quote

                        </a>

                    </div>

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