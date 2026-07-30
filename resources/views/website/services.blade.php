@extends('layouts.website')
@section('content')


    <!--======================
        SERVICES HERO BANNER
    =======================-->

    <section class="services-hero">

        <div class="hero-overlay"></div>

        <div class="container">

            <div class="hero-content" data-aos="fade-right">

                <span class="hero-tag">
                    <i class="fa-solid fa-truck-fast"></i>
                    Professional Packers & Movers
                </span>

                <h1>
                    Safe, Fast & Reliable
                    <span>Packing & Moving Services</span>
                </h1>

                <p>
                    PBC Packers & Movers provides professional house shifting,
                    office relocation, vehicle transportation, packing,
                    loading, unloading, and storage services across India with
                    complete safety and timely delivery.
                </p>

                <div class="hero-buttons">

                    <a href="{{ route('contact') }}" class="btn-orange">
                        <i class="fa-solid fa-file-signature"></i>
                        View Details
                    </a>

                    <a href="tel:+91986616456" class="btn-outline">

                        <i class="fa-solid fa-phone"></i>

                        Call Now

                    </a>

                </div>

                <div class="breadcrumb-box">

                    <a href="{{ route('home') }}">Home</a>

                    <span>/</span>

                    <span>Services</span>

                </div>

            </div>

        </div>

    </section>

    

    <!--================ HOUSE SHIFTING =================-->

    <section class="service-block">

        <div class="container">

            <div class="service-row">

                <!-- Image -->

                <div class="service-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/hshift.png" alt="House Shifting">

                </div>

                <!-- Content -->

                <div class="service-content" data-aos="fade-left">

                    <span class="service-tag">
                        House Shifting
                    </span>

                    <h2>Safe & Secure House Shifting Services</h2>

                    <p>
                        We provide hassle-free household relocation services with
                        premium packing materials, trained professionals, and
                        timely delivery across India.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Premium Packing Materials</li>

                        <li><i class="fa-solid fa-circle-check"></i> Experienced Moving Team</li>

                        <li><i class="fa-solid fa-circle-check"></i> GPS Vehicle Tracking</li>

                        <li><i class="fa-solid fa-circle-check"></i> Door-to-Door Delivery</li>

                    </ul>

                    <a href="{{ route('service-details') }}" class="service-btn">

                        <i class="fa-solid fa-calendar-check"></i>

                        View Details

                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="service-block">

        <div class="container">

            <div class="service-row reverse">

                <div class="service-image" data-aos="fade-left">

                    <img src="{{ asset('website') }}/img/offshift.png" alt="Office Relocation">

                </div>

                <div class="service-content" data-aos="fade-right">

                    <span class="service-tag">Office Relocation</span>

                    <h2>Professional Office Relocation</h2>

                    <p>
                        Safe relocation of office furniture, documents, computers,
                        and equipment with minimum business interruption.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> IT Equipment Handling</li>

                        <li><i class="fa-solid fa-circle-check"></i> Secure Packing</li>

                        <li><i class="fa-solid fa-circle-check"></i> Fast Relocation</li>

                        <li><i class="fa-solid fa-circle-check"></i> Weekend Shifting Available</li>

                    </ul>

                    <a href="{{ route('service-details') }}" class="service-btn">
                        <i class="fa-solid fa-calendar-check"></i>
                        View Details
                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="service-block">

        <div class="container">

            <div class="service-row">

                <!-- Image -->

                <div class="service-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/domrelo.png" alt="Domestic Relocation">

                </div>

                <!-- Content -->

                <div class="service-content" data-aos="fade-left">

                    <span class="service-tag">
                        Domestic Relocation
                    </span>

                    <h2>Reliable Domestic Relocation Services Across India</h2>

                    <p>
                        PBC Packers & Movers offers safe, efficient, and affordable domestic relocation
                        services across India. Our experienced team ensures secure packing, careful
                        transportation, and timely delivery, making your move smooth and completely
                        hassle-free.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Door-to-Door Relocation Services</li>

                        <li><i class="fa-solid fa-circle-check"></i> Secure Packing with Quality Materials</li>

                        <li><i class="fa-solid fa-circle-check"></i> GPS Enabled Vehicle Tracking</li>

                        <li><i class="fa-solid fa-circle-check"></i> Safe & On-Time Delivery Across India</li>

                    </ul>

                    <a href="{{ route('service-details') }}" class="service-btn">

                        <i class="fa-solid fa-calendar-check"></i>

                        View Details

                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="service-block">

        <div class="container">

            <div class="service-row reverse">

                <div class="service-image" data-aos="fade-left">

                    <img src="{{ asset('website') }}/img/biketra.png" alt="Bike Transportation">

                </div>

                <div class="service-content" data-aos="fade-right">

                    <span class="service-tag">
                        Bike Transportation
                    </span>

                    <h2>Safe & Reliable Bike Transportation Services</h2>

                    <p>
                        PBC Packers & Movers provides secure and hassle-free bike transportation
                        services across India. We use high-quality packing materials and specialized
                        carriers to ensure your motorcycle reaches its destination safely and on time.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Scratch-Free & Secure Packing</li>

                        <li><i class="fa-solid fa-circle-check"></i> Specialized Bike Transport Carriers</li>

                        <li><i class="fa-solid fa-circle-check"></i> GPS Vehicle Tracking Facility</li>

                        <li><i class="fa-solid fa-circle-check"></i> Safe Door-to-Door Delivery</li>

                    </ul>

                    <a href="{{ route('service-details') }}" class="service-btn">
                        <i class="fa-solid fa-calendar-check"></i>
                        View Details
                    </a>

                </div>

            </div>

        </div>

    </section>



    <section class="service-block">

        <div class="container">

            <div class="service-row">

                <!-- Image -->

                <div class="service-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/cartra.png" alt="Car Transportation">

                </div>

                <!-- Content -->

                <div class="service-content" data-aos="fade-left">

                    <span class="service-tag">
                        Car Transportation
                    </span>

                    <h2>Safe & Secure Car Transportation Services</h2>

                    <p>
                        PBC Packers & Movers provides reliable and secure car transportation services
                        across India. We use specialized vehicle carriers and advanced safety measures
                        to ensure your car is transported safely, securely, and delivered on time
                        without any damage.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Specialized Car Carrier Transport</li>

                        <li><i class="fa-solid fa-circle-check"></i> Damage-Free & Secure Vehicle Handling</li>

                        <li><i class="fa-solid fa-circle-check"></i> GPS Enabled Shipment Tracking</li>

                        <li><i class="fa-solid fa-circle-check"></i> Door-to-Door Pickup & Delivery</li>

                    </ul>
                    <a href="{{ route('service-details') }}" class="service-btn">

                        <i class="fa-solid fa-calendar-check"></i>

                        View Details

                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="service-block">

        <div class="container">

            <div class="service-row reverse">

                <div class="service-image" data-aos="fade-left">

                    <img src="{{ asset('website') }}/img/pacunpac.png" alt="Packing & Unpacking">

                </div>

                <div class="service-content" data-aos="fade-right">

                    <span class="service-tag">
                        Packing & Unpacking
                    </span>

                    <h2>Professional Packing & Unpacking Services</h2>

                    <p>
                        PBC Packers & Movers provides professional packing and unpacking services
                        using high-quality packing materials to ensure the complete safety of your
                        household and office belongings. Our skilled team carefully packs, transports,
                        and unpacks every item with the utmost care and efficiency.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> High-Quality Packing Materials</li>

                        <li><i class="fa-solid fa-circle-check"></i> Safe Packing for Fragile Items</li>

                        <li><i class="fa-solid fa-circle-check"></i> Organized Unpacking & Arrangement</li>

                        <li><i class="fa-solid fa-circle-check"></i> Damage-Free Handling & Protection</li>

                    </ul>
                    <a href="{{ route('service-details') }}" class="service-btn">
                        <i class="fa-solid fa-calendar-check"></i>
                        View Details
                    </a>

                </div>

            </div>

        </div>

    </section>




    <section class="service-block">

        <div class="container">

            <div class="service-row">

                <!-- Image -->

                <div class="service-image" data-aos="fade-right">

                    <img src="{{ asset('website') }}/img/lodunlod.png" alt="Loading & Unloading">

                </div>

                <!-- Content -->

                <div class="service-content" data-aos="fade-left">

                    <span class="service-tag">
                        Loading & Unloading
                    </span>

                    <h2>Professional Loading & Unloading Services</h2>

                    <p>
                        PBC Packers & Movers provides safe and efficient loading and unloading
                        services using modern equipment and skilled professionals. We ensure your
                        household, office, and commercial belongings are handled carefully to
                        prevent damage during the moving process.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Trained & Experienced Loading Staff</li>

                        <li><i class="fa-solid fa-circle-check"></i> Modern Equipment for Safe Handling</li>

                        <li><i class="fa-solid fa-circle-check"></i> Damage-Free Loading & Unloading</li>

                        <li><i class="fa-solid fa-circle-check"></i> Fast, Secure & Efficient Service</li>

                    </ul>
                    <a href="{{ route('service-details') }}" class="service-btn">

                        <i class="fa-solid fa-calendar-check"></i>

                        View Details

                    </a>

                </div>

            </div>

        </div>

    </section>




    <section class="service-block">

        <div class="container">

            <div class="service-row reverse">

                <div class="service-image" data-aos="fade-left">

                    <img src="{{ asset('website') }}/img/ware.png" alt="Warehouse & Storage">

                </div>

                <div class="service-content" data-aos="fade-right">

                    <span class="service-tag">
                        Warehouse & Storage
                    </span>

                    <h2>Secure Warehouse & Storage Solutions</h2>

                    <p>
                        PBC Packers & Movers offers safe, clean, and secure warehouse and storage
                        solutions for household goods, office equipment, and commercial inventory.
                        Our well-maintained storage facilities are equipped with modern security
                        measures to keep your belongings protected for both short-term and long-term storage.
                    </p>

                    <ul class="service-features">

                        <li><i class="fa-solid fa-circle-check"></i> Safe & Secure Storage Facilities</li>

                        <li><i class="fa-solid fa-circle-check"></i> 24/7 CCTV Surveillance & Security</li>

                        <li><i class="fa-solid fa-circle-check"></i> Short-Term & Long-Term Storage Options</li>

                        <li><i class="fa-solid fa-circle-check"></i> Clean, Weather-Protected Warehouse Space</li>

                    </ul>
                    <a href="{{ route('service-details') }}" class="service-btn">
                        <i class="fa-solid fa-calendar-check"></i>
                        View Details
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


    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120
        });
    </script>

@endsection