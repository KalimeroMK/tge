<?php ($controller='\Barryvdh\TranslationManager\Controller'); ?>

<?php $__env->startSection('documentTitle'); ?>
    Translation Manager
<?php $__env->stopSection(); ?>
<?php echo $__env->make('translation-manager::bootstrap4._notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('translation-manager::bootstrap4.blocks._mainBlock', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('translation-manager::bootstrap4.blocks._addEditGroupKeys', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($group): ?>
        <?php echo $__env->make('translation-manager::bootstrap4.blocks._edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('translation-manager::bootstrap4.blocks._supportedLocales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('translation-manager::bootstrap4.blocks._publishAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    
    <script src="https://cdn.jsdelivr.net/gh/Talv/x-editable@develop/dist/bootstrap4-editable/js/bootstrap-editable.min.js"></script>
    <?php echo $__env->make('translation-manager::jsScript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(config('translation-manager.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vendor/translation-manager/bootstrap4/index.blade.php ENDPATH**/ ?>