<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('add_css')
</head>
<body>
    @include('layouts.components.header')

    @yield('content')

    @yield('add_js')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>