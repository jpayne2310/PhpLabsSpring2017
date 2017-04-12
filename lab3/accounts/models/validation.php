<?php

/**
 * Description of validation
 *
 * @author James
 */

class validation {
    //validation for zip code
    function isZipValid($zip) {
    $zipRegex = '/^[0-9]{5}$/';
        if (preg_match($zipRegex, $zip)) {
            return 'true';
        }
    
        return 'false';
    }

    //Date validation for birthday
    function isDateValid($birthday) {
        return (bool)strtotime($birthday);
    }
    
    function isEmailValid($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
               // $errors[] = "A valid email arrdess is required";  
            }
    }
}
