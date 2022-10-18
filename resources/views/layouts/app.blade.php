<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta-description')">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link  rel="stylesheet" href="{{Vite::asset('resources/scss/app.scss')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="{{Vite::asset ('resources/js/app.js')}}"></script>
{{--        @vite('resources/js/app.js')--}}
    </head>
    <body>
        @yield('body')

    </body>

</html>


