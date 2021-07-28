<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CMS UI</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @yield('structure')
    </body>
</html>