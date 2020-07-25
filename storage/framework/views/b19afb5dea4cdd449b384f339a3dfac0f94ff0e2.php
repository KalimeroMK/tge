<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <?php echo Form::text('name',$role->name ?? null, ['placeholder' => 'Name','class' => 'form-control']); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions), array('class' => 'name'))); ?>

                    <?php echo e($value->name); ?></label>
                <br/>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <?php echo e(Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ])); ?>

    </div>
</div><?php /**PATH /var/www/html/resources/views/admin/roles/partials/form.blade.php ENDPATH**/ ?>