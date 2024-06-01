    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/vendors/css/vendors.min.css')); ?>">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/components.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/themes/dark-layout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/themes/semi-dark-layout.css')); ?>">
    <?php echo $__env->yieldPushContent('theme_css'); ?>
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/css/pages/search.css')); ?>">
    <?php echo $__env->yieldPushContent('page_css'); ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/assets/css/style.css')); ?>">
    <?php echo toastr_css(); ?>
    <?php echo $__env->yieldPushContent('custom_css'); ?>
    <!-- END: Custom CSS-->
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\backend\Partials\theme_css_connection.blade.php ENDPATH**/ ?>