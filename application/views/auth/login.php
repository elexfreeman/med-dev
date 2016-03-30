
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


    <input style='width: 15px;height: 15px;' type="checkbox" name="remember" value="1" id="remember">
    <br>
    <?php echo form_submit('submit', lang('login_submit_btn'));?>


    <?php echo form_close();?>
    <br>
    <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
  </div>
</div>



<!-- BACKGROUND IMAGE -->
<!--===================================================-->
<div id="bg-overlay" class="bg-img img-balloon"></div>


<!-- HEADER -->
<!--===================================================-->
<div class="cls-header cls-header-lg">
  <div class="cls-brand">
    <a class="box-inline" href="index.html">
      <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
      <span class="brand-title">Система учета заявок</span>
    </a>
  </div>
</div>
<!--===================================================-->


<!-- LOGIN FORM -->
<!--===================================================-->
<div class="cls-content cls-container">
  <div class="cls-content-sm panel">
    <div class="panel-body">
      <p class="pad-btm">Войдите в свой акаунт</p>
      <form action="index.html">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            <input type="text" class="form-control" placeholder="Ваш логин">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
            <input type="password" class="form-control" placeholder="Ваш пароль">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-8 text-left checkbox">
            <label class="form-checkbox form-icon">
              <input type="checkbox"> Запомнить меня
            </label>
          </div>
          <div class="col-xs-4">
            <div class="form-group text-right">
              <button class="btn btn-success text-uppercase" type="submit">Войти</button>
            </div>
          </div>
        </div>
        <div class="mar-btm"><em>- или -</em></div>
        <button class="btn btn-primary btn-lg btn-block" type="button">
          Подать заявку на использование
        </button>
      </form>
    </div>
  </div>
  <div class="pad-ver">
    <a href="#" class="btn-link mar-rgt">Условия использования</a>
    <a href="#" class="btn-link mar-lft">Политика конфиденциальности</a>
  </div>
</div>
<!--===================================================-->


