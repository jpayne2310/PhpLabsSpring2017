<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
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
                $util->redirect("admin.php");
                 
            } else {
                echo "did not work";
            }
        }
        
        include './views/login.html.php';
        
        ?>
        
    </body>
</html>
