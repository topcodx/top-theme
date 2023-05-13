<div class="ps-xl-7 px-2 pe-xl-0 d-flex align-items-stretch">
    <ul class="horizontal-menu nav flex-row d-block d-xl-flex">
        <li class="nav-item dropdown dropdown-hover {{ Request::is('components/bootstrap*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.bootstrap.buttons') }}">
                <span class="horizontal-menu-icon"><i class="fa-brands fa-bootstrap"></i></span>
                <span class="horizontal-menu-title">Bootstrap</span>
            </a>
            <ul class="horizontal-submenu dropdown-menu top-100">
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/buttons') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.buttons') }}">Buttons</a>
                </li>
                <li >
                    <a class="dropdown-item {{ Request::is('components/bootstrap/form-controls') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.form-controls') }}">Forms</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/tables') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.tables') }}">Tables</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/tables') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.tables') }}">Tables</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/yajra-tables') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.yajra-tables') }}">Datatables</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/progress') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.progress') }}">Progress</a>
                </li>
                <li >
                    <a class="dropdown-item {{ Request::is('components/bootstrap/modal-tab') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.modal-tab') }}">Modal & Tabs</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/alert') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.alert') }}">Alert</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/badges') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.badges') }}">Badges</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/list') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.list') }}">List</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/bootstrap/breadcrumb') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.breadcrumb') }}">Breadcrumb</a>
                </li>
                <li>
                    <a class="dropdown-item{{ Request::is('components/bootstrap/carousel') ? 'active' : '' }}"
                       href="{{ route('components.bootstrap.carousel') }}">Carousel</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover {{ Request::is('components/plugins*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.plugins.toastr') }}">
                <span class="horizontal-menu-icon"><i class="fa-solid fa-puzzle-piece"></i></span>
                <span class="horizontal-menu-title">Plugins</span>
            </a>
            <ul class="horizontal-submenu dropdown-menu top-100">
                <li>
                    <a class="dropdown-item {{ Request::is('components/plugins/toastr') ? 'active' : '' }}"
                       href="{{ route('components.plugins.toastr') }}">Toastr</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover {{ Request::is('components/auth*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.auth.login') }}">
                <span class="horizontal-menu-icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="horizontal-menu-title">Auth</span>
            </a>
            <ul class="horizontal-submenu dropdown-menu top-100">
                <li>
                    <a class="dropdown-item {{ Request::is('components/auth/login') ? 'active' : '' }}"
                       href="{{ route('components.auth.login') }}">Login</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/auth/signup') ? 'active' : '' }}"
                       href="{{ route('components.auth.signup') }}">Sign Up</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover {{ Request::is('components/dashboard*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.dashboard.dashboard-1') }}">
                <span class="horizontal-menu-icon"><i class="fa-solid fa-chart-pie"></i></span>
                <span class="horizontal-menu-title">Dashboard</span>
            </a>
            <ul class="horizontal-submenu dropdown-menu top-100">
                <li>
                    <a class="dropdown-item {{ Request::is('components/dashboard/dashboard-1') ? 'active' : '' }}"
                       href="{{ route('components.dashboard.dashboard-1') }}">Dashboard-1</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/dashboard/dashboard-2') ? 'active' : '' }}"
                       href="{{ route('components.dashboard.dashboard-2') }}">Dashboard-2</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover {{ Request::is('components/details*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.details.details-1') }}">
                <span class="horizontal-menu-icon"><i class="fa-solid fa-list-ul"></i></span>
                <span class="horizontal-menu-title">Details</span>
            </a>
            <ul class="horizontal-submenu dropdown-menu top-100">
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-1') ? 'active' : '' }}"
                       href="{{ route('components.details.details-1') }}">Details 1</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-2') ? 'active' : '' }}"
                       href="{{ route('components.details.details-2') }}">Details 2</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-3') ? 'active' : '' }}"
                       href="{{ route('components.details.details-3') }}">Details 3</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-4') ? 'active' : '' }}"
                       href="{{ route('components.details.details-4') }}">Details 4</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-5') ? 'active' : '' }}"
                       href="{{ route('components.details.details-5') }}">Details 5</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('components/details/details-6') ? 'active' : '' }}"
                       href="{{ route('components.details.details-6') }}">Details 6</a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ Request::is('components/calender*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.calender.full-calender') }}">
                <span class="horizontal-menu-icon"><i class="fa-solid fa-list-ul"></i></span>
                <span class="horizontal-menu-title">Calender</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('components/pricing*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center py-3" aria-current="page"
               href="{{ route('components.pricing.pricing') }}">
                <span class="horizontal-menu-icon"><i class="fa-solid fa-list-ul"></i></span>
                <span class="horizontal-menu-title">Pricing</span>
            </a>
        </li>
    </ul>
</div>
