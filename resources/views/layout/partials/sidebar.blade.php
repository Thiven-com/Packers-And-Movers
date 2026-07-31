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

                                        <h6 class="submenu-hdr">Main</h6>

                                        <ul>

                                                <li
                                                        class="{{ Request::routeIs('admin.contacts.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.contacts.all') }}">
                                                                <i class="ti ti-address-book fs-16 me-2"></i>
                                                                Contacts
                                                        </a>
                                                </li>


                                                <li class="{{ Request::routeIs('admin.banners.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.banners.all') }}">
                                                                <i class="ti ti-photo fs-16 me-2"></i>
                                                                Banners
                                                        </a>
                                                </li>


                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.serviceareas.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.serviceareas.all') }}">
                                                                <i class="ti ti-map-pin fs-16 me-2"></i>
                                                                Service Areas
                                                        </a>
                                                </li> --}}


                                                {{-- <li class="{{ Request::routeIs('services.all') ? 'active' : '' }}">
                                                        <a href="{{ route('services.all') }}">
                                                                <i class="ti ti-truck fs-16 me-2"></i>
                                                                Services
                                                        </a>
                                                </li> --}}


                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.service-enquiries.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.service-enquiries.all') }}">
                                                                <i class="ti ti-clipboard-text fs-16 me-2"></i>
                                                                Service Enquiries
                                                        </a>
                                                </li> --}}


                                                <li class="{{ Request::routeIs('admin.blogs.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.blogs.all') }}">
                                                                <i class="ti ti-notes fs-16 me-2"></i>
                                                                Blogs
                                                        </a>
                                                </li>


                                                <li class="{{ Request::routeIs('admin.faqs.index') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.faqs.index') }}">
                                                                <i class="ti ti-help-circle fs-16 me-2"></i>
                                                                FAQs
                                                        </a>
                                                </li>


                                                <li
                                                        class="{{ Request::routeIs('admin.galleries.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.galleries.all') }}">
                                                                <i class="ti ti-photo fs-16 me-2"></i>
                                                                Gallery
                                                        </a>
                                                </li>


                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.testimonial.index') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.testimonial.index') }}">
                                                                <i class="ti ti-message-circle fs-16 me-2"></i>
                                                                Testimonials
                                                        </a>
                                                </li> --}}


                                                <li
                                                        class="{{ Request::routeIs('videotestimonials.index') ? 'active' : '' }}">
                                                        <a href="{{ route('videotestimonials.index') }}">
                                                                <i class="ti ti-video fs-16 me-2"></i>
                                                                Videos
                                                        </a>
                                                </li>


                                        </ul>

                                </li>

                                <li class="submenu-open">

                                        <h6 class="submenu-hdr">Website Management</h6>

                                        <ul>

                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.contacts.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.contacts.all') }}">
                                                                <i class="ti ti-address-book fs-16 me-2"></i>
                                                                Contacts
                                                        </a>
                                                </li> --}}


                                                {{-- <li class="{{ Request::routeIs('admin.banners.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.banners.all') }}">
                                                                <i class="ti ti-photo fs-16 me-2"></i>
                                                                Banners
                                                        </a>
                                                </li> --}}


                                                <li
                                                        class="{{ Request::routeIs('admin.serviceareas.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.serviceareas.all') }}">
                                                                <i class="ti ti-map-pin fs-16 me-2"></i>
                                                                Service Areas
                                                        </a>
                                                </li>


                                                <li class="{{ Request::routeIs('services.all') ? 'active' : '' }}">
                                                        <a href="{{ route('services.all') }}">
                                                                <i class="ti ti-truck fs-16 me-2"></i>
                                                                Services
                                                        </a>
                                                </li>


                                                <li
                                                        class="{{ Request::routeIs('admin.service-enquiries.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.service-enquiries.all') }}">
                                                                <i class="ti ti-clipboard-text fs-16 me-2"></i>
                                                                Service Enquiries
                                                        </a>
                                                </li>


                                                {{-- <li class="{{ Request::routeIs('admin.blogs.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.blogs.all') }}">
                                                                <i class="ti ti-notes fs-16 me-2"></i>
                                                                Blogs
                                                        </a>
                                                </li> --}}


                                                {{-- <li class="{{ Request::routeIs('admin.faqs.index') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.faqs.index') }}">
                                                                <i class="ti ti-help-circle fs-16 me-2"></i>
                                                                FAQs
                                                        </a>
                                                </li> --}}


                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.galleries.all') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.galleries.all') }}">
                                                                <i class="ti ti-photo fs-16 me-2"></i>
                                                                Gallery
                                                        </a>
                                                </li> --}}


                                                {{-- <li
                                                        class="{{ Request::routeIs('admin.testimonial.index') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.testimonial.index') }}">
                                                                <i class="ti ti-message-circle fs-16 me-2"></i>
                                                                Testimonials
                                                        </a>
                                                </li> --}}


                                                <li
                                                        class="{{ Request::routeIs('videotestimonials.index') ? 'active' : '' }}">
                                                        <a href="{{ route('videotestimonials.index') }}">
                                                                <i class="ti ti-video fs-16 me-2"></i>
                                                                Video Testimonials
                                                        </a>
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