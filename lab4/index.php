<?php

include './views/header.html.php';

$folder = './uploads';
if (!is_dir($folder)) {
    die('Folder <strong>' . $folder . '</strong> does not exist');
}
$directory = new DirectoryIterator($folder);
$delete = "";
$errors = [];

include './views/index.html.php';
include './views/upload-form.php';

 if (isset($_GET['delete'])) {
            error_reporting(E_ERROR);
            if (filter_input(INPUT_GET, 'delete') != null) {
                $delete = $_GET['delete'];
                unlink($delete);
                header("Location: index.php");
            }
        }

        if (filter_input(INPUT_GET, 'up') != null) {
            $sLoad = $_GET['up'];
            if ($sLoad == 1) {
                $message = "File upload successful";
            }
            else {
                $errors[] = "File upload unsuccessful";
                echo RuntimeException();
            }
        }
include './views/messages.html.php';
include './views/errors.html.php';
include './views/footer.html.php';