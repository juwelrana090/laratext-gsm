<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php echo $__env->yieldContent('meta'); ?>
    <title>GSP Auto Spare Parts - UAE</title>
    <meta name="application-name" content="GSP Auto Spare Parts - UAE" >
    <meta name="description" content="GSP Gulf Space Parts, Established in 1997, a manufacturer and wholesaler specialized in Automotive Aftermarket Ac compressors. GSP Auto Spare Parts is our new venture located in Sharjah and Abu Dhabi. We are ready to serve customers from the Middle East and Africa to find high quality Auto Ac products.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('Frontend/desktop/img/logo/logo.png')); ?>">
    <!-- Place favicon.ico in the root directory -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/owl.carousel.min.css')); ?>">
    <!-- CSS here -->
    <meta name="google-site-verification" content="jg9KMDtdSiQwI0GzCG8g1sLDeIcPBg7XogOrK8mLrWM">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/template.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/desktop/css/responsive.css')); ?>">
    <?php echo toastr_css(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQYVF6D63R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MQYVF6D63R');
    </script>
    <?php echo $__env->yieldPushContent('css'); ?>

    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=613330f9ad38cf0012acf12d&product=sop'
        async='async'></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-227215570-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-227215570-1');
        </script>

</head>

<body>

    <?php echo $__env->make('layouts.frontend.desktop.parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.frontend.desktop.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- JS here -->
    <script src="<?php echo e(asset('Frontend/desktop/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/desktop/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/desktop/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/desktop/js/owl.carousel.min.js')); ?>"></script>
    <?php if(!MoBileView()): ?>
        <script src="<?php echo e(asset('Frontend/desktop/js/one-page-nav-min.js')); ?>"></script>
        <script src="<?php echo e(asset('Frontend/desktop/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('Frontend/desktop/js/main.js')); ?>"></script>
        
    <?php else: ?>
        <script src="<?php echo e(asset('Frontend/mobile/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Frontend/mobile/js/template.js')); ?>"></script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('js'); ?>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
    <script src="<?php echo e(asset('js/share.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\desktop\master.blade.php ENDPATH**/ ?>