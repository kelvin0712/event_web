<section class="section-login">
  <div class="container">
	<div class="row">
        <div class="col-md-6">
            <?php //validation_errors('<div class="text-danger">', '</div>'); ?>
            <?php
                 $message = $this->session->flashdata('msg');
                 if (isset($message)) {
                       echo '<div class="alert alert-info">' . $message . '</div>';
                       $this->session->unset_userdata('msg');
                     };
                  ?>
            <?= form_open() ?> 
            <fieldset><legend class="text-center">Login Form <span class="req"></span></legend>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label>
                    <input class="form-control" type="text" name="email" id = "email"  onchange="email_validate(this.value);" value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE["email"];}?>" />
                        <div class="status" id="status"></div>
                        <?= form_error('email'); ?>
            </div>


            <div class="form-group">
                <label><span class="req">* </span> Password: </label>
                    <input name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE["password"];}?>" />
                     <?= form_error('password'); ?>
            </div>

            <div class="form-group">
                <input name="remember" type="checkbox" <?php if(isset($_COOKIE['email'])) { ?> checked <?php }?> />
                     <label><span class="req"> </span> Remember me </label>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="login_reg" value="Login">
            </div>

            <a href="<?= base_url('forgotpass')?>" class="txt3">Forget your password</a>

            </fieldset>
            <?= form_close() ?> 


        </div>

	</div>
</div>
</section>
