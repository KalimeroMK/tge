<div class="row">
    <?php echo $__env->make('admin.layouts.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <h4 class="title"></h4>
    <div class="fileinput text-center fileinput-new col-12" data-provides="fileinput">
        <div class="fileinput-new thumbnail img-circle">
            <img src="<?php if(empty($setting->featured_image)): ?><?php echo e(asset('images/image_placeholder.jpg')); ?><?php else: ?> <?php echo e(old('featured_image', $setting->imageUrl ?? null)); ?><?php endif; ?>"
            alt="image">

        </div>
        <div class="fileinput-preview fileinput-exists thumbnail img-circle" style=""></div>
        <div>
          <span class="btn btn-round btn-rose btn-file">
            <span class="fileinput-new">Add Photo</span>
            <span class="fileinput-exists">Change</span>
            <input type="hidden" value="" name="..."><input type="file" name="featured_image">
            <div class="ripple-container"></div></span>
            <br>
            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                <i class="fa fa-times"></i> Remove
                <div class="ripple-container">
                    <div class="ripple-decorator ripple-on ripple-out"
                    style="left: 62px; top: 25.6719px; background-color: rgb(255, 255, 255); transform: scale(15.5098);"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <input name="title" type="text" class="form-control" placeholder="<?php echo e(trans('messages.title')); ?>"
            value="<?php echo e(old('title', $setting->title ?? null)); ?>"/>
        </div>
        <?php if($errors->has('facebook')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('facebook')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="mainurl" type="text" class="form-control" placeholder="<?php echo e(trans('messages.url')); ?>"
            value="<?php echo e(old('mainurl', $setting->mainurl ?? null)); ?>"/>
        </div>
        <?php if($errors->has('mainurl')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('mainurl')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="<?php echo e(trans('messages.email')); ?>"
            value="<?php echo e(old('email', $setting->email ?? null)); ?>"/>
        </div>
        <?php if($errors->has('email')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('email')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="address" type="text" class="form-control" placeholder="<?php echo e(trans('messages.address')); ?>"
            value="<?php echo e(old('address', $setting->address ?? null)); ?>"/>
        </div>
        <?php if($errors->has('address')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('address')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="phone" type="text" class="form-control" placeholder="<?php echo e(trans('messages.phone')); ?>"
            value="<?php echo e(old('phone', $setting->phone ?? null)); ?>"/>
        </div>
        <?php if($errors->has('phone')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('phone')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="twitter" type="text" class="form-control" placeholder="<?php echo e(trans('messages.twitter')); ?>"
            value="<?php echo e(old('twitter', $setting->twitter ?? null)); ?>"/>
        </div>
        <?php if($errors->has('twitter')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('twitter')); ?></p> <?php endif; ?>
    </div>
    <div class="col-6">
        <div class="form-group">
            <input name="facebook" type="text" class="form-control" placeholder="<?php echo e(trans('messages.facebook')); ?>"
            value="<?php echo e(old('facebook', $setting->facebook ?? null)); ?>"/>
        </div>
        <?php if($errors->has('facebook')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('facebook')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="skype" type="text" class="form-control" placeholder="<?php echo e(trans('messages.skype')); ?>"
            value="<?php echo e(old('skype', $setting->skype ?? null)); ?>"/>
        </div>
        <?php if($errors->has('skype')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('skype')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="linkedin" type="text" class="form-control" placeholder="<?php echo e(trans('messages.linkedin')); ?>"
            value="<?php echo e(old('linkedin', $setting->linkedin ?? null)); ?>"/>
        </div>
        <?php if($errors->has('linkedin')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('linkedin')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="gplus" type="text" class="form-control" placeholder="<?php echo e(trans('messages.google_plus_url')); ?>"
            value="<?php echo e(old('gplus', $setting->gplus ?? null)); ?>"/>
        </div>
        <?php if($errors->has('gplus')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('gplus')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="youtube" type="text" class="form-control" placeholder="<?php echo e(trans('messages.youtube')); ?>"
            value="<?php echo e(old('youtube', $setting->youtube ?? null)); ?>"/>
        </div>
        <?php if($errors->has('youtube')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('youtube')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="flickr" type="text" class="form-control" placeholder="<?php echo e(trans('messages.flickr')); ?>"
            value="<?php echo e(old('flickr', $setting->flickr ?? null)); ?>"/>
        </div>
        <?php if($errors->has('flickr')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('flickr')); ?></p> <?php endif; ?>
        <div class="form-group">
            <input name="pinterest" type="text" class="form-control" placeholder="<?php echo e(trans('messages.pinterest')); ?>"
            value="<?php echo e(old('pinterest', $setting->pinterest ?? null)); ?>"/>
        </div>
        <?php if($errors->has('pinterest')): ?> <p
        class="alert alert-danger"><?php echo e($errors->first('pinterest')); ?></p> <?php endif; ?>
    </div>
</div>
<label for="description">Детален текст</label>
<textarea class="ckeditor" id="elm3"
name="description"><?php echo e(old('description', $setting->description ?? null)); ?></textarea>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <?php echo e(Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ])); ?>

        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/admin/settings/partials/form.blade.php ENDPATH**/ ?>