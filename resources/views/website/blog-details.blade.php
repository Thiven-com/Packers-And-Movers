@extends('layouts.website')
@section('content')


    <!--==================================
                                                BLOG DETAILS HERO
                                        ===================================-->

    <section class="pbc-blog-hero">

        <div class="pbc-blog-overlay"></div>

        <div class="container">

            <div class="pbc-blog-content">

                <span class="pbc-blog-tag">
                    <i class="fa-solid fa-newspaper"></i>
                    Latest Blog & Details
                </span>

                <h1>{{ $blog->title }}</h1>

                <p>
                    Stay updated with expert moving tips, packing guides, relocation advice,
                    and the latest trends in the packers and movers industry.
                </p>

                <div class="pbc-blog-breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="{{ route('blog') }}">Blog</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <strong>{{ $blog->title }}</strong>
                </div>

            </div>

        </div>

    </section>



    <!--==========================
                                            BLOG CONTENT
                                    ===========================-->

    <section class="blog-details-section">

        <div class="container">

            <div class="blog-meta">
                <span>
                    <i class="fa-solid fa-house"></i>
                    {{ $blog->type ?? 'General Blog' }}
                </span>

                <span>
                    <i class="fa-regular fa-calendar"></i>
                    {{ $blog->created_at->format('F d, Y') }}
                </span>

                <span>
                    <i class="fa-regular fa-user"></i>
                    Admin
                </span>
            </div>

            <h2 class="blog-details-title">
                {{ $blog->title }}
            </h2>

            <p class="blog-intro">
                {{ $blog->short_description }}
            </p>

            <img src="{{ asset($blog->banner ?? $blog->image) }}" class="blog-feature-image" alt="{{ $blog->title }}">

            <div class="blog-content">
                {!! nl2br(e($blog->description)) !!}
            </div>








        </div>

    </section>





    <!--==================================
                                        RELATED BLOGS
                                ===================================-->

    <section class="related-blog-section">

        <div class="container">

            <div class="related-blog-heading">

                <h2>Related Articles</h2>

                <p>Explore more useful relocation guides and moving tips.</p>

            </div>

            <div class="related-blog-grid">

                <!-- Card 1 -->

                    @forelse($relatedBlogs as $relatedBlog)

                        <div class="related-blog-card">

                            <img src="{{ $relatedBlog->image ? asset($relatedBlog->image) : asset('website/img/hshift.png') }}"
                                alt="{{ $relatedBlog->title }}">


                            <div class="related-blog-content">

                                <h4>{{ $relatedBlog->title }}</h4>


                                <p>
                                    {{ \Illuminate\Support\Str::limit($relatedBlog->short_description, 70) }}
                                </p>


                                <a href="{{ route('blog-details', $relatedBlog->slug) }}">
                                    Read More
                                </a>

                            </div>

                        </div>

                    @empty

                        <div class="text-center w-100 py-4">
                            <p>No related blogs found.</p>
                        </div>

                    @endforelse

                <!-- Card 2 -->
                <div class="related-blog-card">

                    <img src="{{ asset('website') }}/img/offshift.png" alt="">

                    <div class="related-blog-content">

                        <h4>Office Relocation</h4>

                        <p>Professional office moving with minimum downtime.</p>

                        <a href="{{ route('blog-details', $blog->slug) }}">Read More</a>

                    </div>

                </div>

                <!-- Card 3 -->
                <div class="related-blog-card">

                    <img src="{{ asset('website') }}/img/biketra.png" alt="">

                    <div class="related-blog-content">

                        <h4>Bike Transport</h4>

                        <p>Door-to-door bike transportation across India.</p>

                        <a href="{{ route('blog-details', $blog->slug) }}">Read More</a>

                    </div>

                </div>

                <!-- Card 4 -->
                <div class="related-blog-card">

                    <img src="{{ asset('website') }}/img/cartra.png" alt="">

                    <div class="related-blog-content">

                        <h4>Car Transport</h4>

                        <p>Secure vehicle transportation with complete safety.</p>

                        <a href="{{ route('blog-details', $blog->slug) }}">Read More</a>

                    </div>

                </div>

                <!-- Card 5 -->
                <div class="related-blog-card">

                    <img src="{{ asset('website') }}/img/pacunpac.png" alt="">

                    <div class="related-blog-content">

                        <h4>Packing Tips</h4>

                        <p>Best packing techniques to protect your valuables.</p>

                        <a href="{{ route('blog-details', $blog->slug) }}">Read More</a>

                    </div>

                </div>

                <!-- Card 6 -->
                <div class="related-blog-card">

                    <img src="{{ asset('website') }}/img/ware.png" alt="">

                    <div class="related-blog-content">

                        <h4>Warehouse Storage</h4>

                        <p>Safe and secure storage solutions for every need.</p>

                        <a href="{{ route('blog-details', $blog->slug) }}">Read More</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection