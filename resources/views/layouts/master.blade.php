<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

<link href="{{asset('vendor-dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="{{asset('css-dashboard/simple-sidebar.css')}}" rel="stylesheet">

    <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>    
<script src="{{asset('vendor-dashboard/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor-dashboard/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.dashboard');
    {{-- @yield('content') --}}

</body>
</html>