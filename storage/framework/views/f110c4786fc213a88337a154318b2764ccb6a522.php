<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

    <!-- section start -->
    <!-- ================ -->
    <section class="clearfix pv-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-container row grid-space-10">
                        <?php $__currentLoopData = array_chunk($categories->all(), 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 col-sm-6 isotope-item <?php echo e($category->slug); ?>">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <div class="img-container">
                                                    <img src="/assets/img/categories/medium/<?php echo e($category->image); ?>"
                                                         alt="<?php echo e($category->name); ?>">
                                                </div>
                                                <div class="overlay-top">
                                                    <div class="text">
                                                        <h3>
                                                            <a href="/categories/<?php echo e($category->slug); ?>"><?php echo $category->name; ?></a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-bottom">
                                                    <p class="small"><?php echo e($category->name); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
    </section>
    <!-- section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/allcategories.blade.php ENDPATH**/ ?>