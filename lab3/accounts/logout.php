<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>You are Logged out</h1>
        <?php
        
        
        
        include './views/destory.php';
        include './autoload.php';
        $page = 'login.php';
        $redirect = redirect($page, $email);
        ?>
    </body>
</html>
