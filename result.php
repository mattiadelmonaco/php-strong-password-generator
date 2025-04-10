<?php

include "./functions.php"; //importo il file functions.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->
</head>
<body>
    <main>
        <!-- passwordGenerator è la funzione importata da functions.php -->
    <h1>La tua password sicura è: <?php echo passwordGenerator() ?></h1> 
<a href="index.php">Torna indietro</a>
<a href="result.php">Genera nuova password</a>

    </main>
</body>
</html>