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
 <div class ="row">
    <div class ="col-sm-2">
        <h3><span class="label label-success ">File Path:</span></h3>
        </div>
        <div class="col-sm-10">
        <h3><?php echo $fpath ?></h3>
        </div>
     </div>
<div class ="row">
    <div class ="col-sm-2">    
        <h3><span class="label label-success ">Path Name:</span></h3>
        </div>
    
        <div class="col-sm-10">
            <h3><?php echo $npath ?></h3>
            </div>
    </div>
<?php
$rest = substr("abcdef", 0, 3);  // returns "abcde"
var_dump($rest);

?>


<img src="<?php echo $npath; ?>" height="300px" width="300px" />

<div class="row>">
    <div class="form-group" >
        <div class="col-sm-10 col-sm-offset-2">
            <a href="<?php $fpath ?>" class="btn btn-primary">file direct</a>
            <a class="btn btn-primary" href="?delete=<?php echo $npath;?>">Delete</a>
        </div>
    </div>
</div>
    
    
