<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/global/img/asset/mannuurulhudaa_logo.png') }}">
    <title>MANuurulHudaa | @yield('title')</title>
    @include('layouts.stylesheet')
</head>
<body>
    @yield('content')
</body>
</html>
