<header class='d-flex align-items-center justify-content-between flex-grow-1 header px-4 px-lg-7 px-xl-0'>
    <button type="button" class="btn px-0 aside-menu-container__aside-menubar text-gray-600 d-block d-xl-none sidebar-btn">
        <i class="fa-solid fa-bars fs-1"></i>
    </button>
    <nav class="navbar navbar-expand-xl navbar-light top-navbar d-xl-flex d-block px-3 px-xl-0 py-4 py-xl-0 "
         id="nav-header">
        <div class="container-fluid pe-0">
            <div class="navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(Request::is('components/bootstrap*'))
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/buttons') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/form-controls') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.form-controls') }}">Forms</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/tables') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.tables') }}">Tables</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/bootstrap/yajra-tables') ? 'active' : '' }}"
                               href="{{ route('components.bootstrap.yajra-tables') }}">Datatables</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/progress') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.progress') }}">Progress</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/modal-tab') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.modal-tab') }}">Modal & Tabs</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/alert') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.alert') }}">Alert</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/badges') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.badges') }}">Badges</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/list') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.list') }}">List</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/breadcrumb') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.breadcrumb') }}">Breadcrumb</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/bootstrap/carousel') ? 'active' : '' }}"
                           href="{{ route('components.bootstrap.carousel') }}">Carousel</a>
                    </li>
                    @elseif(Request::is('components/plugins*'))
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/plugins/toastr') ? 'active' : '' }}"
                               href="{{ route('components.plugins.toastr') }}">Toastr</a>
                        </li>
                    @elseif(Request::is('components/auth*'))
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/auth/login') ? 'active' : '' }}"
                           href="{{ route('components.auth.login') }}">Login</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/auth/signup') ? 'active' : '' }}"
                           href="{{ route('components.auth.signup') }}">Sign Up</a>
                    </li>
                    @elseif(Request::is('components/dashboard*'))
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/dashboard/dashboard-1') ? 'active' : '' }}"
                           href="{{ route('components.dashboard.dashboard-1') }}">Dashboard-1</a>
                    </li>
                    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                        <a class="nav-link p-0 {{ Request::is('components/dashboard/dashboard-2') ? 'active' : '' }}"
                           href="{{ route('components.dashboard.dashboard-2') }}">Dashboard-2</a>
                    </li>
                    @elseif(Request::is('components/details*'))
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-1') ? 'active' : '' }}"
                               href="{{ route('components.details.details-1') }}">Details 1</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-2') ? 'active' : '' }}"
                               href="{{ route('components.details.details-2') }}">Details 2</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-3') ? 'active' : '' }}"
                               href="{{ route('components.details.details-3') }}">Details 3</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-4') ? 'active' : '' }}"
                               href="{{ route('components.details.details-4') }}">Details 4</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-5') ? 'active' : '' }}"
                               href="{{ route('components.details.details-5') }}">Details 5</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-6') ? 'active' : '' }}"
                               href="{{ route('components.details.details-6') }}">Details 6</a>
                        </li>
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/details/details-7') ? 'active' : '' }}"
                               href="{{ route('components.details.details-7') }}">Details 7</a>
                        </li>
                    @elseif(Request::is('components/calender*'))
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/calender*') ? 'active' : '' }}"
                               href="{{ route('components.details.details-1') }}">Full-Calender</a>
                        </li>
                    @elseif(Request::is('components/pricing*'))
                        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0">
                            <a class="nav-link p-0 {{ Request::is('components/pricing*') ? 'active' : '' }}"
                               href="{{ route('components.pricing.pricing') }}">Pricing</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <ul class="nav align-items-center flex-nowrap">
        <li class="px-xxl-3 px-2">
            <a href="{{ route('change-mode') }}"><i class="fa-solid fa-moon text-primary fs-2"></i></a>
        </li>
        <li class="px-xxl-3 px-2">
            <div class="dropdown custom-dropdown d-flex align-items-center py-4">
                <button class="btn dropdown-toggle hide-arrow p-0 position-relative" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bell text-primary fs-2"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge badge-circle bg-danger">
                        9
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                <div class="dropdown-menu py-0 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-start border-bottom py-4 px-7">
                        <h3 class="text-gray-900 mb-0">Notifications</h3>
                    </div>
                    <div class="px-7 mt-5 inner-scroll height-270">
                        <div class="d-flex position-relative mb-5">
                            <span class="me-5 text-primary fs-2 icon-label"><i class="fa-solid fa-id-card"></i></span>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2">Company Retro Luxury marked as featured</h5>
                                <h6 class="text-gray-600 fs-small fw-light mb-0">Today</h6>
                            </div>
                        </div>
                        <div class="d-flex position-relative mb-5">
                            <span class="me-5 text-primary fs-2 icon-label"><i class="fa-solid fa-user-group"></i></span>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2">New Candidate Registered</h5>
                                <h6 class="text-gray-600 fs-small fw-light mb-0">2 Days</h6>
                            </div>
                        </div>
                        <div class="d-flex position-relative mb-5">
                            <span class="me-5 text-primary fs-2 icon-label"><i class="fa-solid fa-cart-shopping"></i></span>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2">Freshcode Technology purchase Standard Plan</h5>
                                <h6 class="text-gray-600 fs-small fw-light mb-0">2 Weeks</h6>
                            </div>
                        </div>
                        <div class="d-flex position-relative mb-5">
                            <span class="me-5 text-primary fs-2 icon-label"><i class="fa-solid fa-user-group"></i></span>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2">New Employer Registered</h5>
                                <h6 class="text-gray-600 fs-small fw-light mb-0">1 Month</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center border-top p-4">
                        <h5 class="text-primary mb-0 fs-5">Mark All As Read</h5>
                    </div>
                </div>
            </div>
        </li>
        <li class="px-xxl-3 px-2">
            <div class="dropdown dropdown-transparent d-flex align-items-center py-4">
                <div class="image image-circle image-mini">
                    <img src="{{asset('images/profile.png')}}"
                         class="img-fluid" alt="profile image">
                </div>
                <button class="btn dropdown-toggle ps-2 pe-0 text-gray-600" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Super Admin
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <div class="dropdown-menu py-7 pb-4 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-center border-bottom pb-5">
                        <div class="image image-circle image-tiny mb-5">
                            <img src="{{asset('images/avatar.png')}}" class="img-fluid" alt="profile image">
                        </div>
                        <h3 class="text-gray-900">Super Admin</h3>
                        <h4 class="mb-0 fw-400 fs-6">admin@infyhms.com</h4>
                    </div>
                    <ul class="pt-4">
                        <li>
                            <a class="dropdown-item text-gray-900" href="#">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="#">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                Change Password
                            </a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-hover">
                                <a class="dropdown-item text-gray-900" href="#">
                                   <span class="dropdown-icon me-4 text-gray-600">
                                       <i class="fa-solid fa-globe"></i>
                                   </span>
                                    Change Language
                                </a>
                                <ul class="dropdown-menu rounded-10 px-5 py-3 d-block end-100">
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            Arabic
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            Chinese
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            Spanish
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            German
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-gray-900 text-hover-primary" href="#">
                                            Gujarati
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="#">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button type="button" class="btn px-0 d-block d-xl-none header-btn pb-2">
                <i class="fa-solid fa-bars fs-1"></i>
            </button>
        </li>
    </ul>
</header>
<div class="bg-overlay" id="nav-overly"></div>
