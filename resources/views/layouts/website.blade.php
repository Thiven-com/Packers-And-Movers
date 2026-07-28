<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBC Packers & Movers | Safe, Reliable, On-Time Relocation Across India</title>
    <meta name="description"
        content="PBC Packers & Movers - Door-to-door packing, loading, transportation & unpacking services with complete safety. All over India service.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Site styles -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/about.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/services.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/locations.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">




</head>

<body>

    <!-- =========================================================
     PBC PACKERS & MOVERS — HEADER COMPONENT
     Include this markup wherever the site header is needed.
     Requires: style.css, Font Awesome, Google Fonts (see index.html <head>)
     ========================================================= -->



    <!-- Top info bar -->
    <!-- <div class="topbar">
        <div class="container">
            <ul class="topbar-info">
                <li><i class="fa-solid fa-location-dot"></i> D.No.26/12/439, BV Nagar, Near RTO Office, Nellore &ndash;
                    524004</li>
                <li><i class="fa-solid fa-phone"></i> 9866XXXXXX / 9701XXXXXX</li>
                <li><i class="fa-solid fa-clock"></i> Mon &ndash; Sun: 8:00 AM &ndash; 8:00 PM | 24/7 Customer Support
                </li>
            </ul>
            <ul class="topbar-social">
                <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div> -->

    <!-- Logo + get quote row -->
    <!-- <div class="header-top">
        <div class="container">
            <a href="{{ route('home') }}" class="brand">
                <span class="brand-icon"><i class="fa-solid fa-truck-moving"></i></span>
                <span class="brand-text">
                    <span class="brand-name">PBC <span>PACKERS</span> &amp; MOVERS</span>
                    <span class="brand-tag">Safe &bull; Reliable &bull; On Time</span>
                </span>
            </a>
            <a href="#quote" class="btn btn-orange"><i class="fa-solid fa-file-invoice"></i> Get a Quote</a>
        </div>
    </div> -->



    <!-- =========================================================
     PBC PACKERS & MOVERS — TOP HEADER BAR (matches logo screenshot)
     Single row: logo left, contact info right with dividers.
     ========================================================= -->
    <div class="topbar-main">
        <div class="container topbar-main-inner">

            <a href="{{ route('home') }}" class="brand-logo">
                <img src="{{ asset('website') }}/img/packlogo.png" alt="PBC Packers and Movers">
            </a>

            <ul class="topbar-info-v2">
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>D.No.26/12/439, BV Nagar,<br>Near RTO Office, Nellore & 524004</span>
                </li>
                <li>
                    <i class="fa-solid fa-phone-volume"></i>
                    <span>9866XXXXXX<br>9701XXXXXX</span>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <span>Mon - Sun : 8:00 AM & 8:00 PM<br>24/7 Customer Support</span>
                </li>
            </ul>

        </div>
    </div>

    <!-- Main navigation -->
    <header class="site-header">
        <nav class="navbar">
            <div class="container">
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="nav-links" id="navLinks">
                    <li class=""><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('services') }}">Services <i class="fa-solid fa-chevron-down"
                                style="font-size:.65rem;"></i></a>
                        <ul class="dropdown">
                            <li><a href="{{ route('services') }}">House Shifting</a></li>
                            <li><a href="{{ route('services') }}">Office Relocation</a></li>
                            <li><a href="{{ route('services') }}">Domestic Relocation</a></li>
                            <li><a href="{{ route('services') }}">Bike & Car Transportation</a></li>
                            <li><a href="{{ route('services') }}">Packing & Unpacking</a></li>
                            <li><a href="{{ route('services') }}">Warehouse & Storage</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('locations') }}">Locations</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('videos') }}">Videos</a></li>
                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
                <div class="nav-cta">
                    <a href="#quote" class="btn btn-orange btn-sm"><i class="fa-solid fa-file-invoice"></i> Get a
                        Quote</a>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')

    <!-- =========================================================
     PBC PACKERS & MOVERS — FOOTER COMPONENT
     Include this markup wherever the site footer is needed.
     Requires: style.css, Font Awesome (see index.html <head>)
     ========================================================= -->

    <!-- Sticky call-to-action strip -->
    <div class="cta-strip">
        <div class="container">
            <ul class="cta-links">
                <li><a href="tel:+919866XXXXXX"><i class="fa-solid fa-phone"></i> Click to Call</a></li>
                <li><a href="https://wa.me/919866XXXXXX"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a></li>
                <li><a href="#quote"><i class="fa-solid fa-file-invoice"></i> Get Free Quote</a></li>
            </ul>
            <a href="#" class="btn btn-orange btn-sm"><i class="fa-solid fa-download"></i> Download Brochure</a>
        </div>
    </div>

    <footer class="site-footer" id="contact">
        <div class="footer-top">
            <div class="container footer-grid">

                <div class="footer-brand">
                    <a href="index.html" class="brand">
                        <span class="brand-icon"><i class="fa-solid fa-truck-moving"></i></span>
                        <span class="brand-text">
                            <span class="brand-name">PBC PACKERS &amp; MOVERS</span>
                        </span>
                    </a>
                    <p>PBC Packers and Movers is a trusted name in the packing and moving industry, offering safe,
                        reliable
                        and affordable relocation services across India.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                        <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Services</a></li>
                        <li><a href="#gallery"><i class="fa-solid fa-angle-right"></i> Gallery</a></li>
                        <li><a href="#videos"><i class="fa-solid fa-angle-right"></i> Videos</a></li>
                        <li><a href="#testimonials"><i class="fa-solid fa-angle-right"></i> Testimonials</a></li>
                        <li><a href="#locations"><i class="fa-solid fa-angle-right"></i> Locations</a></li>
                        <li><a href="#blog"><i class="fa-solid fa-angle-right"></i> Blog</a></li>
                        <li><a href="#faq"><i class="fa-solid fa-angle-right"></i> FAQ</a></li>
                        <li><a href="#contact"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> House Shifting</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Office Relocation</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Domestic Relocation</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Car Transportation</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Bike Transportation</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Packing &amp; Unpacking</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Loading &amp; Unloading</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Warehouse &amp; Storage</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Insurance Assistance</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Corporate Relocation</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul class="footer-contact">
                        <li><i class="fa-solid fa-location-dot"></i> D.No.26/12/439, BV Nagar, Near RTO Office, Nellore
                            &ndash; 524004</li>
                        <li><i class="fa-solid fa-phone"></i> 9866XXXXXX / 9701XXXXXX</li>
                        <li><i class="fa-solid fa-envelope"></i> info@pbcpackersandmovers.com</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <span>&copy; 2024 PBC Packers and Movers. All Rights Reserved.</span>
                <span><a href="#">Privacy Policy</a> &nbsp;|&nbsp; <a href="#">Terms &amp; Conditions</a></span>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/919866XXXXXX" class="float-whatsapp" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script src="{{ asset('website') }}/js/script.js"></script>

</body>

</html>