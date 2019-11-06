<html>
<head>
    <title>@yield('title')</title>
    @yield('css-file')
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>

@include('layouts.header')

<body id="content">
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/mdb.min.js')}}"></script>

    @yield('js-file')
</body>
</html>