<?php

session_start();

$passwordLength = $_SESSION["password"];

$upperCaseOn = $_SESSION["uppercase"];
$lowerCaseOn = $_SESSION["lowercase"];
$numbersOn = $_SESSION["numbers"];
$symbolsOn = $_SESSION["symbols"];

function passwordGenerator() {
    global $passwordLength;
    global $upperCaseOn;
    global $lowerCaseOn;
    global $numbersOn;
    global $symbolsOn;

    if (!$upperCaseOn && !$lowerCaseOn && !$numbersOn && !$symbolsOn) {
        return "Errore: nessuna tipologia di carattere inserita. Riprova";
    }

    $password = "";
    $i = 0;

    while($i < $passwordLength) {
        $randomChar = rand(1,4); // 1 = numero, 2 = minuscola, 3 = maiuscola, 4 = set di simboli

        if ($randomChar === 1 && $numbersOn) {
            $char = rand(0,9);
        } else if ($randomChar === 2 && $lowerCaseOn) {
            $char = chr(rand(97, 122));
        } else if ($randomChar === 3 && $upperCaseOn) {
            $char = chr(rand(65, 90));
        } else if ($randomChar === 4 && $symbolsOn) {
            $char = chr(rand(33, 47));
        } else {
            continue;
        }

       $password .= $char;
       $i++;
    }

    return $password;
}

?>