@extends('layouts.website')
@section('content')



    <main>

        <!-- ============ HERO ============ -->
        <section class="hero" id="home">
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
                        <a href="tel:+919866XXXXXX" class="btn btn-navy"><i class="fa-solid fa-phone"></i> Call Now</a>
                        <a href="https://wa.me/919866XXXXXX" class="btn btn-green"><i class="fa-brands fa-whatsapp"></i>
                            WhatsApp</a>
                        <a href="{{ route('about') }}" class="btn btn-outline" style="background: #fff;
                        color: #FF9800; border: 2px solid #0077ff00;">About Us</a>
                    </div>

                    <div class="hero-dots">
                        <span class="active"></span><span></span><span></span>
                    </div>
                </div>

                <!-- Get free quote card -->
                <div class="quote-card" id="quote">
                    <div class="quote-card-head">GET FREE QUOTE</div>
                    <form class="quote-form" id="quoteForm"  >
                        <div class="field"><i class="fa-solid fa-user"></i><input type="text" placeholder="Full Name"
                                required></div>
                        <div class="field"><i class="fa-solid fa-mobile-screen"></i><input type="tel"
                                placeholder="Mobile Number" required></div>
                        <div class="field"><i class="fa-solid fa-location-dot"></i><input type="text"
                                placeholder="From Location" required></div>
                        <div class="field"><i class="fa-solid fa-location-dot"></i><input type="text"
                                placeholder="To Location" required></div>
                        <div class="field"><i class="fa-regular fa-calendar"></i><input type="date"
                                placeholder="Shifting Date"></div>
                        <div class="field">
                            <i class="fa-solid fa-list"></i>
                            <select>
                                <option>Type of Service</option>
                                <option>House Shifting</option>
                                <option>Office Relocation</option>
                                <option>Vehicle Transportation</option>
                                <option>Warehouse & Storage</option>
                            </select>
                        </div>
                        <div class="field">
                            <i class="fa-solid fa-house"></i>
                            <select>
                                <option>House Size</option>
                                <option>1 BHK</option>
                                <option>2 BHK</option>
                                <option>3 BHK</option>
                                <option>Villa / Independent House</option>
                            </select>
                        </div>
                        <div class="field"><i class="fa-regular fa-comment-dots"></i><textarea
                                placeholder="Message (Optional)"></textarea></div>
                        <button type="submit" class="btn btn-orange btn-block">Get Free Quote</button>
                    </form>
                </div>
            </div>
            <div class="hero-arrow"><i class="fa-solid fa-chevron-right"></i></div>
        </section>

        <!-- ============ SERVICES ============ -->
        <section id="services">
            <div class="container">
                <div class="section-head">
                    <span class="eyebrow" style="justify-content:center;">Our Services</span>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-house-chimney"></i></div>
                        <img src="{{ asset('website') }}/img/hshift.png" alt="House Shifting" class="service-img">
                        <h3>House Shifting</h3>
                        <p>Safe and secure home shifting with professional packing services.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-building"></i></div>
                        <img src="{{ asset('website') }}/img/offshift.png" alt="Office Relocation" class="service-img">
                        <h3>Office Relocation</h3>
                        <p>Hassle-free office relocation with minimal business downtime.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-truck"></i></div>
                        <img src="{{ asset('website') }}/img/domrelo.png" alt="Domestic Relocation" class="service-img">
                        <h3>Domestic Relocation</h3>
                        <p>Pan India relocation services for home and office.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-motorcycle"></i></div>
                        <img src="{{ asset('website') }}/img/biketra.png" alt="Bike Transportation" class="service-img">
                        <h3>Bike Transportation</h3>
                        <p>Safe and secure bike transportation services across India.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-car"></i></div>
                        <img src="{{ asset('website') }}/img/cartra.png" alt="Car Transportation" class="service-img">
                        <h3>Car Transportation</h3>
                        <p>Door-to-door car transportation with full safety.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-box-open"></i></div>
                        <img src="{{ asset('website') }}/img/pacunpac.png" alt="Packing & Unpacking" class="service-img">
                        <h3>Packing & Unpacking</h3>
                        <p>High quality packing materials and expert unpacking.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                        <img src="{{ asset('website') }}/img/lodunlod.png" alt="Loading & Unloading" class="service-img">
                        <h3>Loading & Unloading</h3>
                        <p>Expert team for safe loading and unloading services.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-warehouse"></i></div>
                        <img src="{{ asset('website') }}/img/ware.png" alt="Warehouse & Storage" class="service-img">
                        <h3>Warehouse & Storage</h3>
                        <p>Secure storage solutions with 24/7 surveillance facilities.</p>
                        <a href="{{ route('services') }}" class="read-more">READ MORE</a>
                    </div>
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

                <div class="panel">

                    <span class="eyebrow">Coverage</span>
                    <h2>We Provide Service All Over India</h2>

                    <div class="india-map-wrap">

                        <img src="{{ asset('website') }}/img/india.png" alt="India Map" class="india-map">

                        <ul class="india-list">
                            <li><i class="fa-solid fa-circle-check"></i> Hyderabad</li>
                            <li><i class="fa-solid fa-circle-check"></i> Bangalore</li>
                            <li><i class="fa-solid fa-circle-check"></i> Chennai</li>
                            <li><i class="fa-solid fa-circle-check"></i> Mumbai</li>
                            <li><i class="fa-solid fa-circle-check"></i> Delhi</li>
                            <li><i class="fa-solid fa-circle-check"></i> Kolkata</li>
                            <li><i class="fa-solid fa-circle-check"></i> Ahmedabad</li>
                            <li><i class="fa-solid fa-circle-check"></i> Vijayawada</li>
                            <li><i class="fa-solid fa-circle-check"></i> Visakhapatnam</li>
                            <li><i class="fa-solid fa-circle-check"></i> Nellore</li>
                            <li><i class="fa-solid fa-circle-check"></i> Pune</li>
                            <li><i class="fa-solid fa-circle-check"></i> And Many More...</li>
                        </ul>

                    </div>

                    <div class="location-btn">
                        <a href="#" class="btn btn-navy btn-sm" style="margin-top: 20px;">
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

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="0">
                        <img src="{{ asset('website') }}/img/ware.png" alt="">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
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
                    </div>

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

                            <div class="video-card" data-aos="zoom-in">

                                <img src="{{ asset('website/img/video-thumb1.jpg') }}" alt="">

                                <div class="video-overlay">

                                    <a href="https://www.youtube.com/" target="_blank">

                                        <span class="play-btn">

                                            <i class="fa-solid fa-play"></i>

                                        </span>

                                    </a>

                                </div>

                            </div>

                            <!-- Video 2 -->

                            <div class="video-card" data-aos="zoom-in" data-aos-delay="150">

                                <img src="{{ asset('website/img/video-thumb2.jpg') }}" alt="">

                                <div class="video-overlay">

                                    <a href="https://www.youtube.com/" target="_blank">

                                        <span class="play-btn">

                                            <i class="fa-solid fa-play"></i>

                                        </span>

                                    </a>

                                </div>

                            </div>




                            <!-- Video 3 -->

                            <div class="video-card" data-aos="zoom-in" data-aos-delay="150">

                                <img src="{{ asset('website/img/video-thumb3.jpg') }}" alt="">

                                <div class="video-overlay">

                                    <a href="https://www.youtube.com/" target="_blank">

                                        <span class="play-btn">

                                            <i class="fa-solid fa-play"></i>

                                        </span>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="text-center mt-5" data-aos="fade-up" style="text-align: center;
                                    margin-top: 20px;">

                            <a href="#" class="btn btn-orange">

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

                                <div class="faq-item active">

                                    <button class="faq-btn">

                                        How much does house shifting cost?

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                    <div class="faq-content">

                                        Cost depends on distance, quantity of goods, packing
                                        requirements, and the destination. Contact us for a
                                        free quotation.

                                    </div>

                                </div>

                                <div class="faq-item">

                                    <button class="faq-btn">

                                        Do you provide insurance?

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                    <div class="faq-content">

                                        Yes, we provide insurance assistance for additional
                                        protection during transportation.

                                    </div>

                                </div>

                                <div class="faq-item">

                                    <button class="faq-btn">

                                        Can I track my shipment?

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                    <div class="faq-content">

                                        Yes. Every shipment is GPS-enabled so you can monitor
                                        your goods in real time.

                                    </div>

                                </div>

                                <div class="faq-item">

                                    <button class="faq-btn">

                                        Do you provide packing materials?

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                    <div class="faq-content">

                                        We use premium cartons, bubble wrap, foam sheets,
                                        stretch film, and wooden crates.

                                    </div>

                                </div>

                                <div class="faq-item">

                                    <button class="faq-btn">

                                        Do you offer warehouse storage?

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                    <div class="faq-content">

                                        Yes, we provide secure short-term and long-term storage
                                        facilities.

                                    </div>

                                </div>

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
@endsection