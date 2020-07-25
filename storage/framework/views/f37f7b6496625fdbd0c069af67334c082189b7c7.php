<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
            <li><a href="/">Категории</a></li>
            <li class="active"><?php echo e($category->name); ?></li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">


            <?php if($category->image): ?>
            <!-- banner start -->
            <!-- ================ -->
            <div class="pv-40 banner light-gray-bg">
                <div class="container clearfix">

                    <!-- slideshow start -->
                    <!-- ================ -->
                    <div class="slideshow">

                        <!-- slider revolution start -->
                        <!-- ================ -->
                        <div class="slider-banner-container">
                            <div class="slider-banner-boxedwidth-stopped">
                                <ul class="slides">
                                    <!-- slide 1 start -->
                                    <!-- ================ -->
                                    <li data-transition="slidehorizontal" data-slotamount="1"
                                    data-masterspeed="500" data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/categories/<?php echo e($category->image); ?>" alt="slidebg1"
                                    data-bgposition="center top" data-bgrepeat="no-repeat"
                                    data-bgfit="cover">



                                </li>
                                <!-- slide 1 end -->

                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- slide 1 start -->
                                <!-- ================ -->
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/sliders/<?php echo e($slider->image); ?>" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">


                                </li>
                                <!-- slide 1 end -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!-- slider revolution end -->

                </div>
                <!-- slideshow end -->

            </div>
        </div>
        <!-- banner end -->
        <?php endif; ?>

        <!-- main start -->
        <!-- ================ -->
        <div class="main col-md-12">

            <!-- page-title start -->
            <!-- ================ -->
            <h1 class="page-title"><?php echo e($category->name); ?></h1>
            <div class="separator-2"></div>
            <?php echo $category->description; ?>

            <!-- page-title end -->

            <?php $__currentLoopData = $category->getImmediateDescendants(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $descendant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- masonry grid item start -->
            <div class="masonry-grid-item col-sm-6 col-md-4">
                <!-- blogpost start -->
                <article class="blogpost shadow light-gray-bg bordered">
                    <?php if($descendant->image): ?>
                    <div class="overlay-container">
                        <img src="/assets/img/categories/<?php echo e($descendant->image); ?>" alt="">
                        <a class="overlay-link" href="/categories/<?php echo e($descendant->slug); ?>""><i
                            class="fa fa-link"></i></a>
                        </div>
                        <?php endif; ?>
                        <header>
                            <h2><a href="/categories/<?php echo e($descendant->slug); ?>"><?php echo e($descendant->name); ?></a></h2>

                        </header>
                        <div class="blogpost-content">
                            <p><?php echo strip_tags(str_limit($descendant->description,100,'...')); ?></p>
                        </div>
                        <footer class="clearfix">

                            <div class="link pull-right"><i class="icon-link"></i><a
                                href="/categories/<?php echo e($descendant->slug); ?>">Повеќе</a>
                            </div>
                        </footer>
                    </article>
                    <!-- blogpost end -->
                </div>
                <!-- masonry grid item end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- masonry grid start -->
                <!-- ================ -->
                <div class="masonry-grid row">

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- masonry grid item start -->
                    <div class="masonry-grid-item col-sm-6 col-md-4">
                        <!-- blogpost start -->
                        <article class="blogpost shadow light-gray-bg bordered">
                            <div class="overlay-container">
                                <img src="/assets/img/products/<?php echo e($product->image); ?>" alt="">
                                <a class="overlay-link" href="/product/<?php echo e($product->slug); ?>""><i
                                    class="fa fa-link"></i></a>
                                </div>
                                <header>
                                    <h2><a href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->title); ?></a></h2>

                                </header>
                                <div class="blogpost-content">
                                    <p><?php echo strip_tags(str_limit($product->description,100,'...')); ?></p>
                                </div>
                                <footer class="clearfix">

                                    <div class="link pull-right"><i class="icon-link"></i><a
                                        href="/product/<?php echo e($product->slug); ?>">Повеќе</a>
                                    </div>
                                </footer>
                            </article>
                            <!-- blogpost end -->
                        </div>
                        <!-- masonry grid item end -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <!-- main end -->

                    <!-- sidebar start -->
                    <!-- ================ -->
                    <aside class="col-md-2 col-lg-2 col-lg-offset-1">
                        <div class="sidebar">

                            <div class="col-md-12 block clearfix">

                                <a href="/assets/files/categories/<?php echo e($category->file); ?>" alt="<?php echo e($category->filename); ?>"
                                 target="_blank"><?php echo e($category->filename); ?></a>

                             </div>
                         </div>


                     </div>
                 </aside>
                 <!-- sidebar end -->
             </div>
         </div>
     </section>
     <!-- main-container end -->
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/categories.blade.php ENDPATH**/ ?>