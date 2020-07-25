

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.ads_section')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.home')); ?></a> -> <a
                                href="<?php echo e(route('ads.index')); ?>"><?php echo e(trans('messages.ads_section')); ?></a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php echo $__env->make('admin.ads.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/ads/edit.blade.php ENDPATH**/ ?>