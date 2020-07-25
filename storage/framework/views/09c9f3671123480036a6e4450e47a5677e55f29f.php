

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.all_categories')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.home')); ?></a> -> <a
                                href="<?php echo e(route('categories.index')); ?>"><?php echo e(trans('messages.create_new_category')); ?></a></p>
                </div>
                <div class="card-body">
                    <div class="fixed-plugin">
                        <div class="dropdown show-dropdown">
                            <a href="<?php echo e(route('categories.create')); ?>">
                                <i class="fa fa-cog fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('categories.edit', $category['id'])); ?>"><?php echo e($category['title']); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>