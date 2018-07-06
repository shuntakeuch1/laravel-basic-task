<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <script src="{{ asset('/js/app.js') }}"></script>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

            </nav>
            @yield('content')
        </div>
    </body>
</html>
