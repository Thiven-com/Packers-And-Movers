<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <style>
        /* ===== Professional Dashboard Header ===== */

        .dashboard-header {
            position: relative;
            overflow: hidden;
            border-radius: 28px;
            padding: 34px 36px;
            margin-bottom: 32px;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 55%, #2563eb 100%);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.16);
            color: #fff;
        }

        .dashboard-header::before {
            content: '';
            position: absolute;
            top: -110px;
            right: -110px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .dashboard-header::after {
            content: '';
            position: absolute;
            bottom: -90px;
            left: -90px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
        }

        .dashboard-header-content {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
        }

        .dashboard-welcome {
            max-width: 760px;
        }

        .welcome-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(10px);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .dashboard-welcome h1 {
            margin: 0 0 12px;
            font-size: 2.4rem;
            font-weight: 800;
            line-height: 1.15;
            color: #fff;
        }

        .dashboard-welcome p {
            margin: 0;
            max-width: 640px;
            font-size: 15px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.84);
        }

        .wave-hand {
            display: inline-block;
            transform-origin: 70% 70%;
            animation: waveHand 2.8s ease-in-out infinite;
        }

        .dashboard-header-icon {
            flex-shrink: 0;
        }

        .icon-circle {
            width: 110px;
            height: 110px;
            border-radius: 28px;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(12px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #fff;
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.12),
                0 18px 35px rgba(15, 23, 42, 0.22);
            animation: floatHeaderIcon 4s ease-in-out infinite;
        }

        @keyframes waveHand {

            0%,
            100% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(14deg);
            }

            30% {
                transform: rotate(-8deg);
            }

            45% {
                transform: rotate(14deg);
            }

            60% {
                transform: rotate(-4deg);
            }
        }

        @keyframes floatHeaderIcon {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        @media (max-width: 991px) {
            .dashboard-header {
                padding: 28px;
            }

            .dashboard-header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .dashboard-welcome h1 {
                font-size: 2rem;
            }

            .icon-circle {
                width: 88px;
                height: 88px;
                border-radius: 24px;
                font-size: 38px;
            }
        }

        @media (max-width: 576px) {
            .dashboard-header {
                padding: 24px 20px;
                border-radius: 22px;
            }

            .dashboard-welcome h1 {
                font-size: 1.75rem;
            }

            .dashboard-welcome p {
                font-size: 14px;
            }

            .welcome-badge {
                font-size: 11px;
                padding: 7px 12px;
            }
        }
    </style>
    <style>
        /* ===== Professional Dashboard Stats ===== */

        :root {
            --shadow: 0 12px 28px rgba(15, 23, 42, 0.12);
            --shadow-hover: 0 22px 48px rgba(15, 23, 42, 0.18);
        }

        .stats-card {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            padding: 28px;
            height: 100%;
            color: #fff;
            box-shadow: var(--shadow);
            transition: all .4s ease;
            isolation: isolate;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Decorative circles */
        .stats-card::before {
            content: '';
            position: absolute;
            width: 220px;
            height: 220px;
            top: -90px;
            right: -90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            z-index: -1;
        }

        .stats-card::after {
            content: '';
            position: absolute;
            width: 140px;
            height: 140px;
            bottom: -55px;
            left: -55px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            z-index: -1;
        }

        .stats-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        /* ===== Premium Gradients ===== */

        /* Service Areas - Navy & Royal Blue */
        .stats-card.area {
            background: linear-gradient(135deg, #0f172a 0%, #1d4ed8 100%);
        }

        /* Services - Slate & Cyan */
        .stats-card.service {
            background: linear-gradient(135deg, #111827 0%, #0891b2 100%);
        }

        /* Enquiries - Indigo & Violet */
        .stats-card.enquiry {
            background: linear-gradient(135deg, #312e81 0%, #7c3aed 100%);
        }

        /* Contacts - Emerald & Teal */
        .stats-card.contact {
            background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%);
        }

        .stats-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
        }

        .stats-title {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.82);
            margin-bottom: 14px;
        }

        .stats-count {
            font-size: 44px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 10px;
            color: #ffffff;
            animation: fadeInUp .8s ease;
        }

        .stats-sub {
            font-size: 13px;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.74);
        }

        .stats-icon {
            width: 74px;
            height: 74px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #ffffff;
            animation: floatIcon 3.2s ease-in-out infinite;
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.14),
                0 10px 22px rgba(0, 0, 0, 0.12);
            flex-shrink: 0;
        }

        /* Accent line */
        .stats-line {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg,
                    rgba(255, 255, 255, 0.95),
                    rgba(255, 255, 255, 0.18));
        }

        /* ===== Animations ===== */

        @keyframes floatIcon {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Responsive ===== */

        @media (max-width: 768px) {
            .stats-card {
                padding: 22px;
                border-radius: 20px;
            }

            .stats-count {
                font-size: 36px;
            }

            .stats-icon {
                width: 62px;
                height: 62px;
                font-size: 26px;
                border-radius: 18px;
            }

            .stats-sub {
                font-size: 12px;
            }
        }
    </style>
    <div class="page-wrapper">
        <div class="content">

            <div class="dashboard-header">
                <div class="dashboard-header-content">
                    <div class="dashboard-welcome">
                        <div class="welcome-badge">
                            <i class="ti ti-layout-dashboard"></i>
                            Admin Dashboard
                        </div>

                        <h1>
                            Welcome Back
                            <span class="wave-hand">👋</span>
                        </h1>

                        <p class="mb-0">
                            Manage <strong>{{ $site->site_name }}</strong> website activities,
                            monitor enquiries, contacts, services, and overall business performance from your dashboard.
                        </p>
                    </div>

                    <div class="dashboard-header-icon">
                        <div class="icon-circle">
                            <i class="ti ti-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <!-- Service Areas -->
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.serviceareas.all') }}">
                    <div class="stats-card area">
                        <div class="stats-top">
                            <div>
                                <p class="stats-title">Service Areas</p>
                                <h2 class="stats-count">{{ $serviceAreasCount }}</h2>
                                <p class="stats-sub mb-0">Active service coverage locations</p>
                            </div>
                            <div class="stats-icon">
                                <i class="ti ti-map-pin"></i>
                            </div>
                        </div>
                        <div class="stats-line"></div>
                    </div>
                    </a>
                </div>

                <!-- Services -->
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('services.all') }}">
                    <div class="stats-card service">
                        <div class="stats-top">
                            <div>
                                <p class="stats-title">Services</p>
                                <h2 class="stats-count">{{ $servicesCount }}</h2>
                                <p class="stats-sub mb-0">Professional moving services available</p>
                            </div>
                            <div class="stats-icon">
                                <i class="ti ti-briefcase"></i>
                            </div>
                        </div>
                        <div class="stats-line"></div>
                    </div>
                    </a>
                </div>

                <!-- Service Enquiries -->
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.service-enquiries.all') }}">
                    <div class="stats-card enquiry">
                        <div class="stats-top">
                            <div>
                                <p class="stats-title">Service Enquiries</p>
                                <h2 class="stats-count">{{ $serviceEnquiriesCount }}</h2>
                                <p class="stats-sub mb-0">Customer quote and service requests</p>
                            </div>
                            <div class="stats-icon">
                                <i class="ti ti-message-circle"></i>
                            </div>
                        </div>
                        <div class="stats-line"></div>
                    </div>
                    </a>
                </div>

                <!-- Contacts -->
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.contacts.all') }}">
                    <div class="stats-card contact">
                        <div class="stats-top">
                            <div>
                                <p class="stats-title">Contacts</p>
                                <h2 class="stats-count">{{ $contactsCount }}</h2>
                                <p class="stats-sub mb-0">Direct customer contact submissions</p>
                            </div>
                            <div class="stats-icon">
                                <i class="ti ti-phone"></i>
                            </div>
                        </div>
                        <div class="stats-line"></div>
                    </div>
                    </a>
                </div>

            </div>


            {{-- <div class="alert bg-orange-transparent alert-dismissible fade show mb-4">
                <div>
                    <span><i class="ti ti-info-circle fs-14 text-orange me-2"></i>Your Product </span>
                    <span class="text-orange fw-semibold"></span>
                    is running low, already below Pcs.,
                    <a href="" class="link-orange text-decoration-underline fw-semibold">View / Add Stock</a>
                </div>
                <button type="button" class="btn-close text-gray-9 fs-14" data-bs-dismiss="alert" aria-label="Close"><i
                        class="ti ti-x"></i></button>
            </div> --}}


            {{-- <div class="row">



                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="dashboard-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="dashboard-title">Contacts</p>
                                <h2 class="dashboard-count">{{ $contacts }}</h2>
                            </div>
                            <div class="dashboard-icon">
                                <i class="ti ti-phone"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="dashboard-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="dashboard-title">Donation Enquiries</p>
                                <h2 class="dashboard-count">{{ $donations }}</h2>
                            </div>
                            <div class="dashboard-icon">
                                <i class="ti ti-heart-handshake"></i>
                            </div>
                        </div>
                    </div>
                </div>








            </div> --}}

            {{-- <div class="row mt-4"> --}}

                {{-- <div class="col-xxl-4 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex align-items-center">
                                <span class="title-icon bg-soft-pink fs-16 me-2"><i class="ti ti-box"></i></span>
                                <h5 class="card-title mb-0">Top Selling Products</h5>
                            </div>
                        </div>
                        <div class="card-body sell-product">

                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="avatar avatar-lg">
                                        <img src="" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-bold mb-1"><a href=""></a></h6>
                                        <div class="d-flex align-items-center item-list">
                                            <p>525</p>
                                            <p>200+ Sales</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="badge bg-outline-success badge-xs d-inline-flex align-items-center"><i
                                        class="ti ti-arrow-up-left me-1"></i>0%</span>
                            </div>

                        </div>
                    </div> --}}
                    {{--
                </div> --}}


                {{-- <div class="col-xxl-4 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex align-items-center">
                                <span class="title-icon bg-soft-danger fs-16 me-2"><i
                                        class="ti ti-alert-triangle"></i></span>
                                <h5 class="card-title mb-0">Low Stock Products</h5>
                            </div>
                            <a href="" class="fs-13 fw-medium text-decoration-underline">View All</a>
                        </div>
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <a href="" class="avatar avatar-lg">
                                        <img src="" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-bold mb-1"><a href=""></a></h6>
                                        <p class="fs-13">ID : #1245</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="fs-13 mb-1">Instock</p>
                                    <h6 class="text-orange fw-medium">515</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}



                {{-- <div class="col-xxl-4 col-md-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex align-items-center">
                                <span class="title-icon bg-soft-pink fs-16 me-2"><i class="ti ti-box"></i></span>
                                <h5 class="card-title mb-0">Recent Sales</h5>
                            </div>
                            <a href="" class="fs-13 fw-medium text-decoration-underline">View
                                All</a>
                        </div>
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">

                                    <div class="ms-2">
                                        <h6 class="fw-bold mb-1"><a href=""></a>
                                        </h6>
                                        <div class="d-flex align-items-center item-list">
                                            <p class="text-gray-9">₹</p>
                                            <p class="text-muted ms-2"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span
                                        class="badge {{ status == 'completed' ? 'badge-success' : 'badge-cyan' }} badge-xs"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}

            </div>

            {{-- <div class="row mt-4">
                <div class="col-xxl-6 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-inline-flex align-items-center">
                                <span class="title-icon bg-soft-orange fs-16 me-2"><i class="ti ti-users"></i></span>
                                <h5 class="card-title mb-0">Top Categories</h5>
                            </div>
                        </div>

                        <!-----card---->

                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <p class="fs-13 mb-1">sarvaguna yoga</p>
                                    <h2 class="d-flex align-items-center">000<span
                                            class="fs-13 fw-normal text-default ms-1">Packagess</span></h2>
                                </div>
                                <div>
                                    <canvas id="cat-" height="80" width="80"></canvas>
                                </div>
                            </div>


                            <div class="border br-8 p-2">
                                <div class="d-flex align-items-center justify-content-between border-bottom p-2">
                                    <p class="mb-0">Total Number Of Categories</p>
                                    <h5>2120</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between p-2">
                                    <p class="mb-0">Total Number Of Packages</p>
                                    <h5>2020</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div> --}}



            <div class="copyright-footer text-center">
                <p class="mb-1">
                    © 2026 {{ $site->site_name }}. All Rights Reserved.
                </p>
                {{-- <small class="text-muted">
                    Designed & Developed By ThiVen
                </small> --}}
            </div>
        </div>
@endsection