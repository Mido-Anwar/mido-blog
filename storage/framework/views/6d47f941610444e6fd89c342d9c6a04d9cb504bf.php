<?php $__env->startSection('content'); ?>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($product->price); ?></h6>
      <p class="card-text"><?php echo e($product->product_info); ?></p>

    </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/products/show.blade.php ENDPATH**/ ?>