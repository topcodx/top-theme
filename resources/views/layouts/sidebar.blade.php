<div class="aside-menu-container" id="sidebar">
    <div class="aside-menu-container__aside-logo flex-column-auto">
        <a href="/" class="text-decoration-none sidebar-logo d-flex align-items-center">
            <div class="image image-mini me-3">
                <img src="{{asset('images/infy-hms-logo.png')}}"
                     class="img-fluid" alt="profile image">
            </div>
            <span class="text-gray-900 fs-4">InfyHMS</span>
        </a>
        <button type="button" class="btn px-0 text-gray-600 aside-menu-container__aside-menubar d-lg-block d-none sidebar-btn">
            <i class="fa-solid fa-bars fs-1"></i>
        </button>
    </div>
    <form class="d-flex position-relative aside-menu-container__aside-search search-control py-3 mt-1">
        <div class="position-relative w-100">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <span class="aside-menu-container__search-icon position-absolute d-flex align-items-center top-0 bottom-0">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
    </form>
    <div class="sidebar-scrolling">
        <ul class="aside-menu-container__aside-menu nav flex-column">
            <li class="nav-item {{ Request::is('components/bootstrap*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3 " aria-current="page"
                   href="{{ route('components.bootstrap.buttons') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-brands fa-bootstrap"></i></span>
                    <span class="aside-menu-title">Bootstrap</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/plugins*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.plugins.toastr') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-puzzle-piece"></i></span>
                    <span class="aside-menu-title">Plugins</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/auth*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.auth.login') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-brands fa-wpforms"></i></span>
                    <span class="aside-menu-title">Auth</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/dashboard*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.dashboard.dashboard-1') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-chart-pie"></i></span>
                    <span class="aside-menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/details*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.details.details-1') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-list-ul"></i></span>
                    <span class="aside-menu-title">Details</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/calender*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.calender.full-calender') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-list-ul"></i></span>
                    <span class="aside-menu-title">Calender</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/pricing*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.pricing.pricing') }}">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-list-ul"></i></span>
                    <span class="aside-menu-title">Pricing</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('components/horizontal/horizontal-tables*') ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center py-3" aria-current="page"
                   href="{{ route('components.horizontal.horizontal-tables') }}">
                    <span class="aside-menu-icon pe-3"><i class="fas fa-columns"></i></span>
                    <span class="aside-menu-title">Horizontal Sidebar</span>
                </a>
            </li>
            <li class="nav-item aside-item-collapse {{ Request::is('components/details*') ? 'show' : '' }}">
                <a class="nav-link aside-collapse-btn d-flex align-items-center py-3">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                    <span class="aside-menu-title">Sub Menu Details</span>
                    <span class="aside-menu-collapse-icon ms-auto fs-4">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
                <ul class="aside-submenu">
                    <li class="nav-item {{ Request::is('components/details/details-1') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.details.details-1') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Details 1</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('components/details/details-2') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.details.details-2') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Details 2</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('components/details/details-3') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.details.details-3') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Details 3</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('components/details/details-4') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.details.details-4') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Details 4</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item aside-item-collapse {{ Request::is('components/dashboard*') ? 'show' : '' }}">
                <a class="nav-link aside-collapse-btn d-flex align-items-center py-3">
                    <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                    <span class="aside-menu-title">Sub Menu dashboard</span>
                    <span class="aside-menu-collapse-icon ms-auto fs-4">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
                <ul class="aside-submenu">
                    <li class="nav-item {{ Request::is('components/dashboard/dashboard-1') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.dashboard.dashboard-1') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Dashboard-1</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('components/dashboard/dashboard-2') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center py-3"
                           href="{{ route('components.dashboard.dashboard-2') }}">
                            <span class="aside-menu-icon pe-3"><i class="fa-solid fa-bars"></i></span>
                            <span class="aside-menu-title">Dashboard-2</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="bg-overlay" id="sidebar-overly"></div>
