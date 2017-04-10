<?php
include './templates/header.php';
require_once './autoload.php';

//variable used for functioncall
$addressCrud = new addressCrud();
$util = new util();
$validation = new validation();

$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$addressline1 = filter_input(INPUT_POST, 'addressline1');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$birthday = filter_input(INPUT_POST, 'birthday');

$error = [];

//fill drop down
$states = $util->getStates();

//check for minimum requirements
if($util->isPostRequest()) {
            
            if (empty($fullname)) {
                $errors[] = "Full name is required";               
            }
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "A valid email arrdess is required";  
            }
            
            
            if (empty($addressline1)) {
                $errors[] = "Address Line 1 is a required field";               
            }
            
            if (empty($city)) {
                $errors[] = "City is a required field";               
            }
            
            if (empty($state)) {
                $errors[] = "The state field is required"; 
            }
            
            if ($validation->isZipValid($zip) == 'false') {
                $errors[] = "A valide zip code is required.";  
            }
            
            if ($validation->isDateValid($birthday) === false) {
            $errors[] = "A valide Birth Date is invaild, please re-enter.";  
            }
            
            //clear textboxes
            if (count($errors) === 0) {
                if ($addressCrud->createAddress($fullname, $email, $addressline1, $city ,$state, $zip, $birthday)) {
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
        
        //call necessary templates
        include './templates/add-address.html.php';
        include './templates/messages.html.php';
        include './templates/errors.html.php';
        include './templates/footer.html.php';
        ?>