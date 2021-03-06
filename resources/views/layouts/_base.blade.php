<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CMS UI</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://kit.fontawesome.com/c95b712392.js" crossorigin="anonymous"></script>
    </head>

    <body>
        @yield('structure')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
