<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @stack('meta')
    <title>Best Cool | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('Frontend/desktop/img/logo/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Frontend/desktop/img/logo/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    @include('layouts.backend.Partials.theme_css_connection')


    @stack('head')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
        @include('layouts.backend.Partials.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
        @include('layouts.backend.Partials.left_sidebar')
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
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
        @include('layouts.backend.Partials.footer')
    <!-- END: Footer-->


    @include('layouts.backend.Partials.theme_js_connection')

</body>
<!-- END: Body-->

</html>
