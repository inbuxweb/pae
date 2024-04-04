  <head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'PAE') }} - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="assets/image/favicon.ico"> --}}

     <!-- Plugin css -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('assets/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css" />

    @livewireStyles
    @toastScripts

    {{-- @toastScripts --}}
</head>