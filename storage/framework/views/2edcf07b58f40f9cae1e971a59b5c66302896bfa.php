<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('products.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Product Name</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Product Name" name="product_name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Price</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Price" name="price">
      </div>
    </div>
    <div class="form-group col-md-6" >
      <label for="inputAddress">detailes</label>
      <textarea type="" class="form-control" id="inputAddress" placeholder="" name="product_info">
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/products/create.blade.php ENDPATH**/ ?>