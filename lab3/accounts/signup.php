<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Page</title>
    </head>
    <body>
        <?php
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
                   
        $errors = [];
        
        if ($util->isPostRequest()) {
            
            if($accounts->signup($email, $password))
            {
                //worked
                $util->redirect("login.php", array("email=>$email"));
            } else {
                        $errors[] = "That email address already exist.";
                        $errors[] = "Use the link to the Login Page.";
                        $errors[] = "Or enter a different email address.";
                
                $email = "";
                $password = "";
            }
        }
        
        

        include './views/signup.html.php';
        include './views/errors.html.php';
        
        ?>
    </body>
</html>
