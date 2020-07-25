<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="widgetTitle">CATEGORY <span>/</span> LIFESTYLE</h3>
                    </div>
                </div>
                <div class="row">

                   <?php $__currentLoopData = $tekstovi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tekstovi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="blogHlafWidth">
                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="singleBlog hlafWidth">
                            <div class="blogImg">
                             <img src="/assets/img/tekstovi/medium/<?php echo e($tekstovi->image); ?>" alt="<?php echo e($tekstovi->title); ?>">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="blogDec hlafWidthdec">
                        <h2 class="blogtitle">
                            <a href="/tekstovi/<?php echo e($tekstovi->slug); ?>"><?php echo $tekstovi->title; ?></a>
                        </h2>
                        <p><?php echo \Illuminate\Support\Str::limit(strip_tags($tekstovi->description),350, $end = '...' ); ?></p>
                        <div class="blogMeta">
                            <a href="#"><i class="fa fa-user"></i><?php echo e($tekstovi->user->name); ?>s</a>
                            <a href="#"> <i class="fa fa-clock-o"></i><?php echo $tekstovi->created_at; ?></a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/alltekstovi.blade.php ENDPATH**/ ?>