<?php if(Session::has('success_msg')): ?>
    <div class="alert alert-success">
        <strong><?php echo e(trans('messages.success')); ?>!</strong> <?php echo Session::get('success_msg'); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/layouts/notify.blade.php ENDPATH**/ ?>