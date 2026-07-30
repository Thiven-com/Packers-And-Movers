@extends('layouts.website')
@section('content')


    <!--==================================
                                    FAQ HERO SECTION
                            ===================================-->

    <section class="faq-hero" style="background:
                    linear-gradient(120deg, rgba(12, 42, 82, 0.92), rgba(12, 42, 82, 0.55)),
                    url('{{ asset('website') }}/img/pbcmov.png') center center / cover no-repeat;">

        <div class="faq-overlay"></div>

        <!-- Floating Shapes -->

        <span class="faq-shape shape-one"></span>
        <span class="faq-shape shape-two"></span>
        <span class="faq-shape shape-three"></span>

        <div class="container">

            <div class="faq-hero-content" data-aos="fade-up">

                <span class="hero-badge">

                    <i class="fa-solid fa-circle-question"></i>

                    Frequently Asked Questions

                </span>

                <h1>

                    Got Questions?
                    <span>We've Got Answers.</span>

                </h1>

                <p>

                    Find answers to the most common questions about house shifting,
                    office relocation, vehicle transportation, packing services,
                    warehouse storage, pricing, and delivery across India.

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

                    <span>FAQ</span>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
                            FAQ INTRODUCTION
                    ===================================-->

    <section class="faq-intro">

        <div class="container">

            <div class="faq-intro-wrapper">

                <!-- Left Side -->

                <div class="faq-intro-content" data-aos="fade-right">

                    <span class="section-tag">

                        <i class="fa-solid fa-circle-question"></i>

                        Need Help?

                    </span>

                    <h2>

                        Frequently Asked
                        Questions

                    </h2>

                    <p>

                        We understand that planning a relocation comes with many
                        questions. To help you make informed decisions, we've
                        answered the most common queries about packing,
                        transportation, pricing, insurance, delivery, and storage
                        services.

                    </p>

                    <div class="faq-features">

                        <div class="faq-feature">

                            <i class="fa-solid fa-box-open"></i>

                            <span>Professional Packing</span>

                        </div>

                        <div class="faq-feature">

                            <i class="fa-solid fa-truck-fast"></i>

                            <span>Safe Transportation</span>

                        </div>

                        <div class="faq-feature">

                            <i class="fa-solid fa-shield-halved"></i>

                            <span>Secure Handling</span>

                        </div>

                        <div class="faq-feature">

                            <i class="fa-solid fa-clock"></i>

                            <span>On-Time Delivery</span>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->

                <div class="faq-intro-image" data-aos="fade-left">

                    <img src="{{ asset('website') }}/img/faq.png" alt="FAQ">

                    <div class="floating-card">

                        <i class="fa-solid fa-headset"></i>

                        <div>

                            <h4>24×7 Support</h4>

                            <p>Always ready to help</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--==================================
                PBC FAQ SECTION
        ===================================-->

    <section class="pbc-faq-area">

        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">

                <span class="section-tag">
                    <i class="fa-solid fa-comments"></i>
                    Common Questions
                </span>

                <h2>Frequently Asked Questions</h2>

                <p>
                    Find answers to the most commonly asked questions about
                    packing, relocation, transportation and storage services.
                </p>

            </div>

            <div class="pbc-faq-list">

                <!-- FAQ -->
                <div class="pbc-faq-card active" data-aos="fade-up">

                    <button class="pbc-faq-btn">
                        How much does house shifting cost?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            The relocation cost depends on distance, quantity of
                            goods, packing requirements and additional services.
                            Contact us for a free customized quotation.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="100">

                    <button class="pbc-faq-btn">
                        Do you provide packing materials?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Yes. We use premium quality cartons, bubble wrap,
                            corrugated sheets, stretch films and protective
                            materials for maximum safety.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="150">

                    <button class="pbc-faq-btn">
                        Is insurance available for my belongings?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Yes, we provide transit insurance options to protect
                            your valuable household and commercial goods during
                            transportation.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="200">

                    <button class="pbc-faq-btn">
                        How long will delivery take?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Delivery time depends on destination and shipment size.
                            Our team will provide an estimated delivery schedule
                            before transportation begins.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="250">

                    <button class="pbc-faq-btn">
                        Do you transport bikes and cars?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Absolutely. We provide secure bike and car carrier
                            services with GPS tracking and door-to-door delivery
                            across India.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="300">

                    <button class="pbc-faq-btn">
                        Can I track my shipment?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Yes. Our GPS-enabled transportation allows customers
                            to receive shipment updates throughout the journey.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="350">

                    <button class="pbc-faq-btn">
                        Do you offer office relocation services?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Yes. We specialize in office relocation with minimum
                            business downtime, ensuring safe transportation of
                            furniture, files and IT equipment.
                        </p>
                    </div>

                </div>

                <!-- FAQ -->
                <div class="pbc-faq-card" data-aos="fade-up" data-aos-delay="400">

                    <button class="pbc-faq-btn">
                        Do you provide warehouse & storage services?
                        <span>+</span>
                    </button>

                    <div class="pbc-faq-content">
                        <p>
                            Yes. Our secure warehouse facilities are available
                            for both short-term and long-term storage needs.
                        </p>
                    </div>

                </div>

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



    <script>

        document.querySelectorAll(".pbc-faq-btn").forEach(button => {
            button.addEventListener("click", () => {

                const current = button.parentElement;

                document.querySelectorAll(".pbc-faq-card").forEach(item => {
                    if (item !== current) {
                        item.classList.remove("active");
                    }
                });

                current.classList.toggle("active");
            });
        });

    </script>


@endsection