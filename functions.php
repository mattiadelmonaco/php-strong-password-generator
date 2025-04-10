<?php

session_start(); //inizializzo sessione

$passwordLength = $_SESSION["password"]; //variabili che contengono i valori dei vari campi get presi dalla sessione
$upperCaseOn = $_SESSION["uppercase"];
$lowerCaseOn = $_SESSION["lowercase"];
$numbersOn = $_SESSION["numbers"];
$symbolsOn = $_SESSION["symbols"];

function passwordGenerator() {
    global $passwordLength; //global si usa per rendere la variabile visibile all'interno della funzione
    global $upperCaseOn;
    global $lowerCaseOn;
    global $numbersOn;
    global $symbolsOn;

    // controllo se nessuna checkbox è stata selezionata
    if (!$upperCaseOn && !$lowerCaseOn && !$numbersOn && !$symbolsOn) {
        return "Errore: nessuna tipologia di carattere inserita. Riprova";
    }

    $password = "";
    $i = 0; //valore iniziale indice del ciclo

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
            continue; //se nessun carattere viene generato fa ripartire il ciclo finchè non viene generato un carattere
        }

       $password .= $char; //nel valore di password viene aggiunto il carattere generato 
       $i++; //incremento del ciclo ad ogni iterazione
    }

    return $password;
}

?>