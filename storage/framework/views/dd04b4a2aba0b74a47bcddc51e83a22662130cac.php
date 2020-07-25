<?php $__env->startSection('menu'); ?>
<!--Header Start-->
<section class="headerTop">
    <div class="container">
        <div class="row">

            <div class="text-center">
                <div class="logo">
                    <a href="/"><img src="/assets/img/logo/<?php echo e($settings->logo); ?>" alt="logo"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<header class="header">
    <div class="container">
        <div class="headerIn">
            <div class="row">
                <div class="col-lg-8 col-sm-9 col-xs-12 pull-left noPaddingRight">
                    <nav class="mainNav">
                        <div class="menuBar hidden-lg hidden-md">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li class="has-menu-items"><a href="/">Почетна</a></li>
                                
                                                
                                                <li class="has-menu-items"><a href="/josif-mitropolit-tetovski-gostivarski">Митрополит</a>
                                                    <li class="has-menu-items"><a href="javascript:void('0')">Епархија</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/eparhija/tsrkva-sv-petka-i-sv-nedela-tetovo">Црква „Св. Петка и
                                                            Св. Недела“ – Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-dimitrij-tetovo">Црква „Св. Димитриј“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-bogoroditsa-tetovo">Црква „Св. Богородица“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-atanasij-tetovo">Црква „Св. Атанасиј“ –
                                                            Тетово</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-petka-gostivar">Црква „Св. Петка“ –
                                                            Гостивар</a></li>
                                                            <li><a href="/eparhija/tsrkva-sv-dimitrija-gostivar">Црква „Св. Димитрија“ –
                                                            Гостивар</a></li>


                                                        </ul>
                                                        <li class="has-menu-items"><a href="/tekstovi/all">Tекстови</a></li>

                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-xs-8 pull-right text-right">
                                            <div class="socialHeader">
                                                <?php if($settings->twitter): ?>
                                                <a target="_blank" href="<?php echo e($settings->twitter); ?>"><i
                                                    class="fa fa-twitter"></i></a>
                                                    <?php endif; ?>
                                                    <?php if($settings->skype): ?>
                                                    <a target="_blank" href="<?php echo e($settings->skype); ?>"><i
                                                        class="fa fa-skype"></i></a>
                                                        <?php endif; ?>
                                                        <?php if($settings->linkedin): ?>
                                                        <a target="_blank" href="<?php echo e($settings->linkedin); ?>"><i
                                                            class="fa fa-linkedin"></i></a>
                                                            <?php endif; ?>
                                                            <?php if($settings->gplus): ?>
                                                            <a target="_blank" href="<?php echo e($settings->gplus); ?>"><i
                                                                class="fa fa-google-plus"></i></a>
                                                                <?php endif; ?>
                                                                <?php if($settings->youtube): ?>
                                                                <a target="_blank" href="<?php echo e($settings->youtube); ?>"><i
                                                                    class="fa fa-youtube-play"></i></a>
                                                                    <?php endif; ?>
                                                                    <?php if($settings->flickr): ?>
                                                                    <a target="_blank" href="<?php echo e($settings->flickr); ?>"><i
                                                                        class="fa fa-flickr"></i></a>
                                                                        <?php endif; ?>
                                                                        <?php if($settings->facebook): ?>
                                                                        <a target="_blank" href="<?php echo e($settings->facebook); ?>"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                            <?php endif; ?>
                                                                            <?php if($settings->pinterest): ?>
                                                                            <a target="_blank" href="<?php echo e($settings->pinterest); ?>"><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </header>

                                                        <!--Header End-->


                                                        <?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/resources/views/layouts/menu.blade.php ENDPATH**/ ?>