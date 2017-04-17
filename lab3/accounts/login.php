<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        session_start();
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
                
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if ($util->isPostRequest()) {
            $loginInfo = $accounts->login($email, $password);
            if($loginInfo > 0) {
                //worked
                $_SESSION['user_id'] = $loginInfo;
                $_SESSION['email'] = $email;
                $util->redirect("admin.php");
                 
            } else {
                ?>
        <h1> <?php echo "Invalid email and/or Password"; ?></h1>
        <?php
            }
        }        
        include './views/login.html.php';      
        include './views/errors.html.php';
        ?>        
    </body>
</html>
