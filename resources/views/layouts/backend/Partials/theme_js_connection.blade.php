    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('Backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    @stack('page_js')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('Backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('Backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('Backend/app-assets/js/scripts/components.js')}}"></script>
    @stack('theme_js')
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @toastr_js
    @toastr_render
    @stack('custom_js')
    <!-- END: Page JS-->
   
