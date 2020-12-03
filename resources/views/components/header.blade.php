<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Author -->
        <meta name="author" content="Creative Tim">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page_title') - {{ config('app.name', 'Elite') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Page Plugins -->
        <link rel="stylesheet" href="../assets/vendor/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="../assets/vendor/sweetalert2/dist/sweetalert2.min.css">



        <!-- Argon CSS -->
        <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">



        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" defer
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        
	<!-- <script>window.jQuery || document.write('<script src="../assets/vendor/jquery/dist/jquery.min.js" defer></script>');</script> -->
	<!-- <script>window.jQuery || document.write('<script src="../assets/vendor//popper.min.js" defer></script>')</script> -->
        
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="../assets/vendor/js-cookie/js.cookie.js" defer></script>
        <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js" defer></script>
        <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js" defer></script>
        <!-- Optional JS -->
        <script src="../assets/vendor/chart.js/dist/Chart.min.js" defer></script>
        <script src="../assets/vendor/chart.js/dist/Chart.extension.js" defer></script>
        <!-- Argon JS -->
        <script src="../assets/js/argon.js?v=1.2.0" defer></script>

    </head>
