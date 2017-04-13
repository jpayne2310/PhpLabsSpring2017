<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>You are Logged out</h1>
        <?php
        include './autoload.php';
        $util = new Util();
        
        
        include './views/destory.php';
        sleep(10);
        $page = 'login.php';
        $util->redirect($page);
        ?>
    </body>
</html>
