<section class="section-login">
  <div class="container">
	<div class="row">
        <div class="col-md-6">
            <?= form_open() ?> 
            <fieldset><legend class="text-center">Registration Form <span class="req"></span></legend>

            <div class="form-group">
                <label><span class="req">* </span> Name: </label>
                    <input class="form-control" type="text" name="name" id = "txt" onkeyup = "Validate(this)"  />
                        <div id="errFirst"></div>
                         <?= form_error('name'); ?>
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label>
                    <input class="form-control"  type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                        <div class="status" id="status"></div>
                         <?= form_error('email'); ?>
            </div>


            <div class="form-group">
                <label><span class="req">* </span> Password: </label>
                    <input  name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" />
                     <?= form_error('password'); ?>

                <label><span class="req">* </span> Password Confirm: </label>
                    <input name="confirmpassword" type="password" class="form-control inputpass" minlength="4" maxlength="16" id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
                         <?= form_error('confirmpassword'); ?>
            </div>

            <div class="form-group">
                <div class ="row">
                <div class="col-md-5 image">
                  <?php echo $captcha; ?>
                </div> 
                <div class="col-md-5">
                    <a class="refresh" href= "javascript:;"><img src="<?php base_url(); ?>assets/image/refresh.png" style="height: 35px"></a>
                </div>
            </div>
            </div>

            <div class="form-group">
                <label for="captcha"><span class="req">* </span> Captcha: </label>
                    <input class="form-control"  type="text" name="captcha" id = "captcha"/>
                        <div class="status" id="status"></div>
                         <?= form_error('captcha'); ?>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" id="submit" name="submit_reg" value="Register">
            </div>



            </fieldset>
            <?= form_close() ?> 

        </div>

	</div>
</div>
</section>

<script>
    $(function(){
        $('.refresh').click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Registration/refresh_captcha',
                success: function(res) {
                    if(res) {
                        $('.image').html(res);
                    }
                }
            })
        });
    }); 
</script>

