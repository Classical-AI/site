<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link rel="stylesheet" href="@url('assets/css/bootstrap.min.css')">
    <link rel="stylesheet" href="@url('assets/css/bootstrap-rtl.min.css')">
    <link rel="stylesheet" href="@url('assets/css/style.css')">
</head>

<body>

<div class="container">
    @include('_includes.navigation')
    @yield('body')
</div>

@include('_includes.footer')

<script type="text/javascript" src="@url('assets/js/jquery-2.2.4.min.js')"></script>
<script type="text/javascript" src="@url('assets/js/bootstrap.min.js')"></script>

</body>
</html>