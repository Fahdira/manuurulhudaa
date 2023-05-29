<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MANuurulHudaa | @yield('title')</title>
    @include('layouts.stylesheet')
</head>
<body>
    @yield('content')
</body>
</html>
