
<section class="section-login">
  <div class="container">
	<div class="row">
        <div class="col-md-6">

            <?= form_open('Forgotpass/updatepass') ?> 
            <fieldset><legend class="text-center">Reset password<span class="req"></span></legend>

            <div class="form-group">
                <label><span class="req">* </span> Password: </label>
                    <input name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" />
                     <?= form_error('password'); ?>
            </div>

            </div>

            <div class="form-group">
                <label><span class="req">* </span> Confirm Password: </label>
                    <input name="conpassword" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1"  />
                     <?= form_error('password'); ?>
            </div>


            <div class="form-group">
                <input class="btn btn-success" type="submit" name="login_reg" value="update">
            </div>


            </fieldset>
            <?= form_close() ?> 


        </div>

	</div>
</div>
</section>
