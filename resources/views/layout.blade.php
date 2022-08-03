<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta description="{{ setting('site.description') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ setting('site.title') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    </head>
    <body>
        <x-navbar />
        @yield('content')
        <x-footer />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>