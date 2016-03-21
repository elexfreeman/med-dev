
<div class="w-container">
  <h1 class="body-h1"><?php echo lang('login_heading');?>&nbsp;
    <span class="body-h1-span">(<?php echo lang('login_subheading');?>)</span>

  </h1>
</div>
<div class="w-container body-container login-container">
  <div class="w-form login-form-container">
    <?php echo form_open("auth/login");?>


    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>

    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>

    <?php echo lang('login_remember_label', 'remember');?>

    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    <br>
    <?php echo form_submit('submit', lang('login_submit_btn'));?>

    <?php echo form_close();?>
    <br>
    <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
  </div>
</div>

