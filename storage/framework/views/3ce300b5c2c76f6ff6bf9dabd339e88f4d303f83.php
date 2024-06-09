<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <?php echo $__env->yieldPushContent('meta'); ?>
    <title>GSP | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('Frontend/desktop/img/logo/logo.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('Frontend/desktop/img/logo/logo.png')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <?php echo $__env->make('layouts.backend.Partials.theme_css_connection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldPushContent('head'); ?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
        <?php echo $__env->make('layouts.backend.Partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
        <?php echo $__env->make('layouts.backend.Partials.left_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <?php echo $__env->yieldContent('breadcrumb'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
        <?php echo $__env->make('layouts.backend.Partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->


    <?php echo $__env->make('layouts.backend.Partials.theme_js_connection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
<!-- END: Body-->

</html>
<?php /**PATH C:\laragon\www\app_gsp\resources\views/layouts/backend/master.blade.php ENDPATH**/ ?>