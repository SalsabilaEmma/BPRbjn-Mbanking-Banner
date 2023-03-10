<!DOCTYPE html>
<html lang="en">

<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>MBanking - Banner</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/css/app.min.css">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/css/custom.css">

    <!-- Tambahan -->
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="{{ url('public/otika') }}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/bundles/summernote/summernote-bs4.css">
    <!--{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> --}}-->
    <link rel="stylesheet" href="{{ url('public/otika') }}/assets/bundles/chocolat/dist/css/chocolat.css">


    @section('css')
    @show
    @yield('css')
</head>
<!--{{--  oncontextmenu='return false;' onkeydown='return false;' --}}-->

<body>
    <div class="loader"></div>
    <div id="app">
        <!--{{-- <div class="main-wrapper main-wrapper-1"> --}}-->

            <!--{{-- @include('layout.header') --}}-->
            <!--{{-- @include('admin.layout.sidebar') --}}-->
            @yield('content')
            <!--{{-- @include('layout.footer') --}}-->

        <!--{{-- </div> --}}-->
    </div>
    <!-- General JS Scripts -->
    <script src="{{ url('public/otika') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ url('public/otika') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('public/otika') }}/assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="{{ url('public/otika') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ url('public/otika') }}/assets/js/custom.js"></script>

    <!-- Tambahan -->
    <!--{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}-->
    <!--{{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}-->
    <!--{{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}-->

    <!--{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"-->
    <!--    integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="-->
    <!--    crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"-->
    <!--    integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA=="-->
    <!--    crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!--<script src="{{ url('public/otika') }}/assets/js/lazy.js"></script> --}}-->

    <script src="{{ url('public/otika') }}/assets/bundles/datatables/datatables.min.js"></script>
    <script src="{{ url('public/otika') }}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="{{ url('public/otika') }}/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ url('public/otika') }}/assets/js/page/datatables.js"></script>
    <script src="{{ url('public/otika') }}/assets/bundles/summernote/summernote-bs4.js"></script>
    <!--{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}-->
    <script src="{{ url('public/otika') }}/assets/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <script src="{{ url('public/otika') }}/assets/js/page/gallery1.js"></script>


@show
@yield('js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
