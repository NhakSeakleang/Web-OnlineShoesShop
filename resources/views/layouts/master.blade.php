<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{@asset('mdb-pro/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{@asset('mdb-pro/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{@asset('mdb-pro/css/style.css')}}" rel="stylesheet">

    @yield('stylesheet')
</head>

<body class="fixed-sn white-skin" data-gr-c-s-loaded="true">

<!-- Start your project here-->
@yield('main-content')
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{@asset('mdb-pro/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{@asset('mdb-pro/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{@asset('mdb-pro/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{@asset('mdb-pro/js/mdb.min.js')}}"></script>

@yield('javascript')
</body>

</html>
