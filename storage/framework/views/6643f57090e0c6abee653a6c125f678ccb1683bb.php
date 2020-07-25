<title><?php echo e($eparhija->title); ?></title>
<!-- Schema.org markup for Google+ -->
<meta name="description" content="Официјален веб портал на  Македонска правлславна црква Европска епархија"/>
<meta name="keywords"
      content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica"/>
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="http://tge.mk/humans.txt"/>
<meta itemprop="name" content="<?php echo e($eparhija->title); ?>">
<meta itemprop="description" content="<?php echo str_limit(strip_tags($eparhija->description), 300, '...'); ?>">
<meta itemprop="image" content="http://tge.mk/assets/img/eparhija/medium/<?php echo e($eparhija->image); ?>">
<!-- Twitter Card data -->
<meta name="twitter:card" content="http://tge.mk/assets/img/eparhija/medium/<?php echo e($eparhija->image); ?>">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="<?php echo e($eparhija->title); ?>">
<meta name="twitter:description" content="<?php echo str_limit(strip_tags($eparhija->description), 300, '...'); ?>">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="http://tge.mk/assets/img/eparhija/medium/<?php echo e($eparhija->image); ?>">
<!-- Open Graph data -->
<meta property="fb:app_id" content="1192823797520220"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://tge.mk//eparhija/<?php echo e($eparhija->slug); ?>"/>
<meta property="og:title" content="<?php echo e($eparhija->title); ?>"/>
<meta property="og:image" content="http://tge.mk/assets/img/eparhija/medium/<?php echo e($eparhija->image); ?>"/>
<meta property="og:description" content="<?php echo str_limit(strip_tags($eparhija->description), 300, '...'); ?>"/>
<meta property="og:locale" content="en_US"/>
<meta name="author" content="Zoran Shefot Bogoevski">
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container padding-ver-clear">
        <div class="container pv-40">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">

                    <img src="/assets/img/eparhija/<?php echo e($eparhija->image); ?>"/>
                    <h1 class="title"><?php echo e($eparhija->title); ?></h1>
                    <div class="separator-2"></div>
                    <?php echo $eparhija->description; ?>

                </div>
                <div class="col-lg-4">
                    <div class="sidebarBlog">
                        <aside class="widget">
                            <div class="fb-page" data-href="https://www.facebook.com/tgemk/" data-tabs="timeline"
                                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                 data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/tgemk/" class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/tgemk/">Тетовско - Гостиварска Епархија</a>
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

                <!-- main end -->
            </div>

        </div>
    </section>
    <!-- main-container end -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/eparhija.blade.php ENDPATH**/ ?>