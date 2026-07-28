@extends('layouts.website')
@section('content')

    <!--==============================
                    LOCATIONS HERO
                ================================-->
    <section class="locations-hero">

        <div class="hero-overlay"></div>

        <!-- Animated Background Shapes -->
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>

        <div class="container">

            <div class="hero-grid">

                <!-- Left Content -->
                <div class="hero-content">

                    <span class="hero-tag">
                        <i class="fa-solid fa-location-dot"></i>
                        PAN INDIA SERVICE NETWORK
                    </span>

                    <h1>
                        We Deliver Across
                        <span>Every Corner of India</span>
                    </h1>

                    <p>
                        From household shifting to office relocation, vehicle transport,
                        and storage solutions, PBC Packers & Movers proudly serves
                        customers across India with safe, reliable, and timely relocation services.
                    </p>

                    <div class="hero-buttons">

                        <a href="{{ route('contact') }}" class="btn-orange">
                            <i class="fa-solid fa-file-signature"></i>
                            Get Free Quote
                        </a>

                        <a href="tel:9866166456" class="btn-white">
                            <i class="fa-solid fa-phone"></i>
                            Call Now
                        </a>

                    </div>

                </div>

                <!-- Right Image -->

                <div class="hero-image">

                    <img src="{{ asset('website/img/india.png') }}" alt="India Map">

                </div>

            </div>

        </div>

    </section>





    <!--=================================
                            PAN INDIA COVERAGE
                    ==================================-->


    <section class="coverage-section">

        <div class="container">

            <div class="section-title" data-aos="fade-up">

                <span>Pan India Coverage</span>

                <h2>Moving India With Trust & Excellence</h2>

                <p>
                    We proudly provide professional packing and moving services across
                    India with a strong transportation network and experienced relocation
                    experts.
                </p>

            </div>

            <div class="coverage-grid">

                <!-- LEFT -->

                <div class="coverage-map" data-aos="fade-right">

                    <div class="map-box">

                        <img src="{{ asset('website/img/india.png') }}" alt="India Map">

                        <span class="pin pin1"></span>
                        <span class="pin pin2"></span>
                        <span class="pin pin3"></span>
                        <span class="pin pin4"></span>
                        <span class="pin pin5"></span>

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="coverage-content" data-aos="fade-left">

                    <div class="coverage-card">

                        <i class="fa-solid fa-truck-fast"></i>

                        <div>

                            <h4>Door-to-Door Relocation</h4>

                            <p>Safe pickup and delivery anywhere across India.</p>

                        </div>

                    </div>

                    <div class="coverage-card">

                        <i class="fa-solid fa-box-open"></i>

                        <div>

                            <h4>Premium Packing</h4>

                            <p>High-quality packing materials for complete protection.</p>

                        </div>

                    </div>

                    <div class="coverage-card">

                        <i class="fa-solid fa-location-crosshairs"></i>

                        <div>

                            <h4>GPS Tracking</h4>

                            <p>Track your shipment in real time during transit.</p>

                        </div>

                    </div>

                    <div class="coverage-card">

                        <i class="fa-solid fa-shield-halved"></i>

                        <div>

                            <h4>Safe Transportation</h4>

                            <p>Secure handling by experienced professionals.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!--==================================
                MAJOR CITIES
        ===================================-->

    <section class="cities-section">

        <div class="container">

            <div class="section-heading" data-aos="fade-up">

                <span class="section-subtitle">
                    <i class="fa-solid fa-location-dot"></i>
                    Our Presence
                </span>

                <h2>Major Cities We Serve</h2>

                <p>
                    With a strong nationwide network, PBC Packers & Movers proudly
                    delivers reliable relocation services across major cities in India.
                </p>

            </div>

            <div class="cities-grid">

                <div class="city-card" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fa-solid fa-city"></i>
                    <h4>Hyderabad</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fa-solid fa-city"></i>
                    <h4>Bangalore</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fa-solid fa-city"></i>
                    <h4>Chennai</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="250">
                    <i class="fa-solid fa-city"></i>
                    <h4>Mumbai</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fa-solid fa-city"></i>
                    <h4>Delhi</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="350">
                    <i class="fa-solid fa-city"></i>
                    <h4>Kolkata</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fa-solid fa-city"></i>
                    <h4>Ahmedabad</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="450">
                    <i class="fa-solid fa-city"></i>
                    <h4>Pune</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="500">
                    <i class="fa-solid fa-city"></i>
                    <h4>Vijayawada</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="550">
                    <i class="fa-solid fa-city"></i>
                    <h4>Visakhapatnam</h4>
                </div>

                <div class="city-card" data-aos="zoom-in" data-aos-delay="600">
                    <i class="fa-solid fa-city"></i>
                    <h4>Nellore</h4>
                </div>

                <div class="city-card highlight" data-aos="zoom-in" data-aos-delay="650">
                    <i class="fa-solid fa-earth-asia"></i>
                    <h4>And Many More...</h4>
                </div>

            </div>

        </div>

    </section>



    <!--==================================
            OUR BRANCH OFFICE
    ===================================-->

    <section class="branch-section">

        <div class="container">

            <div class="section-heading" data-aos="fade-up">

                <span class="section-subtitle">
                    <i class="fa-solid fa-building"></i>
                    Head Office
                </span>

                <h2>Visit Our Office</h2>

                <p>
                    Our dedicated team is always ready to assist you with reliable
                    packing and moving solutions. Visit us or contact us for a free
                    consultation and quotation.
                </p>

            </div>

            <div class="branch-wrapper">

                <!-- Left -->

                <div class="branch-image" data-aos="fade-right">

                    <img src="{{ asset('website/img/office.jpg') }}" alt="PBC Packers Office">

                    <div class="office-badge">

                        <i class="fa-solid fa-award"></i>

                        Trusted Since 2013

                    </div>

                </div>

                <!-- Right -->

                <div class="branch-card" data-aos="fade-left">

                    <div class="branch-item">

                        <i class="fa-solid fa-location-dot"></i>

                        <div>

                            <h4>Office Address</h4>

                            <p>
                                D.No.26/12/439,
                                BV Nagar,
                                Near RTO Office,
                                Nellore - 524004
                            </p>

                        </div>

                    </div>

                    <div class="branch-item">

                        <i class="fa-solid fa-phone"></i>

                        <div>

                            <h4>Call Us</h4>

                            <p>9866166456</p>

                            <p>9701658899</p>

                        </div>

                    </div>

                    <div class="branch-item">

                        <i class="fa-solid fa-envelope"></i>

                        <div>

                            <h4>Email</h4>

                            <p>info@pbcpackers.com</p>

                        </div>

                    </div>

                    <div class="branch-item">

                        <i class="fa-solid fa-clock"></i>

                        <div>

                            <h4>Working Hours</h4>

                            <p>Monday - Sunday</p>

                            <p>08:00 AM - 08:00 PM</p>

                        </div>

                    </div>

                    <div class="branch-buttons">

                        <a href="tel:9866166456" class="office-btn call-btn">

                            <i class="fa-solid fa-phone"></i>

                            Call Now

                        </a>

                        <a href="{{ route('contact') }}" class="office-btn quote-btn">

                            <i class="fa-solid fa-file-signature"></i>

                            Get Quote

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--==================================
            GOOGLE MAP SECTION
    ===================================-->

    <section class="map-section">

        <div class="container">

            <div class="section-heading" data-aos="fade-up">

                <span class="section-subtitle">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Find Us
                </span>

                <h2>Visit Our Office</h2>

                <p>
                    Easily locate our office in Nellore. We're always ready to assist
                    you with professional packing and moving services.
                </p>

            </div>

            <div class="map-wrapper" data-aos="zoom-in">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.151020382162!2d79.999233!3d14.442598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d2d0e00000001%3A0x0000000000000000!2sNellore!5e0!3m2!1sen!2sin!4v1722330000000"
                    loading="lazy" allowfullscreen>
                </iframe>

                <div class="map-info">

                    <h3>PBC Packers & Movers</h3>

                    <p>

                        <i class="fa-solid fa-location-dot"></i>

                        D.No.26/12/439,
                        BV Nagar,
                        Near RTO Office,
                        Nellore – 524004

                    </p>

                    <div class="map-buttons">

                        <a href="tel:9866166456">

                            <i class="fa-solid fa-phone"></i>

                            Call Now

                        </a>

                        <a href="https://maps.google.com" target="_blank">

                            <i class="fa-solid fa-location-arrow"></i>

                            Get Directions

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
            once: true
        });
    </script>

@endsection