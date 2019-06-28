
<section class="section-login">
  <div class="container">
	<div class="row">
        <div class="col-md-6">
        	    <?php
                 $message = $this->session->flashdata('message');
                 if (isset($message)) {
                       echo '<div class="alert alert-info">' . $message . '</div>';
                       $this->session->unset_userdata('message');
                     };
                  ?>

            <?= form_open('Forgotpass/reset_link') ?> 
            <fieldset><legend class="text-center">Reset password<span class="req"></span></legend>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label>
                    <input class="form-control" type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                        <div class="status" id="status"></div>
                        <?= form_error('email'); ?>
            </div>


            <div class="form-group">
                <input class="btn btn-success" type="submit" name="login_reg" value="Send reset link">
            </div>


            </fieldset>
            <?= form_close() ?> 


        </div>

	</div>
</div>
</section>
