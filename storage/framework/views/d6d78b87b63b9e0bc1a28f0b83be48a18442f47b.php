<label for="title">Name</label>

<div class="form-group">
    <textarea class="ckeditor" id="title" name="title"></textarea>
</div>

<?php if($errors->has('title')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('title')); ?></p> <?php endif; ?>

<?php echo e(Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ])); ?>

<?php /**PATH /var/www/html/resources/views/admin/tags/partials/form.blade.php ENDPATH**/ ?>