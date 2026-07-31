<!-- Sidebar -->
<div class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="sidebar-logo active">
                <a href="{{ url('admin/dashboard') }}" class="logo logo-normal d-flex align-items-center">
                        <div style="text-align: center;">
                                <img src="{{ asset('website') }}/img/pbc.png" alt="Logo">
                        </div>
                </a>
                <a href="{{url('admin/dashboard')}}" class="logo logo-white">
                        <div style="text-align: center;">
                                <img src="{{ asset('website') }}/img/pbc.png" alt="Logo">
                        </div>
                </a>
                <a href="{{url('admin/dashboard')}}" class="logo-small">
                        <div style="text-align: center;">
                                <img src="{{ asset('website') }}/img/pbc.png" alt="Logo">
                        </div>
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                        <i data-feather="chevrons-left" class="feather-16"></i>
                </a>
        </div>
        <!-- /Logo -->

        <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Dashboard</h6>
                                        <ul>
                                                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.dashboard') }}"><i
                                                                        class="ti ti-layout-grid fs-16 me-2"></i><span>Dashboard</span></a>
                                                </li>
                                                {{-- <li class="{{ Request::is('admin/todayDeals') ? 'active' : '' }}">
                                                        <a href="{{route('admin.todayDeals')}}">
                                                                <i class="ti ti-cards fs-16 me-2"></i><span>Today
                                                                        Deals</span></a>
                                                </li> --}}

                                        </ul>
                                </li>

                                <!------schedule----->

                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Schedule</h6>
                                        <ul>

                                                <li class="{{ Request::is('admin/contacts') ? 'active' : '' }}"><a
                                                                href="{{ route('admin.contacts.all') }}"><i
                                                                        class="ti ti-address-book fs-16 me-2"></i>Contacts</a>
                                                </li>
                                                <li class="{{ Request::is('admin/banners') ? 'active' : '' }}">
                                                        <a href="{{route('admin.banners.all')}}"><i
                                                                        class="ti ti-triangles fs-16 me-2"></i><span>Banners</span></a>
                                                </li>
                                                <li class="{{ Request::is('admin/serviceareas') ? 'active' : '' }}">
                                                        <a href="{{route('admin.serviceareas.all')}}"><i
                                                                        class="ti ti-triangles fs-16 me-2"></i><span>Service Areas</span></a>
                                                </li>
                                                <li class="{{ Request::routeIs('services.all') ? 'active' : '' }}"><a
                                                                href="{{ route('services.all') }}"><i
                                                                        class="ti ti-heart-handshake fs-16 me-2"></i>Services</a>
                                                </li>
                                                <li class="{{ Request::routeIs('admin.service-enquiries.all') ? 'active' : '' }}"><a
                                                                href="{{ route('admin.service-enquiries.all') }}"><i
                                                                        class="ti ti-heart-handshake fs-16 me-2"></i>Service Enquiries</a>
                                                </li>
                                                <li class="{{ Request::routeIs('admin.blogs.all') ? 'active' : '' }}"><a
                                                                href="{{ route('admin.blogs.all') }}"><i
                                                                        class="ti ti-heart-handshake fs-16 me-2"></i>Blogs</a>
                                                </li>
                                                <li class="{{ Request::is('admin/faqs') ? 'active' : '' }}"><a
                                                                href="{{route('admin.faqs.index')}}"><i
                                                                        class="ti ti-folder fs-16 me-2"></i><span>Faq's</span></a>
                                                </li>
                                                <li
                                                        class="{{ Request::routeIs('admin.galleries.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.galleries.all') }}"><i
                                                                        class="ti ti-heart-handshake fs-16 me-2"></i>Galleries</a>
                                                </li>
                                                <li class="{{ Request::is('admin/testimonials') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.testimonial.index') }}"><i
                                                                        class="ti ti-article fs-16 me-2"></i><span>Testimonials</span></a>
                                                </li>
                                                <li
                                                        class="{{ Request::is('admin/videotestimonials') ? 'active' : '' }}">
                                                        <a href="{{ route('videotestimonials.index') }}"><i
                                                                        class="ti ti-video fs-16 me-2"></i><span>Video
                                                                        Testimonials</span></a>
                                                </li>

                                        </ul>
                                </li>


                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Settings</h6>
                                        <ul>
                                                <li class="{{ Request::is('admin/settings/company') ? 'active' : '' }}">
                                                        <a href="{{route('admin.settings.company')}}"><i
                                                                        class="ti ti-world fs-16 me-2"></i><span>Company
                                                                        Settings</span><span
                                                                        class="menu-arr ow"></span></a>
                                                </li>

                                                <li>
                                                        <a href="{{ route('admin.logout') }}"
                                                                class="{{ Request::is('signin') ? 'active' : '' }}"><i
                                                                        class="ti ti-logout fs-16 me-2"
                                                                        style="color: red;"></i><span
                                                                        style="color: red;">Logout</span>
                                                        </a>
                                                </li>
                                        </ul>
                                </li>
                        </ul>
                </div>
        </div>
</div>