<tr>
    <td bgcolor="#ffffff" style="padding: 15px;">

        <h4 style="font-family:Arial,san-serif;margin:0 0 5px 0;"><?php echo e(trans('messages.hi')); ?> <?php echo $name; ?></h4>

        <p style="font-family: Arial, sans-serif; font-size: 15px;"><?php echo e(trans('messages.to_reset_password')); ?> <a
                    href="<?php echo e($reset_url); ?>"><?php echo e(trans('messages.click_here')); ?></a></p>

        <p style="font-family: Arial, sans-serif; font-size: 15px;"><?php echo e(trans('messages.if_you_did_not_request_password')); ?></p>

        <p style="font-family: Arial, sans-serif; font-size: 15px;"><?php echo e(trans('messages.thank_you')); ?>, <br/>
            <?php echo e(trans('messages.customer_service')); ?></p>
    </td>
</tr><?php /**PATH /var/www/html/resources/views/emails/reset_password.blade.php ENDPATH**/ ?>