<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')

</head>

<body>

    <div id="header">
        <nav-bar> </nav-bar>
    </div>

    <div id="app">

    </div>
</body>

</html>
