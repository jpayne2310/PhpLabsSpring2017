<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        include './autoload.php';
        $util = new Util();
        

        require_once './views/destory.php';
        
        
        //$page = 'login.php';
        header('Refresh: 3; "login.php"');
        //$util->redirect($page,5);
        ?>
    </body>
</html>
