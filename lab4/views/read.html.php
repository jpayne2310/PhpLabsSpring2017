
<div class ="row">
    <div class ="col-sm-12">
        <h2><span class="label label-success ">File Size:</span>
            <?php echo $size . " bytes." ?></h2>
        <h2><span class="label label-success ">File Type:</span>
            <?php echo $type ?></h2>
        <h2><span class="label label-success ">File Upload Date:</span>
            <?php echo $update ?></h2>
        <h2><span class="label label-success ">File Path:</span>
            <?php echo $fpath ?></h2>
        <h2><span class="label label-success ">File Path Name:</span>
            <?php echo $npath ?></h2>
    </div>
</div>
<div class="row>">
    <div class="form-group" >
        <div class="col-sm-10 col-sm-offset-2">
            <a href="<?php $fpath ?>" class="btn btn-primary">file direct</a>
            <button type="reset" class="btn btn-default">Delete</button>
        </div>
    </div>
</div>
    
    
