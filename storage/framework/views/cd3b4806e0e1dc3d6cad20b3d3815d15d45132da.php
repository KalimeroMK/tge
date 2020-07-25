<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.tag')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.source')); ?></a> -> <a
                                href="<?php echo e(route('tags.index')); ?>"><?php echo e(trans('messages.tag')); ?></a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php echo e(Form::model('tag', ['route' => ['tags.store'], 'method' => 'POST', 'files'=>true])); ?>

                        <?php echo csrf_field(); ?>

                        <?php echo $__env->make('admin.tags.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/tags/create.blade.php ENDPATH**/ ?>