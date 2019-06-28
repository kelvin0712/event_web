
<section class="section-login">
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="tit1 text-center">Create event</h1>
        </div>    
    </div>

<!-- success message to display after uploading image -->
          <?php if ($this->session->flashdata('success')) {?>
              <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <?php echo $this->session->flashdata('success'); ?>
              </div>
          <?php  } ?> 
          <!-- validation message to display after form is submitted -->
             <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>','</div>');
             ?>    




    <div class="row">
      		<div class="col-md-6">

<?php echo form_open_multipart('Add/add_image') ?>

               <div class="form-group">
                 <label>Event Name</label>
                   <input type="text" class="form-control" id="event_name" name="title">
                 </div>
             </div>
             <div class="col-md-6">
             	<div class="form-group">
                 <label>Event Time</label>
                   <input type="text" class="form-control" id="event_time" name="eventTime">
                 </div>
             </div>
             <div class="col-md-6">
            	 <div class="form-group">
                 <label>Event Location</label>
                   <input type="text" class="form-control" id="event_location" name="location">
                 </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Image</label>
                   <input type="file" class="form-control" id="userfile" name="userfile">
                 </div>
             </div>
             <div class="col-md-6">
               <input type="submit" class="btn btn-primary" value="Upload">
             </div>
<?= form_close() ?> 

        </div>
        </div>
    </div> 
</section>