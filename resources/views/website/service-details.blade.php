@extends('layouts.website')
@section('content')

    <!-- HERO SECTION -->
    <section class="pbc-hero-area">
        <div class="pbc-hero-overlay"></div>

        <div class="container">
            <div class="pbc-hero-content">

                <span class="pbc-hero-tag">
                    <i class="fa-solid fa-truck-fast"></i>
                    {{ $service->type ?? 'Professional Moving Service' }}
                </span>

                <h1 style="color: #fff;">
                    {{ $service->title }}
                </h1>

                <p>
                    {{ $service->description }}
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

                <br><br>

                <div class="pbc-blog-breadcrumb">
                    <a href="{{ route('home') }}">Home</a>

                    <span><i class="fa-solid fa-angle-right"></i></span>

                    <a href="{{ route('services') }}">Services</a>

                    <span><i class="fa-solid fa-angle-right"></i></span>

                    <strong>{{ $service->title }}</strong>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICE DETAILS SECTION -->
    <section class="service-details-section py-5">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded-4 shadow">
                </div><br><br>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">{{ $service->title }}</h2> <br>

                    <p class="mb-4">
                        {{ $service->short_description }}
                    </p><br>

                    <p class="mb-4">
                        {{ $service->description }}
                    </p>

                    @if(!empty($service->features))
                        <ul class="service-features list-unstyled">
                            @foreach(explode(',', $service->features) as $feature)
                                <li class="mb-2">
                                    <i class="fa-solid fa-circle-check text-success me-2"></i>
                                    {{ trim($feature) }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

            </div>
        </div>
    </section>

    <!-- ENQUIRY FORM -->
    <section class="enquiry-section py-5 bg-light">
        <div class="container">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('service-enquiry.store') }}" method="POST" class="enquiry-form">
                @csrf
                <!-- Selected Service -->
                <div class="selected-service-box">
                    <label>Selected Service</label>

                    <div class="selected-service-name">
                        {{ $service->title }}
                    </div>

                    <input type="hidden" name="service" value="{{ $service->title }}">
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

                        <input type="text" name="from_location" value="{{ old('from_location') }}"
                            placeholder="Current Location">

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

                    <textarea name="message" rows="5"
                        placeholder="Enter your moving requirements">{{ old('message') }}</textarea>

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

        </div>
    </section>

@endsection