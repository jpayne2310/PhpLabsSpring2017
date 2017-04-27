<?php 
//$delete = "";
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
?>