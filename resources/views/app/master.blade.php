<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat Laravel Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard, admin, dashboard template, admin template, laravel, php laravel, laravel bootstrap, laravel admin template, bootstrap laravel, bootstrap in laravel, laravel dashboard template, laravel admin, laravel dashboard, laravel blade template, php admin">

    @include('app.head')

</head>

    <body class="app sidebar-mini">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
         <div class="page">
            <div class="page-main">

                @include('app.app-sidebar')

                @include('app.mobile-header')

                <div class="app-content">
                    <div class="side-app">

                        <div class="page-header">
                        @yield('page-header')
                        @include('app.notification')
                        </div>

                        @yield('content')

            @include('app.sidebar')

            @include('app.footer')

        </div>

            @include('app.footer-scripts')

                    <!--Includes Extras-Js-->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="/extras/js/axios.min.js"></script>
                    <script src="/extras/js/bootstrap.min.js"></script>
                    <script src="/extras/js/bootstrap-fileinput.js"></script>
                    <script src="/extras/js/datatables.min.js"></script>
                    <script src="/extras/js/functions.js"></script>
                    <script src="/extras/js/jquery.classyqr.js"></script>
    </body>
</html>
