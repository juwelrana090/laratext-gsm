@php
    $user = Auth::user();
    $userManagement =
        $user->can('user.create') ||
        $user->can('user.view') ||
        $user->can('user.edit') ||
        $user->can('user.delete') ||
        $user->can('role.create') ||
        $user->can('role.view') ||
        $user->can('role.edit') ||
        $user->can('role.delete');
    $userAccess =
        $user->can('user.create') || $user->can('user.view') || $user->can('user.edit') || $user->can('user.delete');
    $rolesAccess =
        $user->can('role.create') || $user->can('role.view') || $user->can('role.edit') || $user->can('role.delete');

    $roleActive = Route::is('admin.roles.index') || Route::is('admin.roles.edit');
    $userActive = Route::is('admin.users.index') || Route::is('admin.users.edit');

    $carSetupActive =
        Route::is('admin.brands.index') ||
        Route::is('admin.brands.edit') ||
        Route::is('admin.colors.index') ||
        Route::is('admin.colors.edit');
@endphp
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header" style="background-color: #fff;font-weight: bold;">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <div class="d-flex align-items-center ">
                    <img src="{{ asset('image/logo.jpeg') }}" style="width:100%" alt="">&nbsp;
                    {{-- <p style="font-size: 24px;margin:0;"><span style="color: #00489a">Best</span> <span style="color: #57c725">Cool</span></p> --}}
                </div>
            </li>


            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" {{ Route::is('dashboard') ? 'active' : '' }} nav-item"><a href="{{ route('dashboard') }}"><i
                        class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>

            @if ($userManagement)
                <li class="navigation-header active"><span>User Management</span>
                </li>
                @if ($rolesAccess)
                    <li class=" {{ $roleActive ? 'active' : '' }} nav-item"><a
                            href="{{ route('admin.roles.index') }}"><i class="feather icon-briefcase"></i><span
                                class="menu-title" data-i18n="Dashboard">Role</span></a>
                @endif
                @if ($userAccess)
                    <li class="{{ $userActive ? 'active' : '' }} nav-item"><a href="{{ route('admin.users.index') }}"><i
                                class="feather icon-users"></i><span class="menu-title"
                                data-i18n="Dashboard">Users</span></a>
                @endif

            @endif
            <li class="navigation-header active"><span>General Section</span>
            <li class=" {{ Route::is('admin.cars.create') ? 'active' : '' }} nav-item"><a
                    href="{{ route('admin.cars.create') }}"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Dashboard">Product Add</span></a></li>
            <li class="{{ Route::is('admin.cars.index') ? 'active' : '' }}"><a
                    href="{{ route('admin.cars.index') }}"><i class="fa fa-th-list"></i><span class="menu-item"
                        data-i18n="Alerts">Product List</span></a>

            <li class="{{ Route::is('contact_message') ? 'active' : '' }}"><a href="{{ route('contact_message') }}"><i
                        class="fa fa-th-list"></i><span class="menu-item" data-i18n="Alerts">Contact Message</span></a>
            </li>
            <li class="{{ $carSetupActive ? 'sidebar-group-active open' : '' }}  nav-item"><a href="#"><i
                        class="feather icon-briefcase"></i><span class="menu-title" data-i18n="CarSetup">Product
                        Setup</span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('admin.car_types.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.car_types.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Alerts">Category</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.car_sub_category.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.car_sub_category.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Alerts">Sub
                                Category</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.brands.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.brands.index') }}">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Alerts">M.
                                Brands</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('admin.fuel_types.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.fuel_types.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Vehicle Brands</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="{{ $carSetupActive ? 'sidebar-group-active open' : '' }}  nav-item">
                <a href="#">
                    <i class="fa fa-rss"></i>
                    <span class="menu-title" data-i18n="CarSetup">Blog</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('blogs.create') ? 'active' : '' }}">
                        <a href="{{ route('blogs.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Blog Add</span></a>
                    </li>
                    <li class="{{ Route::is('blogs.index') ? 'active' : '' }}">
                        <a href="{{ route('blogs.index') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Alerts">Blog List</span></a>
                    </li>
                    <li class="{{ Route::is('blogs.category.index') ? 'active' : '' }}">
                        <a href="{{ route('blogs.category.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Category</span></a>
                    </li>
                </ul>
            </li>

            <li class="{{ $carSetupActive ? 'sidebar-group-active open' : '' }}  nav-item">
                <a href="#">
                    <i class="feather icon-box"></i>
                    <span class="menu-title" data-i18n="CarSetup">Business</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('business.create') ? 'active' : '' }}">
                        <a href="{{ route('business.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Business Add</span></a>
                    </li>
                    <li class="{{ Route::is('business.index') ? 'active' : '' }}">
                        <a href="{{ route('business.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Business List</span></a>
                    </li>
                    <li class="{{ Route::is('business.category.index') ? 'active' : '' }}">
                        <a href="{{ route('business.category.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Category</span></a>
                    </li>
                </ul>
            </li>

            <li class="{{ $carSetupActive ? 'sidebar-group-active open' : '' }}  nav-item"><a href="#"><i
                        class="feather icon-briefcase"></i><span class="menu-title"
                        data-i18n="CarSetup">Experts</span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('experts.create') ? 'active' : '' }}">
                        <a href="{{ route('experts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Expert Add</span></a>
                    </li>
                    <li class="{{ Route::is('experts.index') ? 'active' : '' }}">
                        <a href="{{ route('experts.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Experts List</span></a>
                    </li>
                    <li class="{{ Route::is('experts.category.index') ? 'active' : '' }}">
                        <a href="{{ route('experts.category.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Category</span></a>
                    </li>
                </ul>
            </li>

            <li class=" {{ Route::is('locations.index') ? 'active' : '' }} nav-item">
                <a href="{{ route('locations.index') }}">
                    <i class="fa fa-map"></i>
                    <span class="menu-title" data-i18n="Dashboard">Locations</span>
                </a>
            </li>

            <li class=" {{ Route::is('plans.index') ? 'active' : '' }} nav-item">
                <a href="{{ route('plans.index') }}">
                    <i class="fa fa-usd"></i>
                    <span class="menu-title" data-i18n="Dashboard">Plans Settings</span>
                </a>
            </li>

            <li class=" {{ Route::is('plans.subscribeList') ? 'active' : '' }} nav-item">
                <a href="{{ route('plans.subscribeList') }}">
                    <i class="fa fa-usd"></i>
                    <span class="menu-title" data-i18n="Dashboard">Subscribe List</span>
                </a>
            </li>

            <li class=" {{ Route::is('touch.index') ? 'active' : '' }} nav-item">
                <a href="{{ route('touch.index') }}">
                    <i class="fa fa-star-half-o"></i>
                    <span class="menu-title" data-i18n="Dashboard">Get In Touch List</span>
                </a>
            </li>

            <li class=" {{ Route::is('review.index') ? 'active' : '' }} nav-item">
                <a href="{{ route('review.index') }}">
                    <i class="fa fa-star-half-o"></i>
                    <span class="menu-title" data-i18n="Dashboard">Review List</span>
                </a>
            </li>


            <li class="navigation-header active"><span>Frontend Settings</span></li>
            <li class=" {{ Route::is('admin.frontend.settings') ? 'active' : '' }} nav-item"><a
                    href="{{ route('admin.frontend.settings') }}"><i class="feather icon-zap"></i><span
                        class="menu-title" data-i18n="Dashboard">Settings</span></a>
            </li>
            <li class=" {{ Route::is('banner.index') ? 'active' : '' }} nav-item"><a
                    href="{{ route('banner.index') }}"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Dashboard">Banner Settings</span></a>
            </li>

            <li class=" {{ Route::is('admin.frontend.about_us') ? 'active' : '' }} nav-item">
                <a href="{{ route('admin.frontend.about_us') }}">
                    <i class="feather icon-zap"></i>
                    <span class="menu-title" data-i18n="Dashboard">About Us</span>
                </a>
            </li>
        </ul>
    </div>
</div>
