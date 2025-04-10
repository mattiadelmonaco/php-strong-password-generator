<?php

include "./functions.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <main>
    <h1>La tua password sicura è: <?php echo passwordGenerator() ?></h1>
<a href="index.php">Torna indietro</a>
<a href="result.php">Genera nuova password</a>

    </main>
</body>
</html>