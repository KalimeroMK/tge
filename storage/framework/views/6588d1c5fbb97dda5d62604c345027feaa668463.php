<div class="card mt-2">
    <div class="card-body">
        <fieldset>
            <legend>Export all translations</legend>
            <form class="form-inline form-publish-all" method="POST" action="<?php echo e(action($controller.'@postPublish', '*')); ?>" data-remote="true" role="form"
                  data-confirm="Are you sure you want to publish all translations group? This will overwrite existing language files.">
                    <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" data-disable-with="Publishing..">Publish all</button>
            </form>
        </fieldset>
    </div>
</div>
<?php /**PATH /var/www/html/vendor/kalimeromk/laravel-translation-manager/resources/views/bootstrap4/blocks/_publishAll.blade.php ENDPATH**/ ?>