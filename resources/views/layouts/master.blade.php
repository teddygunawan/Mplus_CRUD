<html>
<head>
    <title>@yield('title')</title>
    @yield('css-file')

    <!-- CSS dependencies file import -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDIOXj_wFlGCTklyX6O_BRW5IdL-pRj5hIdbvp-FjPaLAW5K052g&s">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

@include('layouts.header')

<body id="content">
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Javascript dependencies file import -->
    <script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/mdb.min.js')}}"></script>
    <script src="{{URL::asset('js/sweetalert2.min.js')}}"></script>

    @yield('js-file')
</body>
</html>