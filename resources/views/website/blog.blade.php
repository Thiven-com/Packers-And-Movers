@extends('layouts.website')
@section('content')

    <!--==================================
                    BLOG HERO SECTION
            ===================================-->

    <section class="blog-hero" style="background:
            linear-gradient(120deg, rgba(12, 42, 82, 0.92), rgba(12, 42, 82, 0.55)),
            url('{{ asset('website') }}/img/pbcmov.png') center center / cover no-repeat;">

        <div class="blog-overlay"></div>

        <!-- Floating Shapes -->
        <span class="blog-shape shape-one"></span>
        <span class="blog-shape shape-two"></span>
        <span class="blog-shape shape-three"></span>

        <div class="container">

            <div class="blog-hero-content" data-aos="fade-up">

                <span class="hero-tag">

                    <i class="fa-solid fa-book-open"></i>

                    PBC Packers & Movers Blog

                </span>

                <h1>

                    Moving Tips &
                    <span>Relocation Guides</span>

                </h1>

                <p>

                    Stay informed with expert moving tips, packing guides,
                    relocation advice, transportation updates, and practical
                    solutions to make every move safe, simple, and stress-free.

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

                    <span>Blog</span>

                </div>

            </div>

        </div>

    </section>



    <!--==================================
                FEATURED BLOG
        ===================================-->

    <section class="featured-blog">

        <div class="container">

            <div class="section-heading" data-aos="fade-up">

                <span class="section-tag">

                    <i class="fa-solid fa-fire"></i>

                    Featured Article

                </span>

                <h2>Latest Moving Tips & Expert Advice</h2>

                <p>

                    Explore our featured article packed with expert relocation
                    advice, practical packing tips, and moving guides to make
                    your next move smooth and stress-free.

                </p>

            </div>

            <div class="featured-blog-wrapper">

                <!-- Image -->

                <div class="featured-blog-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/blog1.png" alt="Featured Blog">

                    <div class="blog-category">

                        Moving Tips

                    </div>

                </div>

                <!-- Content -->

                <div class="featured-blog-content" data-aos="fade-left">

                    <div class="blog-meta">

                        <span>

                            <i class="fa-regular fa-calendar"></i>

                            July 30, 2026

                        </span>

                        <span>

                            <i class="fa-regular fa-user"></i>

                            Admin

                        </span>

                        <span>

                            <i class="fa-regular fa-clock"></i>

                            5 Min Read

                        </span>

                    </div>

                    <h3>

                        10 Essential Things To Do Before
                        Shifting Your Home

                    </h3>

                    <p>

                        Relocating to a new home can be exciting, but proper planning
                        is the key to a hassle-free move. From organizing your
                        belongings to choosing professional movers, our expert guide
                        helps you prepare for every step of the relocation process.

                    </p>

                    <ul class="blog-highlights">

                        <li>

                            <i class="fa-solid fa-circle-check"></i>

                            Prepare a moving checklist

                        </li>

                        <li>

                            <i class="fa-solid fa-circle-check"></i>

                            Use high-quality packing materials

                        </li>

                        <li>

                            <i class="fa-solid fa-circle-check"></i>

                            Label every moving box

                        </li>

                        <li>

                            <i class="fa-solid fa-circle-check"></i>

                            Hire trusted relocation experts

                        </li>

                    </ul>

                    <a href="#" class="read-blog-btn">

                        Read Full Article

                        <i class="fa-solid fa-arrow-right-long"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
            LATEST ARTICLES
    ===================================-->

    <section class="latest-blogs">

        <div class="container">

            <div class="section-heading text-center" data-aos="fade-up">

                <span class="section-tag">

                    <i class="fa-solid fa-newspaper"></i>

                    Latest Articles

                </span>

                <h2>Explore Our Latest Moving Guides</h2>

                <p>

                    Stay updated with expert relocation tips, packing advice,
                    transportation guides, and moving solutions from
                    PBC Packers & Movers.

                </p>

            </div>

            <div class="blog-grid">

                <!-- Blog 1 -->

                <article class="blog-card" data-aos="fade-up">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/hshift.png" alt="">

                        <span class="blog-badge">

                            House Shifting

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 30, 2026</span>

                        </div>

                        <h3>

                            Essential House Shifting Tips For A Smooth Move

                        </h3>

                        <p>

                            Learn how proper planning and professional packing
                            can make your relocation safe and stress-free.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

                <!-- Blog 2 -->

                <article class="blog-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/offshift.png" alt="">

                        <span class="blog-badge">

                            Office Moving

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 28, 2026</span>

                        </div>

                        <h3>

                            Office Relocation Without Business Downtime

                        </h3>

                        <p>

                            Discover smart strategies to relocate your office
                            while keeping your business operations uninterrupted.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

                <!-- Blog 3 -->

                <article class="blog-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/cartra.png" alt="">

                        <span class="blog-badge">

                            Car Transport

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 25, 2026</span>

                        </div>

                        <h3>

                            Safe Car Transportation Across India

                        </h3>

                        <p>

                            Understand how professional vehicle carriers protect
                            your car during long-distance transportation.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

                <!-- Blog 4 -->

                <article class="blog-card" data-aos="fade-up">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/biketra.png" alt="">

                        <span class="blog-badge">

                            Bike Transport

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 22, 2026</span>

                        </div>

                        <h3>

                            Bike Transportation Made Safe & Easy

                        </h3>

                        <p>

                            Follow expert recommendations to transport your
                            motorcycle safely anywhere in India.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

                <!-- Blog 5 -->

                <article class="blog-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/pacunpac.png" alt="">

                        <span class="blog-badge">

                            Packing Tips

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 20, 2026</span>

                        </div>

                        <h3>

                            Professional Packing Techniques You Should Know

                        </h3>

                        <p>

                            Protect fragile belongings with expert packing methods
                            and quality packing materials.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

                <!-- Blog 6 -->

                <article class="blog-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="blog-image">

                        <img src="{{ asset('website') }}/img/ware.png" alt="">

                        <span class="blog-badge">

                            Warehouse

                        </span>

                    </div>

                    <div class="blog-body">

                        <div class="blog-meta">

                            <span><i class="fa-regular fa-calendar"></i> July 18, 2026</span>

                        </div>

                        <h3>

                            Secure Warehouse & Storage Solutions

                        </h3>

                        <p>

                            Explore secure storage facilities designed to keep
                            your belongings safe for short and long-term needs.

                        </p>

                        <a href="#" class="blog-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

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