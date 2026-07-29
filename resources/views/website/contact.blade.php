@extends('layouts.website')
@section('content')

    <!--==================================
                                CONTACT HERO SECTION
                        ===================================-->

    <section class="contact-hero" style="background:
            linear-gradient(120deg, rgba(12, 42, 82, 0.92), rgba(12, 42, 82, 0.55)),
            url('{{ asset('website') }}/img/pbcmov.png') center center / cover no-repeat;">

        <div class="contact-overlay"></div>

        <!-- Floating Shapes -->

        <span class="hero-shape shape-one"></span>
        <span class="hero-shape shape-two"></span>
        <span class="hero-shape shape-three"></span>

        <div class="container">

            <div class="contact-hero-content" data-aos="fade-up">

                <span class="hero-badge">

                    <i class="fa-solid fa-headset"></i>

                    We're Here To Help

                </span>

                <h1>

                    Let's Make Your
                    <span>Move Hassle-Free</span>

                </h1>

                <p>

                    Whether you're relocating your home, office, vehicle, or need
                    secure storage solutions, our expert team is ready to assist you
                    with reliable, affordable, and professional moving services
                    across India.

                </p>

                <div class="hero-buttons">

                    <a href="tel:+919866166456" class="hero-btn btn-orange">

                        <i class="fa-solid fa-phone-volume"></i>

                        Call Now

                    </a>

                    <a href="{{ route('contact') }}" class="hero-btn btn-white">

                        <i class="fa-solid fa-file-signature"></i>

                        Get Free Quote

                    </a>

                </div>

                <div class="hero-breadcrumb">

                    <a href="{{ route('home') }}">

                        Home

                    </a>

                    <i class="fa-solid fa-angle-right"></i>

                    <span>

                        Contact Us

                    </span>

                </div>

            </div>

        </div>

    </section>



    <!--==================================
                        QUICK CONTACT
                ===================================-->

    <section class="quick-contact">

        <div class="container">

            <div class="quick-contact-grid">

                <!-- Phone -->

                <div class="contact-card" data-aos="fade-up">

                    <div class="contact-icon">

                        <i class="fa-solid fa-phone-volume"></i>

                    </div>

                    <h3>Call Us</h3>

                    <p>Speak directly with our relocation experts.</p>

                    <a href="tel:+919866166456">

                        +91 98661 66456

                    </a>

                </div>

                <!-- Email -->

                <div class="contact-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="contact-icon">

                        <i class="fa-solid fa-envelope-open-text"></i>

                    </div>

                    <h3>Email Us</h3>

                    <p>Send us your enquiry anytime.</p>

                    <a href="mailto:info@pbcpackers.com">

                        info@pbcpackers.com

                    </a>

                </div>

                <!-- Address -->

                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="contact-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>

                    <h3>Visit Us</h3>

                    <p>

                        D.No.26/12/439,<br>

                        BV Nagar, Near RTO Office,<br>

                        Nellore - 524004

                    </p>

                </div>

                <!-- Hours -->

                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="contact-icon">

                        <i class="fa-solid fa-clock"></i>

                    </div>

                    <h3>Working Hours</h3>

                    <p>

                        Monday - Sunday

                    </p>

                    <span>

                        24×7 Customer Support

                    </span>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
                    CONTACT FORM
            ===================================-->

    <section class="contact-section">

        <div class="container">

            <div class="contact-wrapper">

                <!--======================
                            Contact Form
                        =======================-->

                <div class="contact-form-box" data-aos="fade-right">

                    <span class="section-tag">

                        <i class="fa-solid fa-paper-plane"></i>

                        Send Enquiry

                    </span>

                    <h2>Get A Free Moving Quote</h2>

                    <p>

                        Fill in the details below and our relocation experts
                        will contact you shortly with the best quotation.

                    </p>

                    <form action="#" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-lg-6">

                                <div class="input-box">

                                    <i class="fa-solid fa-user"></i>

                                    <input type="text" name="name" placeholder="Full Name" required>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="input-box">

                                    <i class="fa-solid fa-phone"></i>

                                    <input type="tel" name="phone" placeholder="Mobile Number" required>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="input-box">

                                    <i class="fa-solid fa-envelope"></i>

                                    <input type="email" name="email" placeholder="Email Address">

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="input-box">

                                    <i class="fa-solid fa-truck-fast"></i>

                                    <select name="service">

                                        <option>Select Service</option>

                                        <option>House Shifting</option>

                                        <option>Office Relocation</option>

                                        <option>Car Transportation</option>

                                        <option>Bike Transportation</option>

                                        <option>Packing & Unpacking</option>

                                        <option>Warehouse & Storage</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">

                                <div class="input-box textarea">

                                    <i class="fa-solid fa-message"></i>

                                    <textarea name="message" rows="5" placeholder="Write Your Message"></textarea>

                                </div>

                            </div>

                            <div class="col-lg-12">

                                <button class="contact-submit">

                                    <i class="fa-solid fa-paper-plane"></i>

                                    Send Message

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

                <!--======================
                            Company Info
                        =======================-->

                <div class="company-info" data-aos="fade-left">

                    <span class="section-tag">

                        <i class="fa-solid fa-building"></i>

                        Contact Details

                    </span>

                    <h2>PBC Packers & Movers</h2>

                    <p>

                        We provide safe, secure, and affordable relocation
                        services across India with professional packing,
                        transportation, and storage solutions.

                    </p>

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fa-solid fa-location-dot"></i>

                        </div>

                        <div>

                            <h4>Office Address</h4>

                            <p>

                                D.No.26/12/439,<br>

                                BV Nagar, Near RTO Office,<br>

                                Nellore - 524004

                            </p>

                        </div>

                    </div>

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fa-solid fa-phone"></i>

                        </div>

                        <div>

                            <h4>Phone</h4>

                            <a href="tel:+919866166456">

                                +91 98661 66456

                            </a>

                            <br>

                            <a href="tel:+919701658899">

                                +91 97016 58899

                            </a>

                        </div>

                    </div>

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fa-solid fa-envelope"></i>

                        </div>

                        <div>

                            <h4>Email</h4>

                            <a href="mailto:info@pbcpackers.com">

                                info@pbcpackers.com

                            </a>

                        </div>

                    </div>

                    <div class="social-links">

                        <a href="#"><i class="fab fa-facebook-f"></i></a>

                        <a href="#"><i class="fab fa-instagram"></i></a>

                        <a href="#"><i class="fab fa-whatsapp"></i></a>

                        <a href="#"><i class="fab fa-youtube"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
                GOOGLE MAP
        ===================================-->

    <section class="contact-map">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="section-tag">

                    <i class="fa-solid fa-location-dot"></i>

                    Find Us

                </span>

                <h2>Visit Our Office</h2>

                <p>

                    We welcome you to visit our office for personalized assistance.
                    Meet our relocation experts and get the best moving solutions
                    tailored to your needs.

                </p>

            </div>

            <div class="map-wrapper" data-aos="zoom-in">

                <!-- Google Map -->

                <iframe
                    src="https://www.google.com/maps?q=D.No.26/12/439,BV%20Nagar,Near%20RTO%20Office,Nellore&output=embed"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <!-- Floating Card -->

                <div class="map-info-card">

                    <div class="map-icon">

                        <i class="fa-solid fa-building"></i>

                    </div>

                    <h3>PBC Packers & Movers</h3>

                    <p>

                        D.No.26/12/439,<br>

                        BV Nagar, Near RTO Office,<br>

                        Nellore - 524004

                    </p>

                    <a href="https://maps.google.com/?q=D.No.26/12/439,BV Nagar,Nellore" target="_blank">

                        <i class="fa-solid fa-location-arrow"></i>

                        Get Directions

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
            WORKING HOURS
    ===================================-->

    <section class="working-hours">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="section-tag">

                    <i class="fa-solid fa-clock"></i>

                    Availability

                </span>

                <h2>Working Hours</h2>

                <p>

                    Our dedicated support team is available throughout the week
                    to assist you with bookings, quotations, and relocation
                    enquiries.

                </p>

            </div>

            <div class="hours-wrapper">

                <!-- Left Side -->

                <div class="hours-card" data-aos="fade-right">

                    <h3>

                        <i class="fa-solid fa-business-time"></i>

                        Office Schedule

                    </h3>

                    <ul>

                        <li>

                            <span>Monday - Friday</span>

                            <strong>08:00 AM - 08:00 PM</strong>

                        </li>

                        <li>

                            <span>Saturday</span>

                            <strong>08:00 AM - 07:00 PM</strong>

                        </li>

                        <li>

                            <span>Sunday</span>

                            <strong>09:00 AM - 05:00 PM</strong>

                        </li>

                        <li class="highlight">

                            <span>Emergency Support</span>

                            <strong>24×7 Available</strong>

                        </li>

                    </ul>

                </div>

                <!-- Right Side -->

                <div class="support-card" data-aos="fade-left">

                    <div class="support-icon">

                        <i class="fa-solid fa-headset"></i>

                    </div>

                    <h3>

                        Need Immediate Assistance?

                    </h3>

                    <p>

                        Our relocation experts are available 24×7 to answer
                        your questions and provide instant support for your
                        moving requirements.

                    </p>

                    <a href="tel:+919866166456">

                        <i class="fa-solid fa-phone"></i>

                        +91 98661 66456

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>


        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            offset: 100
        });


    </script>

@endsection