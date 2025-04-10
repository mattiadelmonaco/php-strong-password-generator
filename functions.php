<?php

session_start();

$passwordLength = $_SESSION["password"];

function passwordGenerator() {
    global $passwordLength;
    $password = "";

    for($i = 1; $i <= $passwordLength; $i++) {
        $randomChar = rand(1,4); // 1 = numero, 2 = minuscola, 3 = maiuscola, 4 = set di simboli

        if ($randomChar === 1) {
            $char = rand(1,9);
        } else if ($randomChar === 2) {
            $char = chr(rand(97, 122));
        } else if ($randomChar === 3) {
            $char = chr(rand(65, 90));
        } else if ($randomChar === 4) {
            $char = chr(rand(33, 47));
        } 
       $password .= $char;
    }

    return $password;
}

?>