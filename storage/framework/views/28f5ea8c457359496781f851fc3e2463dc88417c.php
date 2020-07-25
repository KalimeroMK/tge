<?php if(isset($ad)): ?>

    <?php echo e(Form::model('ad', ['route' => ['ads.update', $ad], 'method' => 'POST','id'=>'form-username','class'=>'form-horizontal form-bordered', 'files'=>true])); ?>

    <?php echo csrf_field(); ?>

<?php else: ?>
    <?php echo e(Form::model('ad', ['route' => ['ads.store'], 'method' => 'POST','id'=>'form-username','class'=>'form-horizontal form-bordered', 'files'=>true])); ?>

    <?php echo csrf_field(); ?>

<?php endif; ?>

<div class="form-group">
    <label for="code" class="col-sm-3 control-label"><?php echo e(trans('messages.ad_code')); ?></label>
    <div class="col-sm-8">
        <?php echo e(Form::text('code', old('code', $ad->code ?? null),
                     [
                        "class" => "form-control",
                        "placeholder" => "Add ads code",
                        "id"=>"code",
                        "cols"=>"10",
                        "rows"=>"8"
                     ])); ?>

    </div>
</div>
<div class="form-group">
    <label for="position"
           class="col-sm-3 control-label"><?php echo e(trans('messages.position')); ?></label>

    <div class="col-sm-8">
        <?php echo e(Form::select('position',[
     config('constants.TYPE_INDEX_HEADER') => trans('messages.index_page_header'),
     config('constants.TYPE_INDEX_FOOTER') => trans('messages.index_page_footer'),
     config('constants.TYPE_SIDEBAR') => trans('messages.sidebar'),
     config('constants.TYPE_ABOVE_POST') => trans('messages.above_each_post'),
     config('constants.TYPE_BELOW_POST') => trans('messages.below_each_post'),
     config('constants.TYPE_BELOW_POST') => trans('messages.below_each_post'),
     config('constants.TYPE_BETWEEN_CATEGORY_INDEX') => trans('messages.between_category_pages'),
     config('constants.TYPE_BETWEEN_AUTHOR_INDEX') => trans('messages.between_author_pages'),
     config('constants.TYPE_BETWEEN_TAG_INDEX') => trans('messages.between_tag_pages'),
     config('constants.TYPE_BETWEEN_SEARCH_INDEX') => trans('messages.between_search_pages'),
     config('constants.TYPE_ABOVE_PAGE') => trans('messages.above_each_page'),
     config('constants.TYPE_BELOW_PAGE') => trans('messages.below_each_page')
 ], null,
             [
                "class" => "form-control",
                "id" => "position"
             ])); ?>

    </div>
</div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <?php echo e(Form::submit(trans('messages.save'), ['class'=>'btn purple'])); ?>

        </div>
    </div>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH /var/www/html/resources/views/admin/ads/partials/form.blade.php ENDPATH**/ ?>