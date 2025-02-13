<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">


<!-- Mirrored from mannatthemes.com/rizz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 03:15:31 GMT -->
<head>


    <meta charset="utf-8" />
            <title>Rizz | Rizz - Admin & Dashboard Template</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">



    <link rel="stylesheet" href="{{asset('assets')}}/libs/jsvectormap/css/jsvectormap.min.css">

     <!-- App css -->
     <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets')}}/css/app.min.css" rel="stylesheet" type="text/css" />
     @yield('css')

</head>

<body>

    <!-- Top Bar Start -->
   @include('layout.backend.header')
    <!-- Top Bar End -->

    <!-- leftbar-tab-menu -->
    @include('layout/backend/sidebar')
    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">

        <!-- Page Content-->
        @yield('pageContent')
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="{{asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/libs/simplebar/simplebar.min.js"></script>

    <script src="{{asset('assets')}}/libs/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('assets')}}/data/stock-prices.js"></script>
    <script src="{{asset('assets')}}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{asset('assets')}}/libs/jsvectormap/maps/world.js"></script>
    <script src="{{asset('assets')}}/js/pages/index.init.js"></script>
    <script src="{{asset('assets')}}/js/app.js"></script>
    @yield('script')
</body>
<!--end body-->


<!-- Mirrored from mannatthemes.com/rizz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 03:16:08 GMT -->
</html>
