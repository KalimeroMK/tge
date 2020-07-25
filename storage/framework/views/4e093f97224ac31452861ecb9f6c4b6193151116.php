

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.tag')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.home')); ?></a> -> <a
                                href="<?php echo e(route('tags.index')); ?>"><?php echo e(trans('messages.tag')); ?></a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th><?php echo e(trans('messages.id')); ?></th>
                                <th><?php echo e(trans('messages.title')); ?></th>
                                <th><?php echo e(trans('messages.slug')); ?></th>
                                <th><?php echo e(trans('messages.view')); ?></th>
                                <th><?php echo e(trans('messages.posts_count')); ?></th>
                                <th><?php echo e(trans('messages.delete')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <div class="fixed-plugin">
                                <div class="dropdown show-dropdown">
                                    <a href="<?php echo e(route('tags.create')); ?>">
                                        <i class="fa fa-cog fa-2x"> </i>
                                    </a>
                                </div>
                            </div>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($t->id); ?> </td>
                                    <td> <?php echo e($t->title); ?> </td>
                                    <td> <?php echo e($t->slug); ?> </td>
                                    <td> <?php echo e($t->views); ?> </td>
                                    <td> <?php echo e($t->post_count); ?> </td>
                                    <td>   <?php echo e(Form::model('tag',['route' => ['tags.destroy', $t], 'method' => 'DELETE'])); ?>

                                        <?php echo csrf_field(); ?>


                                        <button type="submit" data-toggle="modal"
                                                data-target="#confirm-delete"
                                                class="btn btn-danger btn-sm"><?php echo e(trans('messages.delete')); ?></button>

                                        <?php echo e(Form::close()); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($tags->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/tags/index.blade.php ENDPATH**/ ?>