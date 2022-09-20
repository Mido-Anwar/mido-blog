<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Product</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</head>

<body>
    <div id="header">
        <nav-bar> </nav-bar>
    </div>
    <section class=" container">
        <?php echo $__env->yieldContent('content'); ?>
    </section>

</body>

</html>
<?php /**PATH /var/www/html/resources/views/posts/layout.blade.php ENDPATH**/ ?>