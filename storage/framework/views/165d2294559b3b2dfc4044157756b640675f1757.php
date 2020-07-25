<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- main-container start -->
    <!--Header End-->
    <section class="mainContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="slider">
                                <div class="singleSlide">
                                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($index < 1): ?>
                                            <img src="<?php echo e($posts->imageUrl); ?>" class="articleImage"
                                                 alt="<?php echo e($posts->title); ?>">
                                            <div class="silderCont">
                                                <a href="<?php echo e(route('articleDetails',$posts->slug)); ?>"><h1><?php echo e($posts->title); ?></h1>
                                                </a>
                                                <div class="metaCont">
                                                    <a href="#"><i class="fa fa-user"></i><?php echo e($posts->user->name); ?></a>
                                                    <a href="#"> <i
                                                                class="fa fa-clock-o"></i><?php echo $posts->created_at; ?>

                                                    </a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($index >= 1 && $index < 5 ): ?>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="singleBlog block">
                                        <div class="blogImg">

                                            <img src="<?php echo e($posts->imageUrl); ?>" class="articleImageSmall"
                                                 alt="<?php echo e($posts->title); ?>">
                                        </div>
                                        <div class="blogDec">
                                            <h2 class="blogtitle">

                                                <a href="<?php echo e(route('articleDetails',$posts->slug)); ?>"><?php echo e(\Illuminate\Support\Str::limit(strip_tags($posts->title),60, $end = '...' )); ?></a>
                                            </h2>
                                            <p><?php echo \Illuminate\Support\Str::limit(strip_tags($posts->description),120, $end = '...' ); ?></p>
                                            <div class="blogMeta">
                                                <a href="#"><i class="fa fa-user"></i><?php echo e($posts->user->name); ?></a>
                                                <a href="#"> <i class="fa fa-clock-o"></i><?php echo $posts->created_at; ?>6</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-sm-12">
                            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index > 4 && $index < 6 ): ?>
                                    <div class="singleBlog">
                                        <div class="blogImg">
                                            <img src="<?php echo e($posts->imageUrl); ?>" class="articleImage"
                                                 alt="<?php echo e($posts->title); ?>">
                                        </div>
                                        <div class="blogDec">
                                            <h2 class="blogtitle">
                                                <a href="<?php echo e(route('articleDetails',$posts->slug)); ?>"><?php echo e($posts->title); ?></a>
                                            </h2>
                                            <p><?php echo e(\Illuminate\Support\Str::limit(strip_tags($posts->description),450, $end = '...' )); ?></p>
                                            <div class="blogMeta">
                                                <a href="#"><i class="fa fa-user"></i><?php echo e($posts->user->name); ?></a>
                                                <a href="#"> <i class="fa fa-clock-o"></i><?php echo $posts->created_at; ?>6</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blogHlafWidth">
                            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index > 5 && $index < 9 ): ?>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="singleBlog hlafWidth">
                                            <div class="blogImg">
                                                <img src="<?php echo e($posts->imageUrl); ?>" class="articleImageSmall"
                                                     alt="<?php echo e($posts->title); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="blogDec hlafWidthdec">
                                            <h2 class="blogtitle">
                                                <a href="<?php echo e(route('articleDetails',$posts->slug)); ?>"><?php echo e($posts->title); ?></a>
                                            </h2>
                                            <p><?php echo e(\Illuminate\Support\Str::limit(strip_tags($posts->description),220, $end = '...' )); ?></p>
                                            <div class="blogMeta">
                                                <a href="#"><i class="fa fa-user"></i><?php echo e($posts->user->name); ?></a>
                                                <a href="#"> <i class="fa fa-clock-o"></i><?php echo $posts->created_at; ?>6</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="col-lg-3">
                        <div class="sidebarBlog">
                            <div class="sidebarBlog">
                                <aside class="widget">
                                    <div class="fb-page" data-href="https://www.facebook.com/tgemk/"
                                         data-tabs="timeline" data-small-header="false"
                                         data-adapt-container-width="true" data-hide-cover="false"
                                         data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/tgemk/"
                                                    class="fb-xfbml-parse-ignore"><a
                                                    href="https://www.facebook.com/tgemk/">Тетовско - Гостиварска
                                                Епархија</a></blockquote>
                                    </div>

                                    <a class="twitter-timeline"
                                       href="https://twitter.com/tgemk"
                                       data-tweet-limit="4">
                                        Tweets by tgemk</a>
                                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </aside>
                                </aside>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="paginations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php echo e($post->links()); ?>


                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/index.blade.php ENDPATH**/ ?>