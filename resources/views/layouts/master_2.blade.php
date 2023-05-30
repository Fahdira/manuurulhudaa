<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- csrf token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- desc --}}
        <meta name="description" content="Penerimaan Santri Baru Ponpes Nuurul Hudaa">
        <meta name="author" content="Muhammad Fahdira Kusumadinata">
        {{-- custom font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
        <link rel="icon" href="{{ url('/global/img/asset/mannuurulhudaa_logo.png') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>@yield('title')</title>
        {{-- custom css template --}}
        @include('layouts.stylesheet_template')
    </head>
    <body>

        @yield('content')
        @yield('script')

    </body>
</html>
