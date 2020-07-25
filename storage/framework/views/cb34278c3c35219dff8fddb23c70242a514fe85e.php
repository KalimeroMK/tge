<div class="card mt-2">
    <div class="card-body">
        <form role="form" method="POST" action="<?php echo e(action($controller.'@postAddGroup')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <p>Choose a group to display the group translations. If no groups are visisble, make sure you have run the migrations and imported the translations.</p>
                <select name="group" id="group" class="form-control group-select">
                    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"<?php echo e($key == $group ? ' selected' : ''); ?>><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Enter a new group name and start edit translations in that group</label>
                <input type="text" class="form-control" name="new-group"/>
            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="add-group" value="Add and edit keys"/>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /var/www/html/vendor/kalimeromk/laravel-translation-manager/resources/views/bootstrap4/blocks/_addEditGroupKeys.blade.php ENDPATH**/ ?>