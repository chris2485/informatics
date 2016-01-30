<!doctype html>
<html lang="en" style="min-height: 100%;">
<head>

    <link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('js/jquery-1.11.1.min.js') !!}" >
    <link rel="stylesheet" href="css/style.css"/>

    <script src="{!! asset('bootstrap/js/bootstrap.js') !!}"></script>
    <script src="{!! asset('bootstrap/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('bootstrap/js/jquery-1.11.3.js') !!}"></script>
    <script src="{!! asset('bootstrap/js/jquery-1.11.3.min.js') !!}"></script>
    <script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>

    <link href="files/info_logo.png" rel="shortcut icon" />
    <link href="files/main.css" rel="stylesheet" type="text/css" />
    <script src="files/jquery-2.1.4.min.js" type="text/javascript"></script>

    <title>@yield('title')</title>
    @yield('cssscripts')
</head>

<body>

    <div>
        @yield('header')
    </div>

    <div>
        @yield('content')
    </div>

    <div>
        @yield('footer')
    </div>


    @yield('jscripts')

</body>

</html>