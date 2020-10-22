<title><?php echo e($post->title); ?></title>
<!-- Schema.org markup for Google+ -->
<meta name="description" content="Официјален веб портал на  Македонска правлславна црква Европска епархија"/>
<meta name="keywords"
content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica"/>
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="http://tge.mk/humans.txt"/>
<meta itemprop="name" content="<?php echo e($post->title); ?>">
<meta itemprop="description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($post->description), 300, '...'); ?>">
<meta itemprop="image" content="https://tge.mk/assets/img/posts/medium/<?php echo e($post->image); ?>">
<!-- Twitter Card data -->
<meta name="twitter:card" content="https://tge.mk/assets/img/posts/medium/<?php echo e($post->image); ?>">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="<?php echo e($post->title); ?>">
<meta name="twitter:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($post->description), 300, '...'); ?>">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="https://tge.mk/assets/img/posts/medium/<?php echo e($post->image); ?>">
<!-- Open Graph data -->
<meta property="fb:app_id" content="1192823797520220"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://tge.mk//post/<?php echo e($post->slug); ?>"/>
<meta property="og:title" content="<?php echo e($post->title); ?>"/>
<meta property="og:image" content="https://tge.mk/assets/img/posts/medium/<?php echo e($post->image); ?>"/>
<meta property="og:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($post->description), 300, '...'); ?>"/>
<meta property="og:locale" content="en_US"/>
<meta name="author" content="Zoran Shefot Bogoevski">
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<!--Header End-->
<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider noMarginBottom">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>"
                                    <?php if($key == 0): ?> class="active" <?php else: ?> <?php endif; ?> ></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                        <img src="<?php echo e($sliders->galleryUrl); ?>" alt="image"
                                        class="img-responsive">
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="gellarypostCont">
                            <h2 class="blogtitle gellary">
                                <a href="#"><?php echo e($post->title); ?></a>
                            </h2>
                            <p> <?php echo $post->description; ?></p>
                        </div>
                        <div class="blogMeta gfullwidth">
                            <a href="#"><i class="fa fa-user"></i><?php echo e($post->user->name); ?></a>
                            <a href="#"> <i class="fa fa-clock-o"></i><?php echo e($post->created_at); ?></a>
                            <div class="social-icons-article pull-right">
                                <a href="https://www.facebook.com/dialog/share?app_id=1729023417211801&display=page&href=<?php echo e(URL::current()); ?>&redirect_uri=<?php echo e(URL::current()); ?>"
                                class="social-icon social-icon-border social-facebook" title="Facebook"
                                data-toggle="tooltip" data-placement="bottom"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo e(URL::current()); ?>&text=<?php echo e($post->title); ?>"
                                    class="social-icon social-icon-border social-facebook" title="Twitter"
                                    data-toggle="tooltip" data-placement="bottom"><i
                                    class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?url=<?php echo e(URL::current()); ?>&title=<?php echo e($post->title); ?>"
                                        class="social-icon social-icon-border social-facebook" title="Linkedin"
                                        data-toggle="tooltip" data-placement="bottom"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://reddit.com/submit?url=<?php echo e(URL::current()); ?>&title=<?php echo e($post->title); ?>"
                                            class="social-icon social-icon-border social-facebook" title="Reddit"
                                            data-toggle="tooltip" data-placement="bottom"><i
                                            class="fa fa-reddit-alien"></i></a>
                                            <a href="https://plus.google.com/share?url=<?php echo e(URL::current()); ?>"
                                            class="social-icon social-icon-border social-facebook" title="Google Plus"
                                            data-toggle="tooltip" data-placement="bottom"><i
                                            class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebarBlog">
                                <aside class="widget">
                                    <div class="fb-page" data-href="https://www.facebook.com/tgemk/" data-tabs="timeline"
                                    data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                    data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/tgemk/" class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/tgemk/">Тетовско - Гостиварска
                                    Епархија</a>
                                </blockquote>
                            </div>
                            <a class="twitter-timeline"
                            href="https://twitter.com/tgemk"
                            data-tweet-limit="4">
                        Tweets by tgemk</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zoranbogoevski/PhpstormProjects/tge/resources/views/main/article.blade.php ENDPATH**/ ?>