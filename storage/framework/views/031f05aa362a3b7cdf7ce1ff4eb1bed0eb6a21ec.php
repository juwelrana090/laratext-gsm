    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo e(asset('Backend/app-assets/vendors/js/vendors.min.js')); ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <?php echo $__env->yieldPushContent('page_js'); ?>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(asset('Backend/app-assets/js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('Backend/app-assets/js/core/app.js')); ?>"></script>
    <script src="<?php echo e(asset('Backend/app-assets/js/scripts/components.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('theme_js'); ?>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
    <?php echo $__env->yieldPushContent('custom_js'); ?>
    <!-- END: Page JS-->
   
<?php /**PATH C:\laragon\www\app_gsp\resources\views/layouts/backend/Partials/theme_js_connection.blade.php ENDPATH**/ ?>