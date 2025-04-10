<?php

// inizializzo la sessione
session_start();

// se la lunghezza della password è settata (dopo il submit) inserisco tutti i campi get nelle sessioni 
if (isset($_GET["password-length"])) {
    $_SESSION["password"] = $_GET["password-length"];

    $_SESSION["uppercase"] = isset($_GET["uppercase"]) ? true : false; // valori false in caso non vengono spuntate le checkboxx
    $_SESSION["lowercase"] = isset($_GET["lowercase"]) ? true : false;
    $_SESSION["numbers"] = isset($_GET["numbers"]) ? true : false;
    $_SESSION["symbols"] = isset($_GET["symbols"]) ? true : false;

    header("Location: ./result.php"); //rimando a pagina risultato
    exit(); //interrompe esecuzione script dopo il redirect
} 

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
     <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- /GOOGLE FONTS -->
     <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- /FONT AWESOME -->

     <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <header>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>
    <main>
    <section>
        <form action="" method="GET">
            <label for="password-length">Lunghezza password</label>
            <input id="password-length" name="password-length" type="number" min="5" max="15" required>

            <p>Seleziona quali tipi di carattere devono essere presenti nella password</p>

            <label for="uppercase">Lettere maiuscole</label>
            <input id="uppercase" name="uppercase" type="checkbox">

            <label for="lowercase">Lettere minuscole</label>
            <input id="lowercase" name="lowercase" type="checkbox">

            <label for="numbers">Numeri</label>
            <input id="numbers" name="numbers" type="checkbox">

            <label for="symbols">Simboli</label>
            <input id="symbols" name="symbols" type="checkbox">

            <button type="submit">Genera</button>

        </form>
    </section>
    </main>

</body>

</html>