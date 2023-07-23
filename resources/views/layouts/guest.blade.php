<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">

        <!-- Scripts -->
        <script src="{{asset('build/assets/js/jquery.min.js')}}" defer></script>
        <script src="{{asset('build/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>

    </head>
    <body class="h-100 gradient-form" style="background-color: #eee;">
        {{ $slot }}
    </body>
</html>
