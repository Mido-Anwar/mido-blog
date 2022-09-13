<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>users profile id is <?php echo e($id); ?></h1>
<?php $__currentLoopData = $myarray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2> user <?php echo e($item->name); ?></h2>
    <h2> user <?php echo e($item->email); ?></h2>
    <h2> user <?php echo e($item->password); ?></h2>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/users/index.blade.php ENDPATH**/ ?>