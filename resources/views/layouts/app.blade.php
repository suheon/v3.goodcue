<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>@yield('title') | {{ config("app.name") }}</title>

        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
            name="viewport"
        />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta name="description" content="{{ config('app.description') }}" />
        <meta
            property="og:description"
            content="{{ config('app.description') }}"
        />
        <meta property="og:image" content="/img/logo.png" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta name="keywords" content="{{ config('app.description') }}" />
        <meta name="theme-color" content="#6e4ef7" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!--     Fonts and icons     -->
        <link
            rel="stylesheet"
            type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        />
        <link href="{{ mix('/css/all.css') }}" rel="stylesheet" />

        <link rel="canonical" href="http://{{ config('app.url') }}" />

        <!-- prettier-ignore -->
        @yield('page-css-style')
    </head>

    <body class="menu-on-left">
        
        @include('layouts.header')
        
        @yield('content')
        
        @include('layouts.footer')

        <!--   Core JS Files   -->
        <!-- <script src="/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="/js/core/popper.min.js" type="text/javascript"></script>
        <script
            src="/js/core/bootstrap-material-design.min.js"
            type="text/javascript"
        ></script> -->

        <!-- <script src="/js/plugins/moment.min.js"></script> -->
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <!-- <script
            src="/js/plugins/bootstrap-datetimepicker.js"
            type="text/javascript"
        ></script> -->
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <!-- <script
            src="/js/plugins/nouislider.min.js"
            type="text/javascript"
        ></script> -->
        <!--  Google Maps Plugin  -->
        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <!-- <script src="/js/plugins/bootstrap-tagsinput.js"></script> -->
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <!-- <script
            src="/js/plugins/bootstrap-selectpicker.js"
            type="text/javascript"
        ></script> -->
        <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <!-- <script
            src="/js/plugins/jasny-bootstrap.min.js"
            type="text/javascript"
        ></script> -->
        <!-- Place this tag in your head or just before your close body tag. -->
        <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->


        <!-- prettier-ignore -->
        @yield('page-js-script')
    </body>
</html>
