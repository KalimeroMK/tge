<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.manage_posts')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.settings')); ?></a> -> <a
                                href="<?php echo e(route('settings.index')); ?>"><?php echo e(trans('messages.settings')); ?></a></p>
                </div>
                <div class="card-body">

                    <?php echo e(Form::model('settings', ['route' => ['settings.store'], 'method' => 'POST', 'files'=>true])); ?>

                    <?php echo $__env->make('admin.settings.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/settings/create.blade.php ENDPATH**/ ?>