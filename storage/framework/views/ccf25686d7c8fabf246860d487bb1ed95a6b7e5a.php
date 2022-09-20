<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Back</a>
    </div>
    <div class="container">
        <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Post Title</label>
                    <input type="text" class="form-control" id="inputEmail4" value="<?php echo e($post->title); ?>"
                        name="title">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">image</label>

                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">detailes</label>
                <textarea type="" class="form-control" id="inputAddress" placeholder="" name="content">
                    <?php echo e($post->content); ?>

        </textarea>
            </div>
            <img src="<?php echo e($post->image); ?>" alt="" >

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posts/edit.blade.php ENDPATH**/ ?>