<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white"
         data-image="<?php echo e(asset('images/sidebar-1.jpg')); ?>">
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item <?php echo e(Route::currentRouteNamed('dashboard') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="material-icons">dashboard</i>
                        <p><?php echo e(trans('messages.dashboard')); ?></p>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('categories.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">
                        <i class="material-icons">library_books</i>
                        <p><?php echo e(trans('messages.categories')); ?></p>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('posts.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('posts.index')); ?>">
                        <i class="material-icons">subject</i>
                        <span class="title"><?php echo e(trans('messages.posts')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::currentRouteNamed('tags.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('tags.index')); ?>">
                        <i class="material-icons">label</i>
                        <span class="title"><?php echo e(trans('messages.tags')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('users.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
                        <i class="material-icons">person</i>
                        <span class="title"><?php echo e(trans('messages.users')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::currentRouteNamed('ads.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('ads.index')); ?>">
                        <i class="material-icons">border_clear</i>
                        <span class="title"><?php echo e(trans('messages.ads_section')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::currentRouteNamed('statistics') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('statistics')); ?>">
                        <i class="material-icons">bar_chart</i>
                        <span class="title"><?php echo e(trans('messages.statistics')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('roles.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
                        <i class="material-icons">lock</i>
                        <span class="title"><?php echo e(trans('messages.user_roles')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('settings.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('settings.index')); ?>">
                        <i class="material-icons">settings</i>
                        <span class="title"><?php echo e(trans('messages.settings')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('activity') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('activity')); ?>">
                        <i class="material-icons">biotech</i>
                        <span class="title"><?php echo e(trans('messages.log')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('laravelblocker::blocker.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('laravelblocker::blocker.index')); ?>">
                        <i class="material-icons">privacy_tip</i>
                        <span class="title"><?php echo e(trans('messages.blocker')); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Route::currentRouteNamed('translation') ? 'active' : ''); ?>">
                    <a class="nav-link" href="/translations">
                        <i class="material-icons">language</i>
                        <span class="title"><?php echo e(trans('messages.translations')); ?></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
<?php /**PATH /var/www/html/resources/views/admin/layouts/navigation.blade.php ENDPATH**/ ?>