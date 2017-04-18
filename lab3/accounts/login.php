<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php    
        session_start();
        
        //load all models
        include './autoload.php';
        
        //initilize array for desire output format
        $errors = [];
        
        //create instances for used classes
        $util = new Util();
        $accounts = new Accounts();
        
        //get user input
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        //set message for log out redirect
        if(filter_input(INPUT_GET, 'lhw03' ) != null)
            {
                $errors[] = "You are logged out";
            }
        
        //validate user and redirect to admin page    
        if ($util->isPostRequest()) {
            $loginInfo = $accounts->login($email, $password);
            if($loginInfo > 0) {
                
                $_SESSION['user_id'] = $loginInfo;
                $_SESSION['email'] = $email;
                $util->redirect("admin.php");
                 
            } else {
                ?>
        <h1> <?php $errors[] = "Invalid email and/or Password"; ?></h1>
        <?php //$errors[0] = "";
            }
        }        
        include './views/login.html.php';      
        include './views/errors.html.php';
        ?>        
    </body>
</html>
