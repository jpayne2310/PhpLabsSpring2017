<!DOCTYPE html>
        <?php
        include './templates/header.php';

        require_once './models/dbconnect.php';
        require_once'./models/util.php';
        require_once './models/addressCRUD.php';
        require_once './models/validation.php';
        //include './templates/header.php';
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        $errors = [];
        $states = getStates();
        
        
        
        if(isPostRequest()) {
            
            if (empty($fullname)) {
                $errors[] = "Full name is required";               
            }
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "email format is required";  
            }
            
            if(empty($email)) {
                $errors[] = "Email is a required field"; 
            }
            
            if (empty($addressline1)) {
                $errors[] = "address is required";               
            }
            
            if (empty($city)) {
                $errors[] = "City is required";               
            }
            
            if (empty($state)) {
                $errors[] = "The state field is required";               
            }
            
            if (isZipValid($zip) === 'false') {
                $errors[] = "A valide zip code is required.";  
            }
            
            if (isDateValid($birthday) === 'false') {
            $errors[] = "Date is invaild, please re-enter.";  
            }
            
            if (count($errors) === 0) {
                if (createAddress($fullname, $email, $addressline1, $city ,$state, $zip, $birthday)) {
                    $message = 'Address Added';
                    $fullname = "";
                    $email = "";
                    $addressline1 = "";
                    $city = "";
                    $state = "";
                    $zip = "";
                    $birthday = "";
                }
                else {
                    header("Refresh:0");
                }
            }
            
        }  
        include './templates/add-address.html.php';
        include './templates/messages.html.php';
        include './templates/errors.html.php';
        include './templates/footer.html.php';
        ?>
