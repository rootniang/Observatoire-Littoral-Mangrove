<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login</title>

        <link rel="stylesheet" href="{{asset('build/assets/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/icofont/icofont.min.css')}}">

        <!-- Scripts -->
        <script src="{{asset('build/assets/js/app.js')}}" defer></script>
        <script src="{{asset('build/assets/js/script.js')}}" defer></script>
        <script src="{{asset('build/assets/js/jquery.min.js')}}" defer></script>
        <script src="{{asset('build/assets/js/bootstrap.min.js')}}" defer></script>

    </head>
    <body>
        {{ $slot }}
    </body>
    
</html>
