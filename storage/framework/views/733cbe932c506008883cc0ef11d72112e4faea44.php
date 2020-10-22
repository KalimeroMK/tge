<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="content" style="margin-top: 7%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "> <?php echo e(trans('messages.manage_posts')); ?></h4>
                    <p class="card-category"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.home')); ?></a><a
                                href="<?php echo e(route('posts.index')); ?>"><?php echo e(trans('messages.posts')); ?></a></p>
                </div>
                <?php echo e(Form::model('gallery', ['route' => ['gallery.store'], 'method' => 'POST', 'files'=>true])); ?>

                <?php echo csrf_field(); ?>

                <div class="input-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
                    <div class="input-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
                            <span class="input-group-btn">
                                <span class="btn btn-info shiny btn-file">
                                    Избери... <input type="file" multiple name="image[]">
                                </span>
                            </span>
                    </div>
                </div>
                <br/>
                <!-- Hidden inputs -->
                <input type="hidden" id="product_id" class="form-control" name="post_id"
                       value="<?php echo e($post->id); ?>">
                <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                            class="btn-label fa fa-plus"></i> Create
                </button>
                <?php echo Form::close(); ?>

                <div class="col-12">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(Form::model('gallery', ['route' => ['gallery.destroy' , $galleries], 'method' => 'POST', 'files'=>true])); ?>

                        <?php echo e(method_field('DELETE')); ?>


                        <img src="<?php echo e($galleries->galleryUrl); ?>" class="rounded col-3" style="margin: 2%">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <?php echo Form::close(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zoranbogoevski/PhpstormProjects/tge/resources/views/admin/gallery/addGallery.blade.php ENDPATH**/ ?>