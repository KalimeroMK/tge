
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
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th><?php echo e(trans('messages.id')); ?></th>
                                <th><?php echo e(trans('messages.code')); ?></th>
                                <th><?php echo e(trans('messages.position')); ?></th>
                                <th><?php echo e(trans('messages.edit')); ?></th>
                                <th><?php echo e(trans('messages.delete')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <div class="fixed-plugin">
                                <div class="dropdown show-dropdown">
                                    <a href="<?php echo e(route('ads.create')); ?>">
                                        <i class="fa fa-cog fa-2x"> </i>
                                    </a>
                                </div>
                            </div>
                            <?php $__currentLoopData = $ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($ads->id); ?> </td>
                                    <td> <?php echo e($ads->code); ?> </td>

                                    <?php if($ads->position == config('constants.TYPE_INDEX_HEADER')): ?>
                                        <td> <?php echo e(trans('messages.index_page_header')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_INDEX_FOOTER')): ?>
                                        <td> <?php echo e(trans('messages.index_page_footer')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_SIDEBAR')): ?>
                                        <td> <?php echo e(trans('messages.sidebar')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_ABOVE_POST')): ?>
                                        <td> <?php echo e(trans('messages.above_each_post')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BELOW_POST')): ?>
                                        <td> <?php echo e(trans('messages.below_each_post')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BETWEEN_CATEGORY_INDEX')): ?>
                                        <td> <?php echo e(trans('messages.between_category_pages')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BETWEEN_AUTHOR_INDEX')): ?>
                                        <td> <?php echo e(trans('messages.between_author_pages')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BETWEEN_TAG_INDEX')): ?>
                                        <td> <?php echo e(trans('messages.between_tag_pages')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BETWEEN_SEARCH_INDEX')): ?>
                                        <td> <?php echo e(trans('messages.between_search_pages')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_ABOVE_PAGE')): ?>
                                        <td> <?php echo e(trans('messages.above_each_page')); ?> </td>
                                    <?php endif; ?>

                                    <?php if($ads->position == config('constants.TYPE_BELOW_PAGE')): ?>
                                        <td> <?php echo e(trans('messages.below_each_page')); ?> </td>
                                    <?php endif; ?>

                                    <td><a href="<?php echo e(route('ads.edit', $ads)); ?>"
                                           class="btn btn-warning btn-sm"><?php echo e(trans('messages.edit')); ?></a>
                                    </td>
                                    <td><a data-href="<?php echo e(route('ads.destroy', $ads)); ?>" data-toggle="modal"
                                           data-target="#confirm-delete"
                                           class="btn btn-danger btn-sm"><?php echo e(trans('messages.delete')); ?></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/ads/index.blade.php ENDPATH**/ ?>