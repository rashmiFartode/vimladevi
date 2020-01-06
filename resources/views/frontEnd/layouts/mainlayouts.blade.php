<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('frontEnd.layouts.pages.styles')
    <!-- custom css -->
    @yield('customcss')
</head>
<body id="body">
    @include('frontEnd.layouts.pages.topbar')
    <!-- header-start -->
    <header  id="header">
        @include('frontEnd.layouts.pages.nav')
    </header>
    <!-- header-end -->

    
    <!-- about_area_start -->
    @yield('content-wrapper')
    <!-- about_area_end -->

    


    <!-- footer -->
    @include('frontEnd.layouts.pages.footer')
    <!-- footer -->


    @include('frontEnd.layouts.pages.footer-scripts')
    <!-- Scripts -->  

<script src="{{ asset('js/app.js') }}"></script>

@yield('customjs')
</body>
</html>