<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create</a>
        <a href="<?php echo e(route('trash')); ?>" class="btn btn-danger">Trash</a>

    </div>
    <div class="container">
        <h1>Posts</h1>
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
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <th scope="row"><?php echo e($item->id); ?></th>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->content); ?> </td>
                        <td> <img src="<?php echo e($item->image); ?>" alt=""> </td>

                        <td>

                            <div class="form-group ">

                                <a href="<?php echo e(route('posts.show',$item->slug)); ?>"class="btn btn-success">Show</a>

                                <a href="<?php echo e(route('posts.edit',$item->id)); ?>"class="btn btn-primary">
                                    Edit</a>

                                <a href=""class="btn btn-warning">
                                    soft delete</a>
                                

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

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posts/index.blade.php ENDPATH**/ ?>