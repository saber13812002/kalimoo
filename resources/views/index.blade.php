<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Title Page-->
    <title>{{ $title }}</title><!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="enamad" content="781521">
    <meta content="width=device-width" name="viewport">
    <meta content="{{ $description }}" name="description">
    <meta content="{{ $keywords }}" name="keywords">
    <meta content="Sarinweb" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"><!-- Fontfaces CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet"><!-- Bootstrap CSS-->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"><!--js for slider-->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>--}}
    <!--for-popup--->
    <script src="jquery.min.js" type="text/javascript"></script>
    <script src="jquery.reveal.js" type="text/javascript"></script>


    <!-- Main CSS-->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/slideshow.css" rel="stylesheet" type="text/css">
    <link href="/css/search-box-header.css" rel="stylesheet" type="text/css">
    <link href="/css/megamenu.css" rel="stylesheet" type="text/css">
    <link href="/css/images-hover-off.css" rel="stylesheet" type="text/css">
    <link href="/css/menu-responsive/toggle.css" rel="stylesheet" type="text/css">
    <link href="/css/login-register/login.css" rel="stylesheet" type="text/css">
    <link href="/css/login-register/register.css" rel="stylesheet" type="text/css">
    <script src='https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.js'></script>
    <link href='https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.css' rel='stylesheet' />
</head>
    <body>
        <div id="app">
            <index></index>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/react/0.13.0/react.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!--all-bootstrap-->
        <script src="/js/bootstrap/bootstrap.js"></script>
        <script src="/js/bootstrap/bootstrap.min.js"></script>
        <!--slider-top-->
        <script src="/js/slider.js"></script>
        <!--mega-menu-->
        <script src="/js/mega-menu.js"></script>
        {{--login-regisater--}}
        <script src='/js/login-register/login.js'></script>
        <script src='/js/slideshow.js'></script>
    </body>
</html>
