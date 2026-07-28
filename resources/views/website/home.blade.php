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
                        <a href="#about" class="btn btn-outline" style="background: #fff;
        color: #FF9800;
        border: 2px solid #FF9800;">About Us</a>
                    </div>

                    <div class="hero-dots">
                        <span class="active"></span><span></span><span></span>
                    </div>
                </div>

                <!-- Get free quote card -->
                <div class="quote-card" id="quote">
                    <div class="quote-card-head">GET FREE QUOTE</div>
                    <form class="quote-form" id="quoteForm">
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
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-building"></i></div>
                        <img src="{{ asset('website') }}/img/offshift.png" alt="Office Relocation" class="service-img">
                        <h3>Office Relocation</h3>
                        <p>Hassle-free office relocation with minimal business downtime.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-truck"></i></div>
                        <img src="{{ asset('website') }}/img/domrelo.png" alt="Domestic Relocation" class="service-img">
                        <h3>Domestic Relocation</h3>
                        <p>Pan India relocation services for home and office.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-motorcycle"></i></div>
                        <img src="{{ asset('website') }}/img/biketra.png" alt="Bike Transportation" class="service-img">
                        <h3>Bike Transportation</h3>
                        <p>Safe and secure bike transportation services across India.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-car"></i></div>
                        <img src="{{ asset('website') }}/img/cartra.png" alt="Car Transportation" class="service-img">
                        <h3>Car Transportation</h3>
                        <p>Door-to-door car transportation with full safety.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-box-open"></i></div>
                        <img src="{{ asset('website') }}/img/pacunpac.png" alt="Packing & Unpacking" class="service-img">
                        <h3>Packing & Unpacking</h3>
                        <p>High quality packing materials and expert unpacking.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                        <img src="{{ asset('website') }}/img/lodunlod.png" alt="Loading & Unloading" class="service-img">
                        <h3>Loading & Unloading</h3>
                        <p>Expert team for safe loading and unloading services.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-warehouse"></i></div>
                        <img src="{{ asset('website') }}/img/ware.png" alt="Warehouse & Storage" class="service-img">
                        <h3>Warehouse & Storage</h3>
                        <p>Secure storage solutions with 24/7 surveillance facilities.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= Why Choose Us ================= -->
        <section class="bg-soft" id="why-us">
            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Why Choose Us</span>
                    <h2>Why Choose PBC Packers & Movers?</h2>
                </div>

                <div class="why-list">

                    <div class="why-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div>
                            <h4>Safe & Secure Packing</h4>
                            <p>We use premium-quality packing materials to ensure complete protection of your belongings.
                            </p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-user-tie"></i>
                        <div>
                            <h4>Professional Team</h4>
                            <p>Experienced and trained professionals handle every move with care.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-tag"></i>
                        <div>
                            <h4>Affordable Pricing</h4>
                            <p>Transparent pricing with no hidden charges.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-clock"></i>
                        <div>
                            <h4>On-Time Delivery</h4>
                            <p>Timely pickup and delivery across India.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <div>
                            <h4>GPS Vehicle Tracking</h4>
                            <p>Track your shipment in real time throughout the journey.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <i class="fa-solid fa-file-shield"></i>
                        <div>
                            <h4>Insurance Assistance</h4>
                            <p>Insurance support for additional peace of mind.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ================= Our Working Process ================= -->
        <section class="process-section">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Our Working Process</span>
                    <h2>How We Work</h2>
                </div>

                <div class="process-steps">

                    <div class="process-step">
                        <div class="num">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <strong>01</strong>
                        <span>Request Quote</span>
                    </div>

                    <div class="process-step">
                        <div class="num">
                            <i class="fa-solid fa-clipboard-list"></i>
                        </div>
                        <strong>02</strong>
                        <span>Survey & Planning</span>
                    </div>

                    <div class="process-step">
                        <div class="num">
                            <i class="fa-solid fa-dolly"></i>
                        </div>
                        <strong>03</strong>
                        <span>Packing & Moving</span>
                    </div>

                    <div class="process-step">
                        <div class="num">
                            <i class="fa-solid fa-house-circle-check"></i>
                        </div>
                        <strong>04</strong>
                        <span>Safe Delivery & Unpacking</span>
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

                    <a href="#" class="btn btn-navy btn-sm" style="margin-top:25px;">
                        View All Locations
                    </a>

                </div>

            </div>
        </section>


        <!-- ================= TESTIMONIALS ================= -->
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

        </section>


        <!-- ================= PHOTO GALLERY ================= -->
        <section id="gallery" class="bg-soft">
            <div class="container">

                <div class="panel">

                    <span class="eyebrow">Photo Gallery</span>
                    <h2>Our Moving Gallery</h2>

                    <div class="gallery-grid">

                        <img src="https://picsum.photos/id/1040/300/220" alt="">
                        <img src="https://picsum.photos/id/1080/300/220" alt="">
                        <img src="https://picsum.photos/id/1074/300/220" alt="">
                        <img src="https://picsum.photos/id/1060/300/220" alt="">
                        <img src="https://picsum.photos/id/1039/300/220" alt="">
                        <img src="https://picsum.photos/id/1084/300/220" alt="">

                    </div>

                    <a href="#" class="btn btn-orange btn-sm">View Gallery</a>

                </div>

            </div>
        </section>

        <!-- ================= VIDEO GALLERY ================= -->
        <section id="videos">

            <div class="container">

                <div class="panel">

                    <span class="eyebrow">Video Gallery</span>
                    <h2>Watch Our Moving Videos</h2>

                    <div class="video-thumb">

                        <img src="https://picsum.photos/id/1076/900/450" alt="">

                        <span class="play-btn">
                            <i class="fa-solid fa-play"></i>
                        </span>

                    </div>

                    <a href="#" class="btn btn-orange btn-sm">
                        Watch More Videos
                    </a>

                </div>

            </div>

        </section>

        <!-- ================= BLOGS ================= -->
        <section id="blog" class="bg-soft">

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

        </section>

        <!-- ============ FAQ + OFFICE LOCATION ============ -->
        <section id="faq">
            <div class="container faq-loc-grid">

                <div class="panel">
                    <span class="eyebrow" style="margin-bottom:6px;">FAQ</span>
                    <h3 style="margin-bottom:6px;">Frequently Asked Questions</h3>
                    <div class="faq-item open">
                        <button class="faq-q">How much does house shifting cost? <i class="fa-solid fa-plus"></i></button>
                        <div class="faq-a">Cost depends on distance, volume of goods, and the type of service chosen.
                            Request a free quote for an exact estimate.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">Do you provide insurance? <i class="fa-solid fa-plus"></i></button>
                        <div class="faq-a">Yes, we offer transit insurance to protect your goods against damage or loss
                            during the move.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">Do you provide packing materials? <i class="fa-solid fa-plus"></i></button>
                        <div class="faq-a">Yes, we use high-quality boxes, bubble wrap, and padding materials included in
                            our packing service.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">Can I track my shipment? <i class="fa-solid fa-plus"></i></button>
                        <div class="faq-a">Yes, all our vehicles are GPS-enabled so you can track your shipment in real
                            time.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">Do you provide storage facilities? <i class="fa-solid fa-plus"></i></button>
                        <div class="faq-a">Yes, we offer secure, surveillance-monitored warehouse storage for short and
                            long-term needs.</div>
                    </div>
                    <a href="#" class="btn btn-orange btn-sm" style="margin-top:16px;">View All FAQs</a>
                </div>

                <div class="panel">
                    <span class="eyebrow" style="margin-bottom:6px;">Get In Touch</span>
                    <h3 style="margin-bottom:16px;">Our Office Location</h3>
                    <ul class="office-info">
                        <li><i class="fa-solid fa-location-dot"></i> D.No.26/12/439, BV Nagar, Near RTO Office, Nellore
                            &ndash; 524004</li>
                        <li><i class="fa-solid fa-phone"></i> 9866XXXXXX / 9701XXXXXX</li>
                        <li><i class="fa-solid fa-envelope"></i> info@pbcpackersandmovers.com</li>
                        <li><i class="fa-solid fa-clock"></i> Mon &ndash; Sun: 8:00 AM &ndash; 8:00 PM</li>
                    </ul>
                    <div class="map-embed">
                        <iframe
                            src="https://www.openstreetmap.org/export/embed.html?bbox=79.96%2C14.42%2C79.99%2C14.45&layer=mapnik&marker=14.435%2C79.975"
                            loading="lazy" title="Office location map"></iframe>
                    </div>
                </div>

            </div>
        </section>

    </main>


@endsection