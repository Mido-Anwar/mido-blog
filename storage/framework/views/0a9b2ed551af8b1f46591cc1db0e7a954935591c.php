<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Home</a>
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
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->title); ?></td>
                        <td> <?php echo e($post->content); ?></td>
                        <td></td>

                        <td>

                            <div class="form-group flex">

                                <a href="<?php echo e(route('posts.restore', $post->id)); ?>" class="btn btn-success">Restore
                                </a>


                                <a href="<?php echo e(route('posts.harddelete', $post->id)); ?>" class="btn btn-danger">
                                    DELETE
                                </a>

                            </div>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
   
        <div id="app">


            <example-component> </example-component>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posts/trash.blade.php ENDPATH**/ ?>