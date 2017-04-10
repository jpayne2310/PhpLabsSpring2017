<?php

/**
 * Description of validation
 *
 * @author James
 */
class validation {
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
}
