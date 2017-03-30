<?php
$temp = "";
function isZipValid($zip) {
    $zipRegex = '/^[0-9]{5}$/';
    if (preg_match($zipRegex, $zip)) {
        return 'true';
    }
    
    return 'false';
}

function isDateValid($birthday) {
    return (bool)strtotime($birthday);
}
/*
function isEmailValid($email) {
     $emailRegex = '/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/';
     if (preg_match($emailRegex, $email)) {
         return 'true';
     }

    return 'false';
}*/

