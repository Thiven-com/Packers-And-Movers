@extends('layouts.website')
@section('content')

    <!-- ==================== ABOUT BANNER ==================== -->
    <section class="about-banner">
        <div class="banner-overlay"></div>

        <div class="container">

            <div class="banner-content" data-aos="fade-up">

                <span class="sub-title">
                    <i class="fa-solid fa-truck-fast"></i>
                    Welcome to PBC Packers & Movers
                </span>

                <h1>About Us</h1>

                <p>
                    Delivering trusted packing and moving solutions across India with
                    professionalism, safety, and complete customer satisfaction.
                </p>

                <div class="breadcrumb-area">
                    <a href="{{ route('home') }}">Home</a>
                    <span>/</span>
                    <span>About Us</span>
                </div>

            </div>

        </div>
    </section>


    <!-- ================= COMPANY INTRODUCTION ================= -->

    <section class="about-company">
        <div class="container">

            <div class="about-grid">

                <!-- Left Side -->
                <div class="about-images" data-aos="fade-right">

                    <div class="image-one">
                        <img src="{{ asset('website') }}/img/about1.png" alt="PBC Packers & Movers">
                    </div>

                    <div class="image-two">
                        <img src="{{ asset('website') }}/img/about2.png" alt="Packing Service">
                    </div>

                    <div class="experience-box">
                        <h2>12+</h2>
                        <span>Years of Experience</span>
                    </div>

                </div>

                <!-- Right Side -->
                <div class="about-content" data-aos="fade-left">

                    <span class="section-subtitle">
                        <i class="fa-solid fa-truck-fast"></i>
                        Who We Are
                    </span>

                    <h2>Your Trusted Partner for Safe & Hassle-Free Relocation</h2>

                    <p>
                        <strong>PBC Packers & Movers</strong> is one of India's trusted relocation companies,
                        providing professional packing, moving, transportation, and storage services for
                        residential, commercial, and industrial customers. We ensure every move is carried
                        out with precision, safety, and complete customer satisfaction.
                    </p>

                    <p>
                        With a dedicated team of trained professionals, premium packing materials, and
                        well-maintained transport vehicles, we handle every relocation efficiently—from
                        small household moves to large corporate relocations across India.
                    </p>

                    <div class="about-features">

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Safe & Secure Packing</span>
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Professional Moving Team</span>
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Affordable Pricing</span>
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>On-Time Delivery</span>
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>GPS Vehicle Tracking</span>
                        </div>

                        <div class="feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>24×7 Customer Support</span>
                        </div>

                    </div>

                    <div class="about-btn">

                        <a href="#" class="btn btn-orange">
                            Get Free Quote
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!--================== MISSION & VISION ==================-->

    <section class="mission-vision">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">
                <span class="eyebrow">Our Purpose</span>
                <h2>Mission & Vision</h2>
                <p>
                    We are committed to delivering reliable relocation services with
                    professionalism, safety, and complete customer satisfaction.
                </p>
            </div>

            <div class="mv-grid">

                <!-- Mission Card -->
                <div class="mv-card" data-aos="fade-right">

                    <div class="mv-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <h3>Our Mission</h3>

                    <p>
                        To provide secure, timely, and cost-effective packing and moving
                        services by using quality packing materials, trained professionals,
                        and customer-focused solutions that ensure complete peace of mind.
                    </p>

                    <ul>
                        <li><i class="fa-solid fa-check"></i> Safe & Secure Relocation</li>
                        <li><i class="fa-solid fa-check"></i> Affordable Pricing</li>
                        <li><i class="fa-solid fa-check"></i> Customer Satisfaction</li>
                        <li><i class="fa-solid fa-check"></i> On-Time Delivery</li>
                    </ul>

                </div>

                <!-- Vision Card -->
                <div class="mv-card" data-aos="fade-left">

                    <div class="mv-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <h3>Our Vision</h3>

                    <p>
                        To become one of India's most trusted packers and movers by
                        continuously improving our services, embracing innovation,
                        and exceeding customer expectations across every relocation.
                    </p>

                    <ul>
                        <li><i class="fa-solid fa-check"></i> Nationwide Service Network</li>
                        <li><i class="fa-solid fa-check"></i> Modern Moving Solutions</li>
                        <li><i class="fa-solid fa-check"></i> Professional Workforce</li>
                        <li><i class="fa-solid fa-check"></i> Long-Term Customer Trust</li>
                    </ul>

                </div>

            </div>

        </div>
    </section>


    <!--================ WHY CHOOSE US ================-->

    <section class="why-us-section">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Why Choose Us</span>

                <h2>Why PBC Packers & Movers?</h2>

                <p>
                    We provide reliable, secure, and affordable relocation services with
                    experienced professionals, ensuring a smooth and stress-free moving
                    experience across India.
                </p>

            </div>

            <div class="why-grid">

                <!-- Card 1 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="100">

                    <div class="icon-box">
                        <i class="fa-solid fa-box-open"></i>
                    </div>

                    <h3>Safe Packing</h3>

                    <p>
                        Premium quality packing materials ensure complete protection
                        of your valuables during transportation.
                    </p>

                </div>

                <!-- Card 2 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="200">

                    <div class="icon-box">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                    <h3>Professional Team</h3>

                    <p>
                        Skilled and experienced moving professionals handle every
                        relocation with utmost care.
                    </p>

                </div>

                <!-- Card 3 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="300">

                    <div class="icon-box">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>

                    <h3>Affordable Pricing</h3>

                    <p>
                        Transparent pricing with no hidden charges and value-for-money
                        relocation services.
                    </p>

                </div>

                <!-- Card 4 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="400">

                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                    </div>

                    <h3>On-Time Delivery</h3>

                    <p>
                        We value your time and guarantee prompt pickup and timely
                        delivery of your belongings.
                    </p>

                </div>

                <!-- Card 5 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="500">

                    <div class="icon-box">
                        <i class="fa-solid fa-location-crosshairs"></i>
                    </div>

                    <h3>GPS Tracking</h3>

                    <p>
                        Stay updated with real-time vehicle tracking throughout
                        your relocation journey.
                    </p>

                </div>

                <!-- Card 6 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="600">

                    <div class="icon-box">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h3>Insurance Support</h3>

                    <p>
                        Optional transit insurance provides additional security
                        for valuable household and office goods.
                    </p>

                </div>

                <!-- Card 7 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="700">

                    <div class="icon-box">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <h3>24×7 Support</h3>

                    <p>
                        Our customer support team is available to answer your
                        questions throughout the moving process.
                    </p>

                </div>

                <!-- Card 8 -->

                <div class="why-card" data-aos="zoom-in" data-aos-delay="800">

                    <div class="icon-box">
                        <i class="fa-solid fa-map"></i>
                    </div>

                    <h3>Pan India Service</h3>

                    <p>
                        We provide reliable packing and moving services across
                        major cities throughout India.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!--================ OUR JOURNEY =================-->

    <section class="our-journey">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Our Journey</span>

                <h2>Building Trust, One Move at a Time</h2>

                <p>
                    Over the years, PBC Packers & Movers has earned a reputation for
                    delivering safe, reliable, and customer-focused relocation services
                    across India.
                </p>

            </div>

            <div class="journey-wrapper">

                <!-- Left Image -->

                <div class="journey-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/ourjou.png" alt="Our Journey">

                </div>

                <!-- Right Timeline -->

                <div class="journey-content">

                    <div class="timeline-item" data-aos="fade-left" data-aos-delay="100">

                        <div class="timeline-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>

                        <div class="timeline-text">

                            <h4>Our Beginning</h4>

                            <p>
                                PBC Packers & Movers started with a vision to provide
                                dependable and affordable relocation services with a
                                customer-first approach.
                            </p>

                        </div>

                    </div>

                    <div class="timeline-item" data-aos="fade-left" data-aos-delay="200">

                        <div class="timeline-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>

                        <div class="timeline-text">

                            <h4>Growing Across India</h4>

                            <p>
                                We expanded our network to serve customers in major
                                cities across India, offering residential, commercial,
                                and vehicle transportation services.
                            </p>

                        </div>

                    </div>

                    <div class="timeline-item" data-aos="fade-left" data-aos-delay="300">

                        <div class="timeline-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div class="timeline-text">

                            <h4>Customer Satisfaction</h4>

                            <p>
                                Thousands of successful relocations have helped us build
                                long-lasting relationships with families and businesses.
                            </p>

                        </div>

                    </div>

                    <div class="timeline-item" data-aos="fade-left" data-aos-delay="400">

                        <div class="timeline-icon">
                            <i class="fa-solid fa-award"></i>
                        </div>

                        <div class="timeline-text">

                            <h4>Trusted Today</h4>

                            <p>
                                Today, we continue to provide safe packing, timely
                                delivery, and professional moving solutions with the
                                highest standards of quality.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--================ OUR SERVICES ================-->

    <section class="about-services">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Our Services</span>

                <h2>Complete Packing & Moving Solutions</h2>

                <p>
                    We provide comprehensive relocation services for homes, offices,
                    vehicles, and businesses with safety, professionalism, and timely delivery.
                </p>

            </div>

            <div class="services-grid">

                <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <h3>House Shifting</h3>
                    <p>Safe household relocation with premium packing and careful handling.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="150">
                    <div class="service-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h3>Office Relocation</h3>
                    <p>Professional office shifting with minimum downtime and maximum efficiency.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3>Domestic Relocation</h3>
                    <p>Reliable moving services to cities and towns across India.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="service-icon">
                        <i class="fa-solid fa-motorcycle"></i>
                    </div>
                    <h3>Bike Transportation</h3>
                    <p>Secure bike transportation with specialized loading and packaging.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3>Car Transportation</h3>
                    <p>Door-to-door vehicle transportation with complete safety.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="service-icon">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <h3>Packing & Unpacking</h3>
                    <p>Quality packing materials and expert unpacking services.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h3>Loading & Unloading</h3>
                    <p>Safe loading and unloading using modern equipment and trained staff.</p>
                </div>

                <div class="service-card" data-aos="zoom-in" data-aos-delay="450">
                    <div class="service-icon">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <h3>Warehouse & Storage</h3>
                    <p>Clean, secure, and monitored storage facilities for short and long-term needs.</p>
                </div>

            </div>

        </div>

    </section>


    <!--================ COMPANY STATISTICS =================-->

    <section class="company-stats">

        <div class="stats-overlay"></div>

        <div class="container">

            <div class="section-title text-center light" data-aos="fade-up">

                <span class="eyebrow">Our Achievements</span>

                <h2>Numbers That Speak For Our Success</h2>

                <p>
                    We have successfully completed thousands of relocations with customer
                    satisfaction as our top priority.
                </p>

            </div>

            <div class="stats-grid">

                <div class="stats-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="stats-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>

                    <h3 class="counter" data-target="12">0+</h3>

                    <span>Years Experience</span>

                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="stats-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <h3 class="counter" data-target="15000">0+</h3>

                    <span>Happy Customers</span>

                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="stats-icon">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>

                    <h3 class="counter" data-target="10000">0+</h3>

                    <span>Successful Shifts</span>

                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="400">

                    <div class="stats-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <h3 class="counter" data-target="150">0+</h3>

                    <span>Service Locations</span>

                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="500">

                    <div class="stats-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <h3 class="counter" data-target="500">0+</h3>

                    <span>Corporate Clients</span>

                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="600">

                    <div class="stats-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                    <h3 class="counter" data-target="50">0+</h3>

                    <span>Professional Staff</span>

                </div>

            </div>

        </div>

    </section>


    <!--================ OUR WORKING PROCESS =================-->

    <section class="work-process">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Working Process</span>

                <h2>How We Make Your Move Easy</h2>

                <p>
                    Our systematic relocation process ensures every move is completed
                    safely, efficiently, and on schedule.
                </p>

            </div>

            <div class="process-wrapper">

                <div class="process-line"></div>

                <!-- Step 1 -->
                <div class="process-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="process-number">01</div>

                    <div class="process-icon">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>

                    <h4>Request Quote</h4>

                    <p>
                        Contact us through phone, WhatsApp, or our website to receive
                        a free moving quotation.
                    </p>

                </div>

                <!-- Step 2 -->

                <div class="process-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="process-number">02</div>

                    <div class="process-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>

                    <h4>Survey & Planning</h4>

                    <p>
                        Our experts inspect your belongings and prepare the best moving
                        plan based on your requirements.
                    </p>

                </div>

                <!-- Step 3 -->

                <div class="process-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="process-number">03</div>

                    <div class="process-icon">
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>

                    <h4>Packing & Transportation</h4>

                    <p>
                        We carefully pack, load, transport, and monitor your goods
                        using quality materials and trained professionals.
                    </p>

                </div>

                <!-- Step 4 -->

                <div class="process-card" data-aos="fade-up" data-aos-delay="400">

                    <div class="process-number">04</div>

                    <div class="process-icon">
                        <i class="fa-solid fa-house-circle-check"></i>
                    </div>

                    <h4>Safe Delivery</h4>

                    <p>
                        Your belongings are delivered safely, unloaded, unpacked,
                        and arranged at your new destination.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!--================ SERVICE COVERAGE =================-->

    <section class="service-coverage">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Service Coverage</span>

                <h2>Serving Customers Across India</h2>

                <p>
                    PBC Packers & Movers proudly provides reliable packing and moving
                    services across major cities in India with timely and secure delivery.
                </p>

            </div>

            <div class="coverage-wrapper">

                <!-- Left Side -->

                <div class="coverage-map" data-aos="fade-right">

                    <img src="{{ asset('website/img/india.png') }}" alt="India Map">

                    <div class="coverage-badge">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <span>Pan India Network</span>
                    </div>

                </div>

                <!-- Right Side -->

                <div class="coverage-content" data-aos="fade-left">

                    <h3>We Cover Major Cities</h3>

                    <p>
                        Our extensive transportation network allows us to safely move
                        your household goods, office equipment, vehicles, and commercial
                        shipments anywhere in India.
                    </p>

                    <div class="city-grid">

                        @forelse($serviceAreas as $area)

                            <div>
                                <i class="fa-solid fa-circle-check"></i>
                                {{ $area->location_name }}
                            </div>

                        @empty

                            <div>
                                <i class="fa-solid fa-circle-check"></i>
                                Service areas will be updated soon
                            </div>

                        @endforelse

                    </div>

                    <div class="coverage-boxes">

                        <div class="coverage-box">

                            <i class="fa-solid fa-truck-fast"></i>

                            <div>

                                <h4>Fast Delivery</h4>

                                <span>Timely Transportation</span>

                            </div>

                        </div>

                        <div class="coverage-box">

                            <i class="fa-solid fa-shield-halved"></i>

                            <div>

                                <h4>Safe Relocation</h4>

                                <span>100% Secure Packing</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!--================ CERTIFICATIONS =================-->

    <section class="certification-section">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="eyebrow">Quality Assurance</span>

                <h2>Committed to Excellence</h2>

                <p>
                    We follow professional moving standards to ensure every relocation
                    is safe, secure, and completed with complete customer satisfaction.
                </p>

            </div>

            <div class="certification-grid">

                <div class="cert-card" data-aos="zoom-in" data-aos-delay="100">

                    <div class="cert-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <h4>Verified Company</h4>

                    <p>Trusted relocation company delivering professional moving services.</p>

                </div>

                <div class="cert-card" data-aos="zoom-in" data-aos-delay="200">

                    <div class="cert-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </div>

                    <h4>Experienced Team</h4>

                    <p>Highly trained professionals with years of relocation expertise.</p>

                </div>

                <div class="cert-card" data-aos="zoom-in" data-aos-delay="300">

                    <div class="cert-icon">
                        <i class="fa-solid fa-box-open"></i>
                    </div>

                    <h4>Safe Packaging</h4>

                    <p>Premium packing materials for maximum protection during transit.</p>

                </div>

                <div class="cert-card" data-aos="zoom-in" data-aos-delay="400">

                    <div class="cert-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h4>Transit Insurance</h4>

                    <p>Optional insurance support for valuable household and office goods.</p>

                </div>

                <div class="cert-card" data-aos="zoom-in" data-aos-delay="500">

                    <div class="cert-icon">
                        <i class="fa-solid fa-face-smile"></i>
                    </div>

                    <h4>Customer Satisfaction</h4>

                    <p>Thousands of successful relocations with happy customers across India.</p>

                </div>

            </div>

        </div>

    </section>

    <!--================ CALL TO ACTION =================-->

    <section class="about-cta">

        <div class="container">

            <div class="cta-box" data-aos="zoom-in">

                <h2>Ready to Move?</h2>

                <p>
                    Get a free quote today and let our experts handle your relocation
                    safely, efficiently, and on time.
                </p>

                <div class="cta-buttons">

                    <a href="tel:+91986616456" class="btn-call">
                        <i class="fa-solid fa-phone"></i>
                        Call Now
                    </a>

                    <a href="https://wa.me/91986616456" class="btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                        WhatsApp
                    </a>

                    <a href="#" class="btn-quote">
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
            once: true
        });
    </script>
    <script>
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {

            const target = +counter.dataset.target;

            let count = 0;

            const speed = target / 120;

            function updateCounter() {

                count += speed;

                if (count < target) {

                    counter.innerText = Math.ceil(count).toLocaleString();

                    requestAnimationFrame(updateCounter);

                } else {

                    counter.innerText = target.toLocaleString() + "+";

                }

            }

            updateCounter();

        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

        new Swiper(".testimonial-slider", {

            loop: true,

            spaceBetween: 30,

            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },

            breakpoints: {

                0: {
                    slidesPerView: 1
                },

                768: {
                    slidesPerView: 2
                },

                1200: {
                    slidesPerView: 3
                }

            }

        });

    </script>
@endsection