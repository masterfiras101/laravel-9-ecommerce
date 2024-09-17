<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta thhp-equiv="X-UA-compactible" content="IE=edge,chrome=1 , sharink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />


    @livewireStyles
</head>
<body>

   <div class="container-scroller">
        @include('layouts.inc.navbar')

   <div class="container-fluid page-body-wrapper">
        @include('layouts.inc.sidebar')


    <div class="main-panel">
        <div class="content-wrapper">
                @yield('content')
        </div>

    </div>


    </div>

</div>


                    <!-- End custom js for this page-->


    @yield('scripts')

    @livewireScripts
    @stack('script')
</body>
</html>
