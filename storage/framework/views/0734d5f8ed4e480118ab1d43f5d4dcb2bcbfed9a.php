<div class="card">
    <div class="card-body">
        <p>Warning, translations are not visible until they are exported back to the app/lang file, using
            <code>php artisan translation:export</code> command or publish button.</p>

        <?php if(!isset($group)): ?>
            <form class="form-import" method="POST" action="<?php echo action($controller . '@postImport') ?>" data-remote="true" role="form">
                <?php echo csrf_field(); ?>
                <div class="row form-group">
                    <div class="col-auto">
                        <select name="replace" class="form-control">
                            <option value="0">Append new translations</option>
                            <option value="1">Replace existing translations</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success btn-block" data-disable-with="Loading..">Import groups</button>
                    </div>
                </div>
            </form>
            <form class="form-find" method="POST" action="<?php echo action($controller.'@postFind'); ?>" data-remote="true" role="form"
                  data-confirm="Are you sure you want to scan you app folder? All found translation keys will be added to the database.">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" data-disable-with="Searching..">Find translations in files</button>
                </div>
            </form>
        <?php else: ?>
            <form class="form-inline form-publish" method="POST" action="<?php echo action($controller.'@postPublish', $group); ?>" data-remote="true"
                  role="form" data-confirm="Are you sure you want to publish the translations group '<?php echo e($group); ?>? This will overwrite existing language files.">
                <?php echo csrf_field(); ?>
                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-info" data-disable-with="Publishing..">Publish translations</button>
                    <a href="<?php echo e(action($controller.'@getIndex')); ?>" class="btn btn-secondary">Back</a>
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/vagrant/code/tge/resources/views/vendor/translation-manager/bootstrap4/blocks/_mainBlock.blade.php ENDPATH**/ ?>