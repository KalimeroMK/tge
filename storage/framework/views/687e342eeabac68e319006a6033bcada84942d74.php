
<?php $__env->startPush('notifications'); ?>
    <div class="alert alert-success success-import" style="display:none;">
        <p>Done importing, processed <strong class="counter">N</strong> items! Reload this page to refresh the groups!</p>
    </div>
    <div class="alert alert-success success-find" style="display:none;">
        <p>Done searching for translations, found <strong class="counter">N</strong> items!</p>
    </div>
    <div class="alert alert-success success-publish" style="display:none;">
        <p>Done publishing the translations for group '<?php echo e($group); ?>'!</p>
    </div>
    <div class="alert alert-success success-publish-all" style="display:none;">
        <p>Done publishing the translations for all group!</p>
    </div>

    <?php if(Session::has('successPublish')): ?>
        <div class="alert alert-info">
           <?php echo Session::get('successPublish'); ?>

        </div>
    <?php endif; ?>
 <?php $__env->stopPush(); ?>
<?php /**PATH /home/vagrant/code/tge/resources/views/vendor/translation-manager/bootstrap4/_notifications.blade.php ENDPATH**/ ?>