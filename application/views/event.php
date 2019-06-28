<section class="section-login">
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="tit1 text-center"><?php echo $header; ?></h1>
        </div>    
    </div>

    <?php foreach ($titles as $title_item): ?> 
    

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
    </div>

     <p>
        <a class="txt3" href="<?php echo site_url('view/'.$title_item['title']); ?>">
        View event
        </a>
    </p>  

    <?php endforeach; ?>
</div>
</section>