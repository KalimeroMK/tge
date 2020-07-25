
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
                                <th><?php echo e(trans('messages.featured_image')); ?></th>
                                <th><?php echo e(trans('messages.title')); ?></th>
                                <th><?php echo e(trans('messages.gallery')); ?></th>
                                <th><?php echo e(trans('messages.category')); ?></th>
                                <th><?php echo e(trans('messages.source')); ?></th>
                                <th><?php echo e(trans('messages.views')); ?></th>
                                <th><?php echo e(trans('messages.published_on')); ?></th>
                                <th><?php echo e(trans('messages.status')); ?></th>
                                <th><?php echo e(trans('messages.edit')); ?></th>
                                <th><?php echo e(trans('messages.delete')); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <div class="fixed-plugin">
                                <div class="dropdown show-dropdown">
                                    <a href="<?php echo e(route('posts.create')); ?>">
                                        <i class="fa fa-cog fa-2x"> </i>
                                    </a>
                                </div>
                            </div>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($post->id); ?> </td>
                                    <td>
                                        <img src="<?php echo e($post->imageUrl); ?>" style="width:100px;"/>
                                    </td>
                                    <td><a href="/<?php echo e($post->slug); ?>" target="_blank"><?php echo e($post->title); ?></a></td>
                                    <td><span class="time"><a href="<?php echo e(route('addGallery', $post->id)); ?>"
                                                              class="btn btn-info"><?php echo e(trans('messages.image_gallery')); ?></a></span>
                                    </td>
                                    <td> <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($category->title); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>

                                    <?php if($post->type == config('constants.TYPE_SOURCE')): ?>
                                        <td><?php echo e(isset($post->source)?$post->source->channel_title:'NO SOURCE'); ?></td>
                                    <?php else: ?>
                                        <td> <?php echo e(trans('messages.manual')); ?> </td>
                                    <?php endif; ?>

                                    <td> <?php echo e($post->views); ?> </td>
                                    <td> <?php echo e($post->created_at); ?> </td>

                                    <?php if($post->status == config('constants.STATUS_PUBLISHED')): ?>
                                        <td>
                                            <label class="label label-success label-sm"><?php echo e(trans('messages.published')); ?></label>
                                        </td>
                                    <?php endif; ?>

                                    <?php if($post->status == config('constants.STATUS_HIDDEN')): ?>
                                        <td>
                                            <label class="label label-warning label-sm"><?php echo e(trans('messages.hidden')); ?></label>
                                        </td>
                                    <?php endif; ?>

                                    <td><a href="<?php echo e(route('posts.edit', $post)); ?>"
                                           class="btn btn-warning btn-sm"><?php echo e(trans('messages.edit')); ?></a>
                                    </td>
                                    <td>   <?php echo e(Form::model('post',['route' => ['posts.destroy', $post], 'method' => 'DELETE'])); ?>

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
                    </div>
                </div>
                <?php echo e($posts->links()); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>