<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Sarinweb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Page-->
    <title></title>


    <!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" type="text/css">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/admin-user/style-dashboard.css">
    <link href="/css/search-box-header.css" rel="stylesheet" type="text/css">
    <link href="/css/megamenu.css" rel="stylesheet" type="text/css">
    <link href="/css/menu-responsive/toggle.css" rel="stylesheet" type="text/css">
    <link href="/css/login-register/login.css" rel="stylesheet" type="text/css">
    <link href="/css/login-register/register.css" rel="stylesheet" type="text/css">
    <link href="/css/images-hover-off.css" rel="stylesheet" type="text/css">

        <!-- Loading Flat UI -->
    <link href="/css/flat-ui/flat-ui.css" rel="stylesheet">

    <!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--date-base-data-->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
</head>

<body>
<div id="app">
    <panel></panel>
</div>

<script src="{{asset('js/app.js')}}"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Bootstrap 4 requires Popper.js -->
<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script src="/js/bootstrap/bootstrap.js"></script>


<!--select2-->
<script src="/js/flat-ui/flat-ui.js"></script>
<script src="/js/application.js"></script>

<!--------toggle----------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script  src="/js/admin-user/toggle.js"></script>
<!--------------chart------------->
<script src='https://code.jquery.com/jquery-1.11.2.min.js'></script>
<script  src="/js/admin-user/chart.js"></script>
<!----------megamenu---------->
<script src="/js/mega-menu.js"></script>

{{--login register--}}
<script src='/js/login-register/login.js'></script>
{{--<script src='/js/login-register/register.js'></script>--}}
</body>

</html>