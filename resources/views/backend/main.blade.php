

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/material/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 06:45:00 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Projects | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/assets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin-assets/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-assets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-assets/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin-assets/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


</head>
<body>
     

@include('backend.includes.topbar')
@include('backend.includes.sidebar')


    <!-- Begin page -->
    <div class="main-content">
 
<div class="page-content">

    @yield('content')
    
    </div>
</div>


@include('backend.includes.footer')



 <!-- JAVASCRIPT -->
 <script src="{{ asset('admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin-assets/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- projects js -->
    <script src="{{ asset('admin-assets/assets/js/pages/dashboard-projects.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('admin-assets/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 06:45:01 GMT -->
</html>