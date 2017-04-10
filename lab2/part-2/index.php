<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './autoload.php';
            
            $db = new addressCrud();
            $addresses = $db->readAllAddress();
            
            include './templates/view-address.html.php';
        ?>
    </body>
</html>
