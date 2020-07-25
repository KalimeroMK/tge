<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <strong>Name:</strong>
        <?php echo e(Form::text("name",
             old("name") ? old("name") : (!empty($user) ? $user->name : null),
             [
                "class" => "form-control",
                "id" => "name",
                "placeholder" =>"name"
             ])); ?>

        <div class="form-group">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <strong>Email:</strong>
        <?php echo e(Form::text("email",
             old("email") ? old("email") : (!empty($user) ? $user->email : null),
             [
                "class" => "form-control",
                "id" => "email",
                "placeholder" =>"Email"
             ])); ?>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <strong>Password:</strong>
        <div class="form-group">
            <?php echo Form::password('password', ['placeholder' => 'Password','class' => 'form-control']); ?>


        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <strong>Confirm Password:</strong>
        <div class="form-group">
            <?php echo Form::password('confirm-password', ['placeholder' => 'Confirm Password','class' => 'form-control']); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Role:</strong>

        <div class="form-group">
            <?php echo Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')); ?>

            <?php echo Form::select('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')); ?>


        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <?php echo e(Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ])); ?>

    </div>
</div>
<?php /**PATH /var/www/html/resources/views/admin/user/partials/form.blade.php ENDPATH**/ ?>