
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    @include('auth.authLayouts.pages.styles')
     @yield('customcss')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('auth.authLayouts.pages.preloader')
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
            @include('auth.authLayouts.pages.navhead')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            navbar start
        ***********************************-->
        @include('auth.authLayouts.pages.navbar')
        <!--**********************************
            navbar end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('auth.authLayouts.pages.sidenav')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

           @include('auth.authLayouts.pages.breadcrums')
            <!-- row -->
            @yield('content')
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('auth.authLayouts.pages.footer')

        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('auth.authLayouts.pages.scripts')
    @yield('customscripts')
</body>

</html>
