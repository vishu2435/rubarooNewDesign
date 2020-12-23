<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Indie+Flower&display=swap"
        rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/slide-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('preScript')
</head>

<body>
        @yield('header')
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{asset('js/global.js')}}"></script>

        @yield('script')

        <script src="https://kit.fontawesome.com/2d4db13fbc.js" crossorigin="anonymous"></script>

</body>

</html>
