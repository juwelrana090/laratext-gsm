<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('custom_head'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(session()->has('success')): ?>
        <script>
            Toastify({
                text: '<?php echo session()->get('success'); ?>',
                className: 'info',
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: 'bottom',
                position: 'center',
                stopOnFocus: true,
                style: {
                    background: 'linear-gradient(to right, #f40608, #fb3738)',
                },
                onClick: function() {}
            }).showToast();
        </script>
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
        <script>
            Toastify({
                text: '<?php echo session()->get('error'); ?>',
                className: 'info',
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: 'bottom',
                position: 'center',
                stopOnFocus: true,
                style: {
                    background: 'linear-gradient(to right, var(--bs-pink), var(--bs-danger))',
                },
                onClick: function() {}
            }).showToast();
        </script>
    <?php endif; ?>


    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Include select2 Library Script -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Include vue3-form-wizard Script -->
    <script src="https://unpkg.com/vue3-form-wizard"></script>

    <!-- Include SweetAlert Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include vue-tel-input Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-tel-input/10.2.4/vue-tel-input.umd.min.js"></script>

    <!-- Include JQuery Script -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Include Summernote Script -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Include Select2 Script -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Custom JavaScript Libraries -->
    <?php echo $__env->yieldContent('custom_script'); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\app_gsp\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>