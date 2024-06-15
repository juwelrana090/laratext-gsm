<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('custom_head'); ?>

</head>

<body>
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

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