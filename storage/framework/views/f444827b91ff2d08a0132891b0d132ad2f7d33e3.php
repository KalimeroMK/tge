<div class="card mt-2">
    <div class="card-body">
        <form action="<?php echo e(action($controller.'@postAdd', array($group))); ?>" method="POST" role="form">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Add new keys to this group</label>
                <textarea class="form-control" rows="3" name="keys"
                          placeholder="Add 1 key per line, without the group prefix"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Add keys" class="btn btn-primary">
            </div>
        </form>
        <hr>
        <h4>Total: <?php echo e($numTranslations); ?>, changed: <?php echo e($numChanged); ?></h4>
        <table class="table">
            <thead>
            <tr>
                <th width="15%">Key</th>
                <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($locale); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($deleteEnabled): ?>
                    <th>&nbsp;</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="<?php echo e($key); ?>">
                    <td><?php echo e($key); ?></td>
                    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ( $t = isset($translation[$locale]) ? $translation[$locale] : null); ?>
                        <td>
                            <a href="#edit"
                               class="editable status-<?php echo e($t ? $t->status : 0); ?> locale-<?php echo e($locale); ?>"
                               data-locale="<?php echo e($locale); ?>" data-name="<?php echo e($locale); ?> | <?php echo e($key); ?>"
                               id="username" data-type="textarea" data-pk="<?php echo e($t ? $t->id : 0); ?>"
                               data-url="<?php echo e($editUrl); ?>"
                               data-title="Enter translation"><?php echo $t ? htmlentities($t->value, ENT_QUOTES, 'UTF-8', false) : '' ?></a>
                        </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($deleteEnabled): ?>
                        <td>
                            <a href="<?php echo action($controller . '@postDelete', [$group, $key]) ?>"
                               class="delete-key"
                               data-confirm="Are you sure you want to delete the translations for '<?php echo e($key); ?>?"><span
                                        class=" fa fa-trash"></span></a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/vendor/translation-manager/bootstrap4/blocks/_edit.blade.php ENDPATH**/ ?>