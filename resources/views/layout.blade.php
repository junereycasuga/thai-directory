<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thai Directory</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Thai Directory</a>
            </div>
        </nav>
        <br>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
