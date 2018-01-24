<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/portfolio-item.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    @yield('head')

</head>

<body>
<!-- Page Content -->
<div class="container">
    @yield('body')
</div>
<!-- /.container -->
{{--@include('partials.auth._footer')--}}

<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@yield('foot')

</body>

</html>

