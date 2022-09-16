<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Back</a>
</div>
    <div class="container">
        <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="<?php echo e($product->product_name); ?>"
                        name="product_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Price</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="<?php echo e($product->price); ?>" name="price">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">detailes</label>
                <textarea type="" class="form-control" id="inputAddress" placeholder="" name="product_info">
                    <?php echo e($product->product_info); ?>

        </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/products/edit.blade.php ENDPATH**/ ?>