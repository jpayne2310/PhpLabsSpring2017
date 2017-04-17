<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        include './autoload.php';

        require_once './views/destory.php';
         $util = new Util();
        $util->redirect("login.php?logout=true");
        ?>
    </body>
</html>
