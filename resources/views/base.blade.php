<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/app.css')}}">
    </head>
    <body>
        {{-- Bar de navigation --}}
        @include('nav/nav')
        {{-- Nos contenus seront affiché ici --}}
        @yield('content')
        {{-- footer --}}
        @include('footer/footer')
    </body>
</html>
