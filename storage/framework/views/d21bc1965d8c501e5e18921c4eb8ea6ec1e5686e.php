<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</head>

<body>

    <div id="header">
        <nav-bar></nav-bar>
    </div>

    <div id="app">
        <example-component></example-component>
    </div>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>