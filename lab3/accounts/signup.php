<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Page</title>
    </head>
    <body>
        <?php
        //load all models
        include './autoload.php';

        //create instances for used classes
        $util = new Util();
        $validation = new Validation();
        $accounts = new Accounts();

        //receive user input
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        //initilize array for desire output format
        $errors = [];

        //set validation requirements
        if ($util->isPostRequest()) {

            if (!$validation->isEmailValid($email)) {
                $errors[] = "Invalid email address, please re-enter.";
            }

            if (empty($password)) {
                $errors[] = "Password is required";
            }

            //check for successful login
            if ($errors == null) {
                if ($accounts->checkDubEmail($email)) {
                    $errors[] = "That email address already exist.";
                    $errors[] = "Use the link to the Login Page.";
                    $errors[] = "Or enter a different email address.";

                    $email = "";
                    $password = "";
                } else {
                    $accounts->signup($email, $password);
                    $util->redirect("login.php");
                }
            }
        }
        include './views/signup.html.php';
        include './views/errors.html.php';
        ?>
    </body>
</html>
