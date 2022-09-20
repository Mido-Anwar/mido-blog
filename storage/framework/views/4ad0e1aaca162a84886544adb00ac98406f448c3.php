<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('posts.store')); ?>" method="POST" style="margin: 20px;"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Post
                        title
                    </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="title" name="title">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="formFile" class="form-label">images upload</label>
                    <input class="form-control" type="file" id="formFile" enctype="multipart/form-data" name="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">detailes</label>
                    <textarea type="" class="form-control" id="inputAddress" placeholder="" name="content" cols="5">
        </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posts/create.blade.php ENDPATH**/ ?>