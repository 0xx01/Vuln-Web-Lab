<!doctype html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="{{  asset('assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{  asset('assets/css/styles.min.css') }}" />
</head>
<body>
  <!--  Body Wrapper -->
  @include('layouts.App.left_header')
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
     @include('layouts.App.left_header')
    <div class="body-wrapper">
        @include('layouts.App.header')

  @yield('content')
</div>
</div>
@include('layouts.App.footer')
</body>
  <script src="{{  asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{  asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{  asset('assets/js/app.min.js') }}"></script>
  <script src="{{  asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{  asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{  asset('assets/js/dashboard.js') }}"></script>
</html>
