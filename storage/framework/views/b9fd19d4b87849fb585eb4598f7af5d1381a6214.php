<?php $__env->startSection('content'); ?>
    <?php
        $genderarray = ['male', 'female'];
    ?>
    <div class="container">

        <?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger" role="alert">
         <?php echo e($item); ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('profile.update')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="exampleFormControlInput1"> Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    value="<?php echo e($user->name); ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> Address</label>
                <input type="text" name="province" class="form-control" id="exampleFormControlInput1"
                    value="<?php echo e($user->profile->province); ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="text" name="facebook" class="form-control" id="exampleFormControlInput1"
                    value=" <?php echo e($user->email); ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Gander select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gander">
                    <?php $__currentLoopData = $genderarray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item); ?>"<?php echo e(($user->profile->gander == $item) ? 'selected':''); ?> ><?php echo e($item); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bio textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio">
                    <?php echo $user->profile->bio; ?>

                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">password </label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> confirm password</label>
                <input type="password" name="c_password" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group"  style="margin: 15px;">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block" style="margin: 15px;">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/users/index.blade.php ENDPATH**/ ?>