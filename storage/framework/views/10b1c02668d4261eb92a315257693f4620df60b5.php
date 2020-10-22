<?php echo csrf_field(); ?>

<?php if(!empty($categories)): ?>
    <div class="form-group">
        <label for="name" class="col-sm-3 control-label"><?php echo e(trans('messages.title')); ?></label>
        <div class="col-sm-8">
            <input id="name" class="form-control" type="text" name="title"
                   placeholder="<?php echo e(trans('messages.enter_category_title')); ?>"
                   value="<?php echo e(old('title', $category->title ?? null)); ?>"/>
        </div>
    </div>
    <div class="form-group">
        <label for="name"
               class="col-sm-3 control-label"><?php echo e(trans('messages.sub_category')); ?></label>
        <div class="col-sm-8">
            <select name="parent_id" id="parent_id" class="form-control">
                <?php if(!empty($category->title)): ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e(old('title', $category->title ?? null)); ?></option>
                <?php else: ?>
                    <option value="">Select category</option>
                <?php endif; ?>
                <?php if($categories): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoryList['id']); ?>"><?php echo e($categoryList['title']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
    </div>
<?php else: ?>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label"><?php echo e(trans('messages.title')); ?></label>

        <div class="col-sm-8">
            <input id="title" class="form-control" type="text" name="title"
                   placeholder="<?php echo e(trans('messages.enter_category_title')); ?>"
                   value="<?php echo e(old('title', $category->title ?? null)); ?>"/>
        </div>
    </div>
<?php endif; ?>
<div class="form-group">
    <div class="col-md-offset-3 col-md-8">
        <label>
            <?php echo Form::checkbox('publish', 1, ($category->publish ==1 ? true:null), ['class' => 'field']); ?>

            <?php echo e(trans('messages.show_category_in_menu')); ?>

        </label>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <?php echo e(Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ])); ?>


        </div>
    </div>
<?php /**PATH /home/vagrant/code/tge/resources/views/admin/categories/partials/form.blade.php ENDPATH**/ ?>