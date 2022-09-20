<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Product</title>
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
</head>

<body>
    <div id="header">
        <nav-bar> </nav-bar>
    </div>
    <section class=" container">
        @yield('content')
    </section>

</body>

</html>
