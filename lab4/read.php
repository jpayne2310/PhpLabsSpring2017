<?php
include './views/header.html.php';
$delete = "";
//check and store value of passed url variable
if (filter_input(INPUT_GET, 'thing') != null) {
    $fname = $_GET['thing'];
}

//access uploads folder
$file = '.' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 
        $fname . '.';
//use file-info to set file type and size
$finfo = new finfo(FILEINFO_MIME_TYPE);
$type = $finfo->file($file);
$size = filesize($file);

//created an instance to retrieve more file information
$finfo2 = new SplFileInfo($file);

$update = date("l F j, Y, g:i a", $finfo2->getMTime());
$fpath = $finfo2->getRealPath();
$npath = $finfo2->getPathname();

 if (isset($_GET['delete'])) {
            error_reporting(E_ERROR);
            if (filter_input(INPUT_GET, 'delete') != null) {
                $delete = $_GET['delete'];
                unlink($delete);
                header("Location: index.php");
                ?>
                <p class="alert alert-success">File was deleted.</p>
                <?php
            }
        }

include './views/read.html.php';
include './views/footer.html.php';
?>