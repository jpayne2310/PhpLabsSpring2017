<?php
include './views/header.html.php';
include 'delete.php';
$folder = './uploads';
if (!is_dir($folder)) {
    die('Folder <strong>' . $folder . '</strong> does not exist');
}
$directory = new DirectoryIterator($folder);

include './views/index.html.php';
include './views/upload-form.php';
include './views/footer.html.php';