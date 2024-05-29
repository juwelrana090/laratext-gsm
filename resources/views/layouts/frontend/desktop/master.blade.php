<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('meta')
    <title>Best Cool Auto Spare Parts - UAE</title>
    <meta name="application-name" content="Best Cool Auto Spare Parts - UAE" >
    <meta name="description" content="Cool Source General Trading LLC Dubai, Established in 1997, a manufacturer and wholesaler specialized in Automotive Aftermarket Ac compressors. Best Cool Auto Spare Parts is our new venture located in Sharjah and Abu Dhabi. We are ready to serve customers from the Middle East and Africa to find high quality Auto Ac products.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/desktop/img/logo/logo.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/owl.carousel.min.css') }}">
    <!-- CSS here -->
    <meta name="google-site-verification" content="jg9KMDtdSiQwI0GzCG8g1sLDeIcPBg7XogOrK8mLrWM">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/responsive.css') }}">
    @toastr_css
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
    @stack('css')

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

    @include('layouts.frontend.desktop.parts.header')
    @yield('content')
    @include('layouts.frontend.desktop.parts.footer')

    <!-- JS here -->
    <script src="{{ asset('Frontend/desktop/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('Frontend/desktop/js/popper.min.js') }}"></script>
    <script src="{{ asset('Frontend/desktop/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Frontend/desktop/js/owl.carousel.min.js') }}"></script>
    @if (!MoBileView())
        <script src="{{ asset('Frontend/desktop/js/one-page-nav-min.js') }}"></script>
        <script src="{{ asset('Frontend/desktop/js/plugins.js') }}"></script>
        <script src="{{ asset('Frontend/desktop/js/main.js') }}"></script>
        {{-- <script>
            $('#search_input').keyup(function() {
                let typeInput = $('#search_input').val();
                $('.auto_completed_box').css('display', 'block')
                let url = '/search/model/brand/title/' + typeInput;
                $.ajax(url, {
                    success: function(data) {
                        console.log(data)
                        $('.ulList').empty();
                        let list = data;
                        var html = "";
                        if (list.length == 0) {
                            html += `<li>
                            No data found!
                        </li>`
                        } else {
                            for (var i = 0; i < list.length; i++) {
                                html += `<li>
                            <a href="/product/details/${data[i].id}/${data[i].slug}">${list[i].title}</a>

                        </li>`
                            }
                        }
                        $('.ulList').append(html);

                    }
                });
                if (typeInput === "") {
                    $('.auto_completed_box').css('display', 'none')
                }
            });
        </script> --}}
    @else
        <script src="{{ asset('Frontend/mobile/js/popper.min.js') }}"></script>
        <script src="{{ asset('Frontend/mobile/js/template.js') }}"></script>
    @endif
    @yield('js')
    @toastr_js
    @toastr_render
    <script src="{{ asset('js/share.js') }}"></script>

</body>

</html>
