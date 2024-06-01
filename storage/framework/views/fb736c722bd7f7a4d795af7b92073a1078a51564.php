<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title','GSP Auto Spare Parts - UAE'); ?></title>
    <meta name="application-name" content="GSP Auto Spare Parts - UAE" >
    <meta name="description" content="GSP Gulf Space Parts, Established in 1997, a manufacturer and wholesaler specialized in Automotive Aftermarket Ac compressors. GSP Auto Spare Parts is our new venture located in Sharjah and Abu Dhabi. We are ready to serve customers from the Middle East and Africa to find high quality Auto Ac products.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->yieldContent('meta'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('Frontend/desktop/img/logo/logo.png')); ?>">
    <?php echo toastr_css(); ?>
    <!-- Place favicon.ico in the root directory -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- CSS here -->
    <meta name="google-site-verification" content="jg9KMDtdSiQwI0GzCG8g1sLDeIcPBg7XogOrK8mLrWM">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/template.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/mobile/css/responsive.css')); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQYVF6D63R"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-MQYVF6D63R');
        </script>

    <?php echo $__env->yieldPushContent('css'); ?>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=613330f9ad38cf0012acf12d&product=sop' async='async'></script

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
    <?php echo $__env->yieldContent('content'); ?>
    <!-- topBar end -->
    <?php echo $__env->make('layouts.frontend.mobile.parts.bottom_navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="space60"></div>
    <!-- JS here -->
    <script src="<?php echo e(asset('Frontend/mobile/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/mobile/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/mobile/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/mobile/js/owl.carousel.min.js')); ?>"></script>

    <script src="<?php echo e(asset('Frontend/mobile/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Frontend/mobile/js/template.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
    <script>
        $(document).ready(function () {
            $(".cardContentMobile.owl-carousel").owlCarousel({
                margin: 80,
                responsive: {
                    0: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    992: {
                        items: 5
                    }
                }
            });
            $("#single_slider.owl-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    992: {
                        items: 1
                    }
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\mobile\master.blade.php ENDPATH**/ ?>