<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel primi passi</title>
    
    </head>
    <body>


        <div>
            <a href="{{route('homepage')}}">Homepage</a>
            <a href="{{route('about-us')}}">About us</a>
            <a href="{{route('link')}}">Link a caso</a>
            <a href="{{route('banana')}}">Banana</a>
            <a href="">Non so più cosa scrivere</a>
        </div>

        <div> {{$name}}</div>
        <div> {{$cognome}}</div>

    </body>
</html>