<!DOCTYPE html>
<html>
<head>
    <!-- Title Page-->
    <title>{{ $title ?? '' }}</title>

    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta content="" name="description">
    <meta content="{{  $keywords ?? ''  }}" name="keywords">
    <meta content="Sarinweb" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"><!-- Fontfaces CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet"><!-- Bootstrap CSS-->
    <link href="{{asset('css/bootstrap/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/select.css">
    <!--js for slider-->
    {{--<link href=" {{ asset('css/app.css') }}" rel="stylesheet">--}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--for-popup--->
    {{--<script src="jquery.min.js" type="text/javascript"></script>--}}
    {{--<script src="jquery.reveal.js" type="text/javascript"></script>--}}


    <!-- Main CSS-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/slideshow.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/search-box-header.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/images-hover-off.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/menu-responsive/toggle.css')}}" rel="stylesheet" type="text/css">
    <link href="/css/login-register/login.css" rel="stylesheet" type="text/css">
    <link href="/css/login-register/register.css" rel="stylesheet" type="text/css">
    <script src='https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.js'></script>
    <link href='https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.css' rel='stylesheet' />


        </head>
        <body>
        <div id="app">
            <app></app>
        </div>


<script src="/js/faq.js">
        </script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/react/0.13.0/react.min.js'>
        </script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
        </script>
        <!--all-bootstrap-->
        <script src="{{asset('js/bootstrap/bootstrap.js')}}">
        </script>
        <!--slider-top-->
        <script src="{{asset('js/slider.js')}}">
        </script>
        <!--mega-menu-->
        <script src="{{asset('js/mega-menu.js')}}">
        </script>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
        <script type="text/javascript" src="js/select-option.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/react/0.13.0/react.min.js'>
        </script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
        </script>

        <!--slider-brand-->
        <script src="/js/slider-brand.js">
        </script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src='https://malsup.github.io/min/jquery.cycle2.min.js'></script>
        <script src='https://malsup.github.io/min/jquery.cycle2.carousel.min.js'></script>
        <script src='/js/login-register/login.js'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>