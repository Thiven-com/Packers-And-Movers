@extends('layouts.website')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <main>

        <style>
            <style>.video-image {
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
        </style>

        <style>
            /* Orange Button */

            .btn-orange {

                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;

                padding: 12px 28px;

                background: linear-gradient(135deg, #ff9800, #ff6d00);

                color: #fff !important;

                border: 2px solid transparent;

                border-radius: 8px;

                font-size: 15px;

                font-weight: 600;

                text-decoration: none;

                cursor: pointer;

                transition: all .3s ease;

            }


            .btn-orange:hover {

                background: linear-gradient(135deg, #ff6d00, #ff9800);

                color: #fff !important;

                transform: translateY(-2px);

                box-shadow: 0 8px 20px rgba(255, 109, 0, .3);

            }


            .btn-orange i {

                font-size: 16px;

            }


            /* Small Button */

            .btn-orange.btn-sm {

                padding: 9px 18px;

                font-size: 14px;

            }


            /* Full Width Button */

            .btn-orange.btn-block {

                width: 100%;

            }


            /* Mobile */

            @media(max-width:576px) {

                .btn-orange {

                    padding: 11px 22px;

                    font-size: 14px;

                }

            }
        </style>
        <style>
            /* Hero Action Buttons */

            .hero-actions {
                display: flex;
                align-items: center;
                gap: 15px;
                margin-top: 30px;
                flex-wrap: wrap;
            }


            .hero-actions .btn {

                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;

                padding: 13px 28px;

                border-radius: 8px;

                font-size: 15px;

                font-weight: 600;

                text-decoration: none;

                transition: all .3s ease;

            }


            /* Call Button */

            .hero-actions .btn-navy {

                background: #0b1f3a;

                color: #fff;

                border: 2px solid #0b1f3a;

            }


            .hero-actions .btn-navy:hover {

                background: #fff;

                color: #0b1f3a;

            }


            /* WhatsApp Button */

            .hero-actions .btn-green {

                background: #25D366;

                color: #fff;

                border: 2px solid #25D366;

            }


            .hero-actions .btn-green:hover {

                background: #fff;

                color: #25D366;

            }


            /* About Button */

            .hero-actions .btn-outline {

                background: #fff;

                color: #ff9800;

                border: 2px solid #ff9800 !important;

            }


            .hero-actions .btn-outline:hover {

                background: #ff9800 !important;

                color: #fff !important;

            }


            /* Button Icons */

            .hero-actions i {

                font-size: 16px;

            }


            /* Hero Slider Dots */

            .hero-dots {

                display: flex;

                align-items: center;

                gap: 10px;

                margin-top: 35px;

            }


            .hero-dots span {

                width: 10px;

                height: 10px;

                border-radius: 50%;

                background: rgba(255, 255, 255, .5);

                cursor: pointer;

                transition: .3s;

            }


            .hero-dots span.active {

                width: 30px;

                border-radius: 10px;

                background: #ff9800;

            }


            /* Mobile Responsive */

            @media(max-width:576px) {

                .hero-actions {

                    gap: 10px;

                    margin-top: 20px;

                }


                .hero-actions .btn {

                    width: 100%;

                    padding: 12px 20px;

                }


                .hero-dots {

                    margin-top: 25px;

                }

            }
        </style>
        <style>
            /* Hero Animation */

            .hero-copy {
                animation: slideLeft 1s ease forwards;
                opacity: 0;
            }


            .quote-card {
                animation: slideRight 1s ease forwards;
                opacity: 0;
                animation-delay: .3s;
            }


            /* Text Animation */

            .hero-copy .eyebrow {
                animation: fadeDown .8s ease forwards;
                opacity: 0;
            }


            .hero-copy h1 {
                animation: fadeUp 1s ease forwards;
                animation-delay: .2s;
                opacity: 0;
            }


            .hero-copy p {
                animation: fadeUp 1s ease forwards;
                animation-delay: .4s;
                opacity: 0;
            }


            .hero-features li {
                animation: fadeUp .8s ease forwards;
                opacity: 0;
            }


            /* Feature delay */

            .hero-features li:nth-child(1) {
                animation-delay: .5s;
            }

            .hero-features li:nth-child(2) {
                animation-delay: .6s;
            }

            .hero-features li:nth-child(3) {
                animation-delay: .7s;
            }

            .hero-features li:nth-child(4) {
                animation-delay: .8s;
            }



            .hero-actions {
                animation: fadeUp 1s ease forwards;
                animation-delay: .9s;
                opacity: 0;
            }


            /* Quote Card Animation */

            .quote-card-head {
                animation: fadeDown .8s ease forwards;
            }


            .field {
                animation: fadeUp .7s ease forwards;
            }


            .quote-form .field:nth-child(1) {
                animation-delay: .2s;
            }

            .quote-form .field:nth-child(2) {
                animation-delay: .3s;
            }

            .quote-form .field:nth-child(3) {
                animation-delay: .4s;
            }

            .quote-form .field:nth-child(4) {
                animation-delay: .5s;
            }

            .quote-form .field:nth-child(5) {
                animation-delay: .6s;
            }

            .quote-form .field:nth-child(6) {
                animation-delay: .7s;
            }

            .quote-form .field:nth-child(7) {
                animation-delay: .8s;
            }



            /* Button Hover Animation */

            .btn-orange {
                transition: all .3s ease;
            }


            .btn-orange:hover {

                transform: translateY(-4px);

                box-shadow: 0 10px 25px rgba(255, 152, 0, .35);

            }



            /* Floating Arrow */

            .hero-arrow {

                /* animation: bounce 1.5s infinite; */

            }



            /* Keyframes */


            @keyframes slideLeft {

                from {
                    opacity: 0;
                    transform: translateX(-80px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }

            }



            @keyframes slideRight {

                from {
                    opacity: 0;
                    transform: translateX(80px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }

            }



            @keyframes fadeUp {

                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }

            }



            @keyframes fadeDown {

                from {
                    opacity: 0;
                    transform: translateY(-30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }

            }



            @keyframes bounce {

                0%,
                100% {
                    transform: translateX(0);
                }

                50% {
                    transform: translateX(10px);
                }

            }



            /* Mobile */

            @media(max-width:768px) {

                .hero-copy,
                .quote-card {

                    animation: none;
                    opacity: 1;

                }

            }
        </style>
        <style>
            .hero {
                position: relative;
                overflow: hidden;
            }


            .hero-bg {
                position: absolute;
                inset: 0;
                opacity: 0;
                transition: opacity 1s ease-in-out;
                z-index: -1;
            }


            .hero-bg.active {
                opacity: 1;
            }
        </style>
        <style>
            .hero {
                position: relative;
                overflow: hidden;
                min-height: 700px;
                display: flex;
                align-items: center;
            }

            .hero .container {
                position: relative;
                z-index: 10;
            }

            .hero-bg {
                position: absolute;
                inset: 0;
                background-size: cover !important;
                background-position: center !important;
                opacity: 0;
                visibility: hidden;
                transition: all .8s ease-in-out;
                transform: scale(1.08);
            }

            .hero-bg.active {
                opacity: 1;
                visibility: visible;
                transform: scale(1);
            }

            /* Navigation Buttons */

            .hero-nav {
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
                transform: translateY(-50%);
                z-index: 20;
                pointer-events: none;
            }

            .hero-prev,
            .hero-next {
                pointer-events: auto;
                position: absolute;
                width: 52px;
                height: 52px;
                border: none;
                border-radius: 50%;
                background: rgba(255, 255, 255, .18);
                backdrop-filter: blur(8px);
                color: #fff;
                font-size: 20px;
                cursor: pointer;
                transition: .3s;
            }

            .hero-prev:hover,
            .hero-next:hover {
                background: #ff9800;
            }

            .hero-prev {
                left: 30px;
            }

            .hero-next {
                right: 30px;
            }

            /* Right Side Dots */

            .hero-dots {
                position: absolute;
                right: 35px;
                top: 50%;
                transform: translateY(-50%);
                display: flex;
                flex-direction: column;
                gap: 12px;
                z-index: 20;
            }

            .hero-dots span {
                width: 13px;
                height: 13px;
                border-radius: 50%;
                background: rgba(255, 255, 255, .4);
                cursor: pointer;
                transition: .3s;
            }

            .hero-dots span.active {
                background: #ff9800;
                transform: scale(1.4);
            }

            /* Mobile */

            @media(max-width:768px) {

                .hero {
                    min-height: auto;
                    padding: 60px 0;
                }

                .hero-prev,
                .hero-next {
                    width: 42px;
                    height: 42px;
                    font-size: 16px;
                }

                .hero-prev {
                    left: 10px;
                }

                .hero-next {
                    right: 10px;
                }

                .hero-dots {
                    right: 12px;
                }

            }
        </style>

        <!-- ============ HERO ============ -->
        <section class="hero" id="home">
            @foreach($banners as $key => $banner)

                <div class="hero-bg {{ $key == 0 ? 'active' : '' }}" style="
                                                            background:
                                                            linear-gradient(120deg, rgba(12,42,82,.92), rgba(12,42,82,.55)),
                                                            url('{{ asset($banner->image) }}') center center / cover no-repeat;
                                                            ">
                </div>

            @endforeach
            <div class="hero-nav">
                <button class="hero-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <button class="hero-next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="container">
                <div class="hero-copy">
                    <span class="eyebrow">All Over India Service</span>
                    <h1>We Move Your World<span class="accent">Safely & Smoothly</span></h1>
                    <p>Door-to-door packing, loading, transportation & unpacking services with complete safety.</p>

                    <ul class="hero-features">
                        <li><i class="fa-solid fa-box"></i>Safe Packing</li>
                        <li><i class="fa-solid fa-truck-fast"></i>On-Time Delivery</li>
                        <li><i class="fa-solid fa-tags"></i>Affordable Pricing</li>
                        <li><i class="fa-solid fa-headset"></i>24/7 Support</li>
                    </ul>

                    <div class="hero-actions">
                        <a href="tel:+91{{ $site->phone }}" class="btn btn-navy"><i class="fa-solid fa-phone"></i> Call
                            Now</a>
                        <a href="https://wa.me/91{{ $site->phone }}" target="_blank" class="btn btn-green"><i
                                class="fa-brands fa-whatsapp"></i>
                            WhatsApp</a>
                        <a href="{{ route('about') }}" class="btn btn-outline"
                            style="background: #fff;
                                                                                        color: #FF9800; border: 2px solid #0077ff00;">About
                            Us</a>
                    </div>

                    <div class="hero-dots">

                        @foreach($banners as $key => $banner)

                            <span class="{{ $key == 0 ? 'active' : '' }}"></span>

                        @endforeach

                    </div>
                </div>

                <!-- Get free quote card -->
                <div class="quote-card" id="quote">

                    <div class="quote-card-head">GET FREE QUOTE</div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="quote-form" id="quoteForm" action="{{ route('service-enquiry.store') }}" method="POST">

                        @csrf

                        <div class="field">
                            <i class="fa-solid fa-user"></i>

                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required>
                        </div>

                        @error('name')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-solid fa-mobile-screen"></i>

                            <input type="tel" name="mobile" value="{{ old('mobile') }}" maxlength="10"
                                placeholder="Mobile Number" required>
                        </div>

                        @error('mobile')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-solid fa-location-dot"></i>

                            <input type="text" name="from_location" value="{{ old('from_location') }}"
                                placeholder="From Location" required>
                        </div>

                        @error('from_location')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-solid fa-location-dot"></i>

                            <input type="text" name="to_location" value="{{ old('to_location') }}" placeholder="To Location"
                                required>
                        </div>

                        @error('to_location')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-regular fa-calendar"></i>

                            <input type="date" name="moving_date" value="{{ old('moving_date') }}"
                                min="{{ date('Y-m-d') }}">
                        </div>

                        @error('moving_date')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-solid fa-list"></i>

                            <select name="service" required>
                                <option value="">Type of Service</option>

                                @foreach($serviceTypes as $serviceType)
                                    <option value="{{ $serviceType->type }}" {{ old('service') == $serviceType->type ? 'selected' : '' }}>
                                        {{ $serviceType->type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @error('service')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-solid fa-house"></i>

                            <select name="house_size">
                                <option value="">House Size</option>

                                <option value="1 BHK" {{ old('house_size') == '1 BHK' ? 'selected' : '' }}>1 BHK</option>

                                <option value="2 BHK" {{ old('house_size') == '2 BHK' ? 'selected' : '' }}>2 BHK</option>

                                <option value="3 BHK" {{ old('house_size') == '3 BHK' ? 'selected' : '' }}>3 BHK</option>

                                <option value="Villa / Independent House" {{ old('house_size') == 'Villa / Independent House' ? 'selected' : '' }}>
                                    Villa / Independent House
                                </option>
                            </select>
                        </div>

                        @error('house_size')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <div class="field">
                            <i class="fa-regular fa-comment-dots"></i>

                            <textarea name="message" placeholder="Message (Optional)">{{ old('message') }}</textarea>
                        </div>

                        @error('message')
                            <small class="text-danger d-block mb-2">{{ $message }}</small>
                        @enderror

                        <button type="submit" class="btn btn-orange btn-block">
                            Get Free Quote
                        </button>

                    </form>
                </div>
            </div>
            {{-- <div class="hero-arrow"><i class="fa-solid fa-chevron-right"></i></div> --}}
        </section>

        <!-- ============ SERVICES ============ -->
        <section id="services">

            <div class="container">

                <div class="section-head" data-aos="fade-down">
                    <span class="eyebrow" style="justify-content:center;">
                        Our Services
                    </span>
                </div>


                <div class="services-grid">

                    @foreach($services as $service)

                        <div class="service-card" data-aos="zoom-in" data-aos-delay="{{ 100 + ($loop->index * 100) }}">


                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="service-img"
                                data-aos="fade-up" data-aos-delay="{{ 200 + ($loop->index * 100) }}">


                            <h3 data-aos="fade-up" data-aos-delay="{{ 300 + ($loop->index * 100) }}">
                                {{ $service->title }}
                            </h3>


                            <p data-aos="fade-up" data-aos-delay="{{ 400 + ($loop->index * 100) }}">
                                {{ $service->short_description }}
                            </p>


                            <a href="{{ route('service-details', $service->slug) }}" class="read-more" data-aos="fade-up"
                                data-aos-delay="{{ 500 + ($loop->index * 100) }}">
                                READ MORE
                            </a>


                        </div>

                    @endforeach

                </div>

            </div>

        </section>


        <!-- why choose us -->


        <section class="why-premium">

            <div class="container">

                <div class="section-title text-center" data-aos="fade-up">

                    <span class="section-tag">

                        <i class="fa-solid fa-award"></i>

                        Why Choose Us

                    </span>

                    <h2>Why Thousands Trust PBC Packers & Movers</h2>

                    <p>

                        We deliver safe, affordable, and professional relocation
                        services with complete customer satisfaction across India.

                    </p>

                </div>

                <div class="why-wrapper">

                    <!-- LEFT -->

                    <div class="why-column">

                        <div class="premium-card" data-aos="fade-right">

                            <div class="icon">

                                <i class="fa-solid fa-shield-halved"></i>

                            </div>

                            <h4>Safe Packing</h4>

                            <p>Premium packing materials for complete protection.</p>

                        </div>

                        <div class="premium-card" data-aos="fade-right" data-aos-delay="100">

                            <div class="icon">

                                <i class="fa-solid fa-user-tie"></i>

                            </div>

                            <h4>Professional Team</h4>

                            <p>Experienced staff for hassle-free relocation.</p>

                        </div>

                        <div class="premium-card" data-aos="fade-right" data-aos-delay="200">

                            <div class="icon">

                                <i class="fa-solid fa-clock"></i>

                            </div>

                            <h4>On-Time Delivery</h4>

                            <p>Timely pickup and delivery across India.</p>

                        </div>

                    </div>

                    <!-- CENTER -->

                    <div class="why-image" data-aos="zoom-in">

                        <div class="circle-animation"></div>

                        <img src="{{ asset('website') }}/img/packlogo.png" alt="Why Choose Us">

                    </div>

                    <!-- RIGHT -->

                    <div class="why-column">

                        <div class="premium-card" data-aos="fade-left">

                            <div class="icon">

                                <i class="fa-solid fa-tag"></i>

                            </div>

                            <h4>Affordable Pricing</h4>

                            <p>Transparent pricing with no hidden charges.</p>

                        </div>

                        <div class="premium-card" data-aos="fade-left" data-aos-delay="100">

                            <div class="icon">

                                <i class="fa-solid fa-location-crosshairs"></i>

                            </div>

                            <h4>GPS Tracking</h4>

                            <p>Real-time vehicle tracking for every shipment.</p>

                        </div>

                        <div class="premium-card" data-aos="fade-left" data-aos-delay="200">

                            <div class="icon">

                                <i class="fa-solid fa-file-shield"></i>

                            </div>

                            <h4>Insurance Support</h4>

                            <p>Extra protection for valuable belongings.</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= Our Working Process ================= -->
        <!--==================================
                                                                                                                        WORKING PROCESS
                                                                                                                ===================================-->

        <section class="process-premium">

            <div class="container">

                <div class="section-title text-center" data-aos="fade-up">

                    <span class="section-tag">

                        <i class="fa-solid fa-gears"></i>

                        Our Working Process

                    </span>

                    <h2>Simple, Safe & Hassle-Free Moving Process</h2>

                    <p>

                        We follow a streamlined process to ensure every relocation is
                        planned, executed, and completed safely with complete customer
                        satisfaction.

                    </p>

                </div>

                <div class="process-wrapper">

                    <!-- Step 1 -->

                    <div class="process-card" data-aos="fade-up">

                        <div class="process-icon">

                            <i class="fa-solid fa-file-lines"></i>

                        </div>

                        <span class="step-no">01</span>

                        <h3>Request Quote</h3>

                        <p>

                            Contact us with your moving requirements and receive a free,
                            transparent quotation.

                        </p>

                    </div>

                    <!-- Step 2 -->

                    <div class="process-card" data-aos="fade-up" data-aos-delay="100">

                        <div class="process-icon">

                            <i class="fa-solid fa-clipboard-list"></i>

                        </div>

                        <span class="step-no">02</span>

                        <h3>Survey & Planning</h3>

                        <p>

                            Our team evaluates your relocation needs and prepares a
                            customized moving plan.

                        </p>

                    </div>

                    <!-- Step 3 -->

                    <div class="process-card" data-aos="fade-up" data-aos-delay="200">

                        <div class="process-icon">

                            <i class="fa-solid fa-dolly"></i>

                        </div>

                        <span class="step-no">03</span>

                        <h3>Packing & Moving</h3>

                        <p>

                            Professional packing using quality materials followed by
                            secure transportation.

                        </p>

                    </div>

                    <!-- Step 4 -->

                    <div class="process-card" data-aos="fade-up" data-aos-delay="300">

                        <div class="process-icon">

                            <i class="fa-solid fa-house-circle-check"></i>

                        </div>

                        <span class="step-no">04</span>

                        <h3>Safe Delivery</h3>

                        <p>

                            Timely delivery with careful unloading and unpacking at your
                            destination.

                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- ============ STATS STRIP ============ -->
        <section class="stats-strip">
            <div class="container">

                <div class="stat">
                    <i class="fa-solid fa-award"></i>
                    <div class="stat-text">
                        <h3>12+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-users"></i>
                    <div class="stat-text">
                        <h3>15,000+</h3>
                        <p>Happy Customers</p>
                    </div>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-user-group"></i>
                    <div class="stat-text">
                        <h3>50+</h3>
                        <p>Professional Staff</p>
                    </div>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-truck-fast"></i>
                    <div class="stat-text">
                        <h3>10,000+</h3>
                        <p>Successful Shifts</p>
                    </div>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <div class="stat-text">
                        <h3>150+</h3>
                        <p>Service Locations</p>
                    </div>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-building-user"></i>
                    <div class="stat-text">
                        <h3>500+</h3>
                        <p>Corporate Clients</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ============ COVERAGE / TESTIMONIALS / NEED HELP ============ -->
        <!-- ================= SERVICE COVERAGE ================= -->
        <section id="locations">

            <div class="container">

                <div class="panel" data-aos="fade-up">


                    <span class="eyebrow" data-aos="fade-down">
                        Coverage
                    </span>


                    <h2 data-aos="fade-up" data-aos-delay="200">
                        We Provide Service All Over India
                    </h2>



                    <div class="india-map-wrap">


                        <img src="{{ asset('website') }}/img/india.png" alt="India Map" class="india-map" data-aos="zoom-in"
                            data-aos-delay="300">



                        <ul class="india-list">

                            @forelse($serviceAreas as $area)

                                <li data-aos="fade-right" data-aos-delay="{{ 300 + ($loop->index * 80) }}">

                                    <i class="fa-solid fa-circle-check"></i>

                                    {{ $area->location_name }}

                                </li>


                            @empty

                                <li data-aos="fade-right">

                                    <i class="fa-solid fa-circle-check"></i>

                                    Service Areas Will Be Updated Soon

                                </li>

                            @endforelse


                        </ul>


                    </div>



                    <div class="location-btn" data-aos="zoom-in" data-aos-delay="800">

                        <a href="{{ route('locations') }}" class="btn btn-orange btn-sm" style="margin-top:20px;">

                            View All Locations

                        </a>

                    </div>


                </div>

            </div>

        </section>


        <!-- ================= TESTIMONIALS =================
                                                                                                                    <section id="testimonials">

                                                                                                                        <div class="container">

                                                                                                                            <div class="panel">

                                                                                                                                <span class="eyebrow">Testimonials</span>
                                                                                                                                <h2>Customer Testimonials</h2>

                                                                                                                                <div class="testimonial-stars">
                                                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                                                    <i class="fa-solid fa-star"></i>
                                                                                                                                    <i class="fa-regular fa-star"></i>
                                                                                                                                </div>

                                                                                                                                <p class="testimonial-quote">
                                                                                                                                    Excellent service! The packing was professional,
                                                                                                                                    delivery was on time, and the team handled our belongings
                                                                                                                                    with great care. Highly recommended.
                                                                                                                                </p>

                                                                                                                                <div class="testimonial-person">
                                                                                                                                    <img src="https://picsum.photos/id/1005/80/80" alt="Customer">

                                                                                                                                    <div>
                                                                                                                                        <strong>Ravi Kumar</strong>
                                                                                                                                        <span>Hyderabad</span>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="testimonial-dots">
                                                                                                                                    <span class="active"></span>
                                                                                                                                    <span></span>
                                                                                                                                    <span></span>
                                                                                                                                </div>

                                                                                                                            </div>

                                                                                                                        </div>

                                                                                                                    </section> -->


        <!-- ================= PHOTO GALLERY ================= -->


        <section id="gallery" class="bg-soft">

            <div class="container">

                <!-- Gallery Heading -->

                <div class="section-title text-center" data-aos="fade-up">

                    <span class="section-tag">

                        <i class="fa-solid fa-images"></i>

                        Our Gallery

                    </span>

                    <h2>
                        <h2>Explore Our Professional Moving Services</h2>
                    </h2>


                    <p>
                        From careful packing to safe delivery, our gallery highlights the expertise,
                        dedication, and professionalism that make PBC Packers & Movers one of the
                        trusted relocation partners across India.
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

                    {{-- <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('website') }}/img/pacunpac.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('website') }}/img/offshift.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('website') }}/img/lodunlod.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('website') }}/img/hshift.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('website') }}/img/domrelo.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div> --}}

                </div>

                <!-- ================= VIDEO GALLERY ================= -->
                <!--==================================
                                                                                                                VIDEO GALLERY
                                                                                                        ===================================-->

                <section class="video-gallery">

                    <div class="container">

                        <div class="section-title text-center" data-aos="fade-up">

                            <span class="section-tag">

                                <i class="fa-solid fa-circle-play"></i>

                                Video Gallery

                            </span>

                            <h2>Watch Our Moving Journey</h2>

                            <p>

                                Explore our professional packing, loading, transportation,
                                and successful relocation projects across India.

                            </p>

                        </div>

                        <div class="video-grid">

                            <!-- Video 1 -->

                            @forelse($videos as $video)

                                <div class="video-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                                    <div class="video-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                                        <div class="video-image position-relative">

                                            {{-- YouTube Thumbnail --}}
                                            <a href="https://www.youtube.com/watch?v={{ $video->youtube_video }}"
                                                target="_blank" class="video-link">

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

                        <div class="text-center mt-5" data-aos="fade-up" style="text-align: center;
                                                                                                    margin-top: 20px;">

                            <a href="{{ route('videos') }}" class="btn btn-orange">

                                Watch More Videos

                            </a>

                        </div>

                    </div>

                </section>

                <!-- ================= BLOGS ================= -->
                <!-- <section id="blog" class="bg-soft">

                                                                                                        <div class="container">

                                                                                                            <div class="panel">

                                                                                                                <span class="eyebrow">Latest Blogs</span>
                                                                                                                <h2>Moving Tips & Articles</h2>

                                                                                                                <div class="blog-list">

                                                                                                                    <div class="blog-item">
                                                                                                                        <img src="https://picsum.photos/id/1050/120/120" alt="">
                                                                                                                        <div>
                                                                                                                            <h4>Tips for Safe House Shifting</h4>
                                                                                                                            <span>20 May 2024</span>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="blog-item">
                                                                                                                        <img src="https://picsum.photos/id/1051/120/120" alt="">
                                                                                                                        <div>
                                                                                                                            <h4>Packing Checklist Before Moving</h4>
                                                                                                                            <span>15 May 2024</span>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="blog-item">
                                                                                                                        <img src="https://picsum.photos/id/1052/120/120" alt="">
                                                                                                                        <div>
                                                                                                                            <h4>How to Choose Reliable Packers</h4>
                                                                                                                            <span>10 May 2024</span>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                                <a href="#" class="btn btn-orange btn-sm">
                                                                                                                    View All Blogs
                                                                                                                </a>

                                                                                                            </div>

                                                                                                        </div>

                                                                                                    </section> -->

                <!-- ============ FAQ + OFFICE LOCATION ============ -->
                <!--==================================
                                                                                                    PREMIUM FAQ SECTION
                                                                                            ===================================-->

                <section class="faq-premium">

                    <div class="container">

                        <div class="section-title text-center" data-aos="fade-up">

                            <span class="section-tag">

                                <i class="fa-solid fa-circle-question"></i>

                                Frequently Asked Questions

                            </span>

                            <h2>Everything You Need to Know</h2>

                            <p>

                                Find answers to the most commonly asked questions about our
                                packing and moving services.

                            </p>

                        </div>

                        <div class="faq-wrapper">

                            <!-- Left -->

                            <div class="faq-left" data-aos="fade-right">

                                @forelse($faqs as $faq)

                                    <div class="faq-item {{ $loop->first ? 'active' : '' }}">

                                        <button class="faq-btn">

                                            {{ $faq->question }}

                                            <i class="fa-solid fa-plus"></i>

                                        </button>


                                        <div class="faq-content">

                                            {{ $faq->answer }}

                                        </div>

                                    </div>


                                @empty

                                    <div class="faq-item active">

                                        <button class="faq-btn">

                                            No FAQs Available

                                            <i class="fa-solid fa-plus"></i>

                                        </button>


                                        <div class="faq-content">

                                            Please add FAQs from the admin panel.

                                        </div>

                                    </div>

                                @endforelse

                            </div>

                            <!-- Right -->

                            <div class="faq-right" data-aos="fade-left">

                                <img src="{{ asset('website') }}/img/faq.png" alt="FAQ" style="border-radius:25px;">

                            </div>

                        </div>

                    </div>

                </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>

    <script>
        document.querySelectorAll(".faq-btn").forEach(btn => {

            btn.addEventListener("click", () => {

                const item = btn.parentElement;

                document.querySelectorAll(".faq-item").forEach(faq => {

                    if (faq !== item) {

                        faq.classList.remove("active");

                    }

                });

                item.classList.toggle("active");

            });

        });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120
        });
    </script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const slides = document.querySelectorAll(".hero-bg");
            const dots = document.querySelectorAll(".hero-dots span");
            const prev = document.querySelector(".hero-prev");
            const next = document.querySelector(".hero-next");

            let index = 0;
            let interval;

            function showSlide(i) {

                slides.forEach(slide => slide.classList.remove("active"));
                dots.forEach(dot => dot.classList.remove("active"));

                slides[i].classList.add("active");
                dots[i].classList.add("active");

                index = i;

            }

            function nextSlide() {

                let i = index + 1;

                if (i >= slides.length) {
                    i = 0;
                }

                showSlide(i);

            }

            function prevSlide() {

                let i = index - 1;

                if (i < 0) {
                    i = slides.length - 1;
                }

                showSlide(i);

            }

            next.addEventListener("click", function () {

                nextSlide();
                restart();

            });

            prev.addEventListener("click", function () {

                prevSlide();
                restart();

            });

            dots.forEach((dot, i) => {

                dot.addEventListener("click", function () {

                    showSlide(i);
                    restart();

                });

            });

            function start() {

                interval = setInterval(nextSlide, 5000);

            }

            function restart() {

                clearInterval(interval);
                start();

            }

            start();

        });

    </script>
@endsection