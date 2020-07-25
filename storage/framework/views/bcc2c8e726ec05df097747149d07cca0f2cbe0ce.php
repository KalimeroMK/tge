<title><?php echo e($tekstovi->title); ?></title>
<!-- Schema.org markup for Google+ -->
<meta name="description" content="Официјален веб портал на  Македонска правлславна црква Европска епархија"/>
<meta name="keywords"
      content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica"/>
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="http://tge.mk/humans.txt"/>
<meta itemprop="name" content="<?php echo e($tekstovi->title); ?>">
<meta itemprop="description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($tekstovi->description), 300, '...'); ?>">
<meta itemprop="image" content="http://tge.mk/assets/img/products/medium/<?php echo e($tekstovi->image); ?>">
<!-- Twitter Card data -->
<meta name="twitter:card" content="http://tge.mk/assets/img/products/medium/<?php echo e($tekstovi->image); ?>">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="<?php echo e($tekstovi->title); ?>">
<meta name="twitter:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($tekstovi->description), 300, '...'); ?>">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="http://tge.mk/assets/img/products/medium/<?php echo e($tekstovi->image); ?>">
<!-- Open Graph data -->
<meta property="fb:app_id" content="1192823797520220"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://tge.mk//product/<?php echo e($tekstovi->slug); ?>"/>
<meta property="og:title" content="<?php echo e($tekstovi->title); ?>"/>
<meta property="og:image" content="http://tge.mk/assets/img/products/medium/<?php echo e($tekstovi->image); ?>"/>
<meta property="og:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($tekstovi->description), 300, '...'); ?>"/>
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

                            <div class="gellarypostCont">
                                <h2 class="blogtitle gellary">
                                    <a href="#"><?php echo e($tekstovi->title); ?></a>
                                </h2>
                                <p> <?php echo $tekstovi->description; ?></p>

                            </div>
                            <div class="blogMeta gfullwidth">
                                <a href="#"><i class="fa fa-user"></i><?php echo e($tekstovi->user->name); ?></a>
                                <a href="#"> <i class="fa fa-clock-o"></i><?php echo e($tekstovi->created_at); ?></a>
                                <div class="social-icons-article pull-right">
                                    <a href="https://www.facebook.com/dialog/share?app_id=1729023417211801&display=page&href=<?php echo e(URL::current()); ?>&redirect_uri=<?php echo e(URL::current()); ?>"
                                       class="social-icon social-icon-border social-facebook" title="Facebook"
                                       data-toggle="tooltip" data-placement="bottom"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo e(URL::current()); ?>&text=<?php echo e($tekstovi->title); ?>"
                                       class="social-icon social-icon-border social-facebook" title="Twitter"
                                       data-toggle="tooltip" data-placement="bottom"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?url=<?php echo e(URL::current()); ?>&title=<?php echo e($tekstovi->title); ?>"
                                       class="social-icon social-icon-border social-facebook" title="Linkedin"
                                       data-toggle="tooltip" data-placement="bottom"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://reddit.com/submit?url=<?php echo e(URL::current()); ?>&title=<?php echo e($tekstovi->title); ?>"
                                       class="social-icon social-icon-border social-facebook" title="Reddit"
                                       data-toggle="tooltip" data-placement="bottom"><i class="fa fa-reddit-alien"></i></a>
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
            </div>
        </div>

    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/tekstovi.blade.php ENDPATH**/ ?>