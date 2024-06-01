<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
@yield('title')

<!-- Custom Styles -->
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/icons/font/bootstrap-icons.min.css') }}" />


<!-- Include vue.js -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- Include vue3-form-wizard CSS -->
<link rel="stylesheet" href="https://unpkg.com/vue3-form-wizard/dist/style.css">
<!-- Include font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-- Include vue-tel-input CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vue-tel-input/10.2.4/vue-tel-input.css">
<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- Include Bootstrap Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
