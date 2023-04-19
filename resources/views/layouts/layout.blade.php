<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - GDC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('images/logo_health.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="{{asset('assets/css/font-style.css')}}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

    @livewireStyles
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/datatable/DataTable-3.2.1/css/jquery.dataTables.css')}}">
    {{--    @toastr_css--}}

    @yield('styles')

</head>

<body>

<!-- ======= Header ======= -->

@include('layouts.partials.header')

<!-- End Header -->

<!-- ======= Sidebar ======= -->

@include('layouts.partials.sidebar')

<!-- End Sidebar-->

@yield('content')

<!-- ======= Footer ======= -->

@include('layouts.partials.footer')

<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>

@livewireScripts


@yield('scripts')

{{--<script src="https://code.jquery.com/jquery-3.2.1.js"></script>--}}
<script src="{{asset('assets/datatable/DataTable-3.2.1/js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('assets/datatable/DataTables-1.12.1/js/jquery.dataTables.js')}}"></script>

<script src="{{asset('assets/js/select2.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>


{{--@toastr_js--}}

<script src="{{asset('assets/js/toastr.min.js')}}"></script>

@toastr_render

</body>

</html>
