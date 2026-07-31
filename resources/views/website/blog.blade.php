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
                    LATEST ARTICLES
            ===================================-->

    <section class="latest-blogs">

        <div class="container">

            <div class="section-heading text-center" data-aos="fade-up">

                <span class="section-tag">

                    <i class="fa-solid fa-newspaper"></i>

                    Latest Blogs

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

                @forelse($blogs as $blog)

                    <article class="blog-card" data-aos="fade-up">

                        <div class="blog-image">

                            <img src="{{ $blog->image ? asset($blog->image) : asset('website/img/hshift.png') }}"
                                alt="{{ $blog->title }}">


                            <span class="blog-badge">
                                {{ $blog->type ?? 'Blog' }}
                            </span>

                        </div>


                        <div class="blog-body">

                            <div class="blog-meta">
                                <span>
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $blog->created_at->format('F d, Y') }}
                                </span>
                            </div>


                            <h3>
                                {{ $blog->title }}
                            </h3>


                            <p>
                                {{ \Illuminate\Support\Str::limit($blog->short_description, 120) }}
                            </p>


                            <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

                                Read More

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                @empty

                    <div class="text-center w-100 py-5">
                        <p>No blogs available.</p>
                    </div>

                @endforelse

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

                        <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

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

                        <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

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

                        <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

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

                        <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

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

                        <a href="{{ route('blog-details', $blog->slug) }}" class="blog-btn">

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