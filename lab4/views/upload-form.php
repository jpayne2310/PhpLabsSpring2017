<!DOCTYPE html>
<div class="row">
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <h1>Upload Me</h1>
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
    <!-- Name of input element determines name in $_FILES array -->
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <div class="fileinput fileinput-new" data-provides="fileinput">
            <span class="btn btn-info btn-file">
                <input name="upfile" type="file" /></span>
            <span class="fileinput-filename"></span>
            <span class="fileinput-new"></span>
                <input type="submit" value="Send File" class="btn btn-primary"/>
            </div>
        </div>
    </div>
</div>





