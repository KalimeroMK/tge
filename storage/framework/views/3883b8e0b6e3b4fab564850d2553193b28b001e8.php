<title><?php echo e($ogledalo->title); ?></title>
<!-- Schema.org markup for Google+ -->
<meta name="description" content="Официјален веб портал на  Македонска правлславна црква Европска епархија"/>
<meta name="keywords"
content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica"/>
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="http://tge.mk/humans.txt"/>
<meta itemprop="name" content="<?php echo e($ogledalo->title); ?>">
<meta itemprop="description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($ogledalo->description), 300, '...'); ?>">
<meta itemprop="image" content="http://tge.mk/assets/img/ogledalo/medium/<?php echo e($ogledalo->image); ?>">
<!-- Twitter Card data -->
<meta name="twitter:card" content="http://tge.mk/assets/img/ogledalo/medium/<?php echo e($ogledalo->image); ?>">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="<?php echo e($ogledalo->title); ?>">
<meta name="twitter:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($ogledalo->description), 300, '...'); ?>">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="http://tge.mk/assets/img/ogledalo/medium/<?php echo e($ogledalo->image); ?>">
<!-- Open Graph data -->
<meta property="fb:app_id" content="1192823797520220"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://tge.mk//ogledalo/<?php echo e($ogledalo->slug); ?>"/>
<meta property="og:title" content="<?php echo e($ogledalo->title); ?>"/>
<meta property="og:image" content="http://tge.mk/assets/img/ogledalo/medium/<?php echo e($ogledalo->image); ?>"/>
<meta property="og:description" content="<?php echo \Illuminate\Support\Str::limit(strip_tags($ogledalo->description), 300, '...'); ?>"/>
<meta property="og:locale" content="en_US"/>
<meta name="author" content="Zoran Shefot Bogoevski">
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-ver-clear">
  <div class="container pv-40">
    <div class="row">
      <div class="col-md-8">
        <div class="owl-carousel content-slider-with-controls">
          <div class="overlay-container overlay-visible">
            <img src="/assets/img/ogledalo/<?php echo e($ogledalo->image); ?>"/>
            <a href="/assets/img/ogledalo/<?php echo e($ogledalo->image); ?>"
             class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
           </div>
         </div>

         <h1 class="title"><?php echo e($ogledalo->title); ?></h1><br>
         <div class="separator-2"></div>
         <?php echo $ogledalo->description; ?>

       </div>
       <div class="col-lg-4">
        <div class="sidebarBlog">
          <aside class="widget">
            <div class="fb-page" data-href="https://www.facebook.com/tgemk/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tgemk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tgemk/">Тетовско - Гостиварска Епархија</a></blockquote></div>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/main/ogledalo.blade.php ENDPATH**/ ?>