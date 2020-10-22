<div class="card mt-2">
    <div class="card-body">
        <fieldset>
            <legend>Supported locales</legend>
            <p>
                Current supported locales:
            </p>
            <form class="form-remove-locale" method="POST" role="form" action="<?php echo e(action($controller.'@postRemoveLocale')); ?>"
                  data-confirm="Are you sure to remove this locale and all of data?">
                <?php echo csrf_field(); ?>
                <ul class="list-locales list-unstyle">
                    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="form-group ">
                            <span><?php echo e($locale); ?></span>
                            <button type="submit" name="remove-locale[<?php echo e($locale); ?>]" class="btn btn-danger btn-sm ml-2" data-disable-with="...">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </form>
            <form class="form-add-locale" method="POST" role="form" action="<?php echo e(action($controller.'@postAddLocale')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <p>
                        Enter new locale key:
                    </p>
                    <div class="row">
                        <div class="col-auto">
                            <input type="text" name="new-locale" class="form-control"/>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn  btn-block btn-outline-success" data-disable-with="Adding..">Add new locale</button>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
<?php /**PATH /home/vagrant/code/tge/resources/views/vendor/translation-manager/bootstrap4/blocks/_supportedLocales.blade.php ENDPATH**/ ?>