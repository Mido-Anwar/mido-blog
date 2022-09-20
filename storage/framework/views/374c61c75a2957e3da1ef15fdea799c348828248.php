<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Home</a>
    </div>
    <div class="container">
        <h1>Trash</h1>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Prodect Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($product->id); ?></th>
                        <td><?php echo e($product->product_name); ?></td>
                        <td> <?php echo e($product->price); ?></td>
                        <td><?php echo e($product->product_info); ?></td>

                        <td>

                            <div class="form-group flex">

                                <a href="<?php echo e(route('restore', $product->id)); ?>" class="btn btn-success">Restore
                                </a>


                                <a href="<?php echo e(route('harddelete', $product->id)); ?>" class="btn btn-danger">
                                    DELETE
                                </a>

                            </div>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $products->links(); ?>

        <div id="app">


            <example-component> </example-component>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/products/trash.blade.php ENDPATH**/ ?>