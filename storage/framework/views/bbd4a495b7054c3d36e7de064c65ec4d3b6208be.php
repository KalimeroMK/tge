
<?php $__env->startSection('content'); ?>
    <div class="content" style="margin-top: 7%">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.manage_posts')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.home')); ?></a> -> <a
                                href="<?php echo e(route('posts.index')); ?>"><?php echo e(trans('messages.posts')); ?></a></p>
                </div>
                <div class="container">
                    <div class="row">
                        <?php echo e(Form::model('$post', ['route' => ['posts.store'], 'method' => 'POST','id'=>'form-username','class'=>'form-horizontal form-bordered', 'files'=>true])); ?>

                        <?php echo $__env->make('admin.posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zoranbogoevski/PhpstormProjects/tge/resources/views/admin/posts/create.blade.php ENDPATH**/ ?>