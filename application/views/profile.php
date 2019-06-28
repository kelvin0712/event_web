<section class="section-login">
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="tit1 text-center"><i class="fa fa-user"></i>Profile</h1>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-12">   
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-user"></i> User Profile
                </div>
            <div class="panel-body">
                <?php
                     $message = $this->session->flashdata('msg');
                     if (isset($message)) {
                           echo '<div class="alert alert-info">' . $message . '</div>';
                           $this->session->unset_userdata('msg');
                         };
                  ?>
                <?php
                     $messages = $this->session->flashdata('success_msg');
                     if (isset($messages)) {
                           echo '<div class="alert alert-info">' . $messages . '</div>';
                           $this->session->unset_userdata('success_msg');
                         };
                  ?>
                <?= form_open() ?>
                    <div class="row">
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?= $this->session->userdata('username')?>" class="form-control">
                                <?= form_error('name'); ?>
                            </div>
                        </div>
                         <div class="col-md-4"> 
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $this->session->userdata('email')?>" class="form-control">
                                <?= form_error('email'); ?>
                            </div>
                        </div>
                    </div>
         
                    <div class="col-md-4"> 
                        <button type="submit" class="btn btn-outline-secondary btn-lg"><i class="fa fa-floppy-o"></i>Update profile</button>
                    </div>
                <?= form_close() ?> 
                </div>
                </div>
                </div>    
</div>
</div>
</section>
