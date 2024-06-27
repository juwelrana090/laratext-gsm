<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @yield('custom_head')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
    @include('includes.header')

    @if (session()->has('success'))
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
    @endif

    @if (session()->has('error'))
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
    @endif


    @yield('content')
    @include('includes.footer')

    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

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
    @yield('custom_script')

</body>

</html>
