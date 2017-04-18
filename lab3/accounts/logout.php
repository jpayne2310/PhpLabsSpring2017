<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
        <?php
        include './autoload.php';
        
        //destory session
        require_once './views/destory.php';
        $util = new Util();
        
        //redirect with attached logout key
        $util->redirect("login.php?lhw03=8");
        ?>
    </body>
</html>
