<div class="row">
    <div class="col-sm-6">
        <h1>Lab 4</h1>
    </div>
    <div class="col-sm-6">
        <a href="index.php" class="pull-right">Home</a>
    </div>
</div>
<div class ="row">
    <div class ="col-sm-2">
        <h3><span class="label label-success ">File Size:</span></h3>
    </div>
    <div class="col-sm-10">
        <h3><?php echo $size . " bytes." ?></h3>
    </div>
</div>
<div class ="row">
    <div class ="col-sm-2">   
        <h3><span class="label label-success ">File Type:</span></h3>
    </div>
    <div class="col-sm-10">
        <h3><?php echo $type ?></h3>
    </div>
</div>
<div class ="row">
    <div class ="col-sm-2">    
        <h3><span class="label label-success ">Upload Date:</span></h3>
    </div>
    <div class="col-sm-10">
        <h3><?php echo $update ?></h3>
    </div>
</div>

<?php
//check file type for display options
$ftype = substr($fname, 0, 3);
if ($ftype == "ima") {
    ?>
    <img src="<?php echo $npath; ?>" height="300px" width="300px" />
        <?php } 
    elseif ($ftype == "tex") {
    ?>
    <div class="embed-responsive embed-responsive-4by3">
    <iframe src="<?php echo $npath; ?>" class="embed-responsive-item" ></iframe>
    </div>
        <?php } 
    elseif ($ftype == "she") {
        ?>
        <h3>Direct Download</h3>
        <object src="<?php echo $npath; ?>"><embed src="<?php echo $npath; ?>">
            </embed></object>
        <?php }
    ?>
        
    <div class="row>">
        <div class="form-group" >
            <div class="col-sm-10 col-sm-offset-2">
                <a href="<?php echo $npath?>" class="btn btn-primary" >file direct</a>

                <a class="btn btn-primary" href="?delete=<?php echo $npath; ?>">Delete</a>
            </div>
        </div>
    </div>