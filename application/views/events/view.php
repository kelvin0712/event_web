
<section class="section-login">
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="tit1 text-center"><?php echo $title_item['title']; ?></h1>
        </div>    
    </div>
    

    <div class="row">
        <div class="col-md-4">
        	<label>Name</label>
        	<input type="text" value="<?php echo $title_item['title']; ?>" class="form-control">
        </div>
        <div class="col-md-4">
        	<label>Time</label>
        	<input type="text"  value="<?php echo $title_item['eventTime']; ?>" class="form-control">
        </div>
        <div class="col-md-4">
        	<label>Location</label>
        	<input type="text"  value="<?php echo $title_item['location']; ?>" class="form-control">
        </div>
        <div class="col-md-4">
            <label>Image</label>
            <img  src="<?php echo base_url() ?>/assets/image/<?php echo $title_item['image']; ?>">
        </div>
    </div> 

   
</div>
</section>