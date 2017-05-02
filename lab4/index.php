<?php
include 'autoload.php';
include './views/header.html.php';
include 'delete.php';
$fileHandler = new FileHandler();
$folder = './uploads';
if (!is_dir($folder)) {
    die('Folder <strong>' . $folder . '</strong> does not exist');
}
$directory = new DirectoryIterator($folder);

include './views/index.html.php';
include_once './views/upload-form.php';
include './views/footer.html.php';