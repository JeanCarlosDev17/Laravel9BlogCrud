<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{$metaDescription}}"/>

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <x-layouts.prueba.header></x-layouts.prueba.header>
        {{$body}}
        {{$slot}}
        <br>
        {{$variable .  ' concatenar variable'}}
        <br>
        {{$variable}}
        {{  "concatenar variable"}}
    </body>

</html>
