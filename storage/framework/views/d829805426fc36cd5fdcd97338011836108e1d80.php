<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <title>Document</title>
</head>

<body>
    <div id="header">
        <nav-bar></nav-bar>
    </div>
    <div id="app">
        <example-component> </example-component>
    </div>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/about.blade.php ENDPATH**/ ?>