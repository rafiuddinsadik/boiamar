<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminComponents/layouts/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminComponents/layouts/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminComponents/layouts/dist/css/adminlte.min.css/')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @section('navbar')
        @include('layouts.admin.components.navbar')
        @show
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @section('sidebar')
        @include('layouts.admin.components.sidebar')
        @show

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    @section('footer')
        @include('layouts.admin.components.footer')
        @show
</div>
<!-- ./wrapper -->
@stack('scripts')
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('adminComponents/layouts/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('adminComponents/layouts/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminComponents/layouts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminComponents/layouts/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('adminComponents/layouts/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('adminComponents/layouts/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('adminComponents/layouts/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminComponents/layouts/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('adminComponents/layouts/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminComponents/layouts/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('adminComponents/layouts/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
