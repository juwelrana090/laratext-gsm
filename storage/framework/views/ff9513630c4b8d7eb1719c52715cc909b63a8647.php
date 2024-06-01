<?php
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
?>
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header" style="background-color: #fff;font-weight: bold;">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <div class="d-flex align-items-center ">
                    <img src="<?php echo e(asset('image/logo.jpeg')); ?>" style="width:100%" alt="">&nbsp;
                    
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
            <li class=" <?php echo e(Route::is('dashboard') ? 'active' : ''); ?> nav-item"><a href="<?php echo e(route('dashboard')); ?>"><i
                        class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>

            <?php if($userManagement): ?>
                <li class="navigation-header active"><span>User Management</span>
                </li>
                <?php if($rolesAccess): ?>
                    <li class=" <?php echo e($roleActive ? 'active' : ''); ?> nav-item"><a
                            href="<?php echo e(route('admin.roles.index')); ?>"><i class="feather icon-briefcase"></i><span
                                class="menu-title" data-i18n="Dashboard">Role</span></a>
                <?php endif; ?>
                <?php if($userAccess): ?>
                    <li class="<?php echo e($userActive ? 'active' : ''); ?> nav-item"><a href="<?php echo e(route('admin.users.index')); ?>"><i
                                class="feather icon-users"></i><span class="menu-title"
                                data-i18n="Dashboard">Users</span></a>
                <?php endif; ?>

            <?php endif; ?>
            <li class="navigation-header active"><span>General Section</span>
            <li class=" <?php echo e(Route::is('admin.cars.create') ? 'active' : ''); ?> nav-item"><a
                    href="<?php echo e(route('admin.cars.create')); ?>"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Dashboard">Product Add</span></a></li>
            <li class="<?php echo e(Route::is('admin.cars.index') ? 'active' : ''); ?>"><a
                    href="<?php echo e(route('admin.cars.index')); ?>"><i class="fa fa-th-list"></i><span class="menu-item"
                        data-i18n="Alerts">Product List</span></a>

            <li class="<?php echo e(Route::is('contact_message') ? 'active' : ''); ?>"><a href="<?php echo e(route('contact_message')); ?>"><i
                        class="fa fa-th-list"></i><span class="menu-item" data-i18n="Alerts">Contact Message</span></a>
            </li>
            <li class="<?php echo e($carSetupActive ? 'sidebar-group-active open' : ''); ?>  nav-item"><a href="#"><i
                        class="feather icon-briefcase"></i><span class="menu-title" data-i18n="CarSetup">Product
                        Setup</span></a>
                <ul class="menu-content">
                    <li class="<?php echo e(Route::is('admin.car_types.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.car_types.index')); ?>">
                            <i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Alerts">Category</span>
                        </a>
                    </li>
                    <li class="<?php echo e(Route::is('admin.brands.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.brands.index')); ?>">
                            <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Alerts">M.
                                Brands</span>
                        </a>
                    </li>

                    <li class="<?php echo e(Route::is('admin.fuel_types.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.fuel_types.index')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Vehicle Brands</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="<?php echo e($carSetupActive ? 'sidebar-group-active open' : ''); ?>  nav-item">
                <a href="#">
                    <i class="feather icon-box"></i>
                    <span class="menu-title" data-i18n="CarSetup">Business</span>
                </a>
                <ul class="menu-content">
                    <li class="<?php echo e(Route::is('business.create') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('business.create')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Business Add</span></a>
                    </li>
                    <li class="<?php echo e(Route::is('business.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('business.index')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Business List</span></a>
                    </li>
                    <li class="<?php echo e(Route::is('business.category.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('business.category.index')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Category</span></a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo e($carSetupActive ? 'sidebar-group-active open' : ''); ?>  nav-item"><a href="#"><i
                        class="feather icon-briefcase"></i><span class="menu-title"
                        data-i18n="CarSetup">Experts</span></a>
                <ul class="menu-content">
                    <li class="<?php echo e(Route::is('experts.create') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('experts.create')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Expert Add</span></a>
                    </li>
                    <li class="<?php echo e(Route::is('experts.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('experts.index')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Experts List</span></a>
                    </li>
                    <li class="<?php echo e(Route::is('experts.category.index') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('experts.category.index')); ?>"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Alerts">Category</span></a>
                    </li>
                </ul>
            </li>

            <li class="navigation-header active"><span>Frontend Settings</span>
            

            <li class=" <?php echo e(Route::is('admin.frontend.about_us') ? 'active' : ''); ?> nav-item"><a
                    href="<?php echo e(route('admin.frontend.about_us')); ?>"><i class="feather icon-zap"></i><span
                        class="menu-title" data-i18n="Dashboard">About Us</span></a></li>
        </ul>
    </div>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\backend\Partials\left_sidebar.blade.php ENDPATH**/ ?>