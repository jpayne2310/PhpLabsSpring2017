<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>You are logged out</h1>
        <?php
        session_start();
        session_destroy();
        ?>
        
    </body>
</html>
