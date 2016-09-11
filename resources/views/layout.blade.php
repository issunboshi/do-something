<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" media="screen" charset="utf-8">
        @yield('head')
    </head>
    <body>
        @yield('content')

        @yield('footer')
    </body>
</html>
