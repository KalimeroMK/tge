<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                 <?php $__currentLoopData = $eparhija; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eparhija): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="blogHlafWidth">
                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="singleBlog hlafWidth">
                            <div class="blogImg">
                             <img src="/assets/img/eparhija/medium/<?php echo e($eparhija->image); ?>" alt="<?php echo e($eparhija->title); ?>">                                </div>
                         </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="blogDec hlafWidthdec">
                            <h2 class="blogtitle">
                                <a href="/eparhija/<?php echo e($eparhija->slug); ?>"><?php echo $eparhija->title; ?></a>
                            </h2>
                            <p><?php echo \Illuminate\Support\Str::limit(strip_tags($eparhija->description),350, $end = '...' ); ?></p>
                            <div class="blogMeta">
                                <a href="#"><i class="fa fa-user"></i>TavillaThemes</a>
                                <a href="#"> <i class="fa fa-clock-o"></i>18 March 2016</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/alleparhija.blade.php ENDPATH**/ ?>