@extends('layouts.website')
@section('content')




    <!--==================================
                    PBC HERO SECTION
            ===================================-->

    <section class="pbc-hero-area">

        <div class="pbc-hero-overlay"></div>

        <div class="container">

            <div class="pbc-hero-content">

                <span class="pbc-hero-tag">
                    <i class="fa-solid fa-truck-fast"></i>
                    Trusted Packers & Movers Across India
                </span>

                <h1>
                    Safe, Secure & Reliable
                    <span>Packers & Movers</span>
                </h1>

                <p>
                    PBC Packers & Movers provides professional household shifting,
                    office relocation, vehicle transportation, packing,
                    unpacking, loading, unloading, and warehouse storage services
                    with complete safety and timely delivery across India.
                </p>



                <div class="pbc-hero-buttons">

                    <a href="{{ route('contact') }}" class="pbc-primary-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                        Get Free Quote
                    </a>

                    <a href="tel:+919866166456" class="pbc-secondary-btn">
                        <i class="fa-solid fa-phone"></i>
                        Call Now
                    </a>

                </div>

                <div class="pbc-hero-features">

                    <div class="pbc-feature-box">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>100% Safe Packing</span>
                    </div>

                    <div class="pbc-feature-box">
                        <i class="fa-solid fa-truck"></i>
                        <span>Door to Door Delivery</span>
                    </div>

                    <div class="pbc-feature-box">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>All India Service</span>
                    </div>

                </div>

                <br><br>

                <div class="pbc-blog-breadcrumb">

                    <a href="{{ route('home') }}">Home</a>

                    <span>
                        <i class="fa-solid fa-angle-right"></i>
                    </span>

                    <a href="{{ route('services') }}">service</a>

                    <span>
                        <i class="fa-solid fa-angle-right"></i>
                    </span>

                    <strong>service Details</strong>

                </div>

            </div>

        </div>

    </section>


    <form action="#" method="POST" class="enquiry-form">
        @csrf

        <!-- Selected Service -->
        <div class="selected-service-box">
            <label>Selected Service</label>

            <div class="selected-service-name">
                {{ request('service') }}
            </div>

            <input type="hidden" name="service" value="{{ request('service') }}">
        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Full Name <span>*</span></label>

                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Full Name">

                @error('name')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Mobile Number <span>*</span></label>

                <input type="text" name="mobile" value="{{ old('mobile') }}" maxlength="10"
                    placeholder="Enter Mobile Number">

                @error('mobile')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Email Address</label>

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address">

                @error('email')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Moving Date <span>*</span></label>

                <input type="date" name="moving_date" value="{{ old('moving_date') }}" min="{{ date('Y-m-d') }}">

                @error('moving_date')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Moving From <span>*</span></label>

                <input type="text" name="from_location" value="{{ old('from_location') }}" placeholder="Current Location">

                @error('from_location')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Moving To <span>*</span></label>

                <input type="text" name="to_location" value="{{ old('to_location') }}" placeholder="Destination">

                @error('to_location')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>

        </div>

        <div class="form-group full-width">
            <label>Message</label>

            <textarea name="message" rows="5" placeholder="Enter your moving requirements">{{ old('message') }}</textarea>

            @error('message')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="submit-area">
            <button type="submit" class="btn-enquiry">
                <i class="fa-solid fa-paper-plane"></i>
                Submit Enquiry
            </button>
        </div>

    </form>

@endsection