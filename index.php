<?php

$passwordLength = $_GET["password-length"];

function passwordGenerator() {
    global $passwordLength;
    $password = "";

    for($i = 1; $i <= $passwordLength; $i++) {
        $randomChar = rand(1,5); // 1 = numero, 2 = minuscola, 3 = maiuscola, 4 = primo set di simboli, 5 = secondo set di simboli

        if ($randomChar === 1) {
            $char = rand(1,9);
        } else if ($randomChar === 2) {
            $char = chr(rand(97, 122));
        } else if ($randomChar === 3) {
            $char = chr(rand(65, 90));
        } else if ($randomChar === 4) {
            $char = chr(rand(33, 47));
        } else if ($randomChar === 5) {
            $char = chr(rand(58, 64));
        }
       $password .= $char;
    }

    return $password;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <header>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>
    <section>
        <form action="" method="GET">
            <label for="password-length">Lunghezza password</label>
            <input id="password-length" name="password-length" type="number" min="5" max="15" required>

            <button type="submit">Genera</button>

        </form>
    </section>

    <h1>La tua password sicura è: <?php echo passwordGenerator() ?></h1>
</body>

</html>