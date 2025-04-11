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
    <header class="text-center text-white">
        <h1 class="my-3">STRONG PASSWORD GENERATOR</h1>
    </header>
    <main>
    <section class="container mt-4">
    <h2 class="mb-4 text-center text-white">Genera una password sicura</h2>

        <form action="" method="GET" class="d-flex flex-column mx-auto align-items-center p-3 rounded-4 w-75">
            <div class="d-flex align-items-center gap-1">
            <p class="mt-3">Lunghezza password:</p>
            <input id="password-length" name="password-length" type="number" min="5" max="15" required>
            <p class="mt-3">caratteri</p>
            </div>

            <p>Seleziona quali tipi di carattere devono essere presenti nella password</p>

            <div class="d-flex align-items-center gap-2 mb-2 bg-white py-1 px-2 rounded-2">
            <label for="uppercase">Lettere maiuscole</label>
            <input id="uppercase" name="uppercase" type="checkbox" checked>
            </div>

            <div class="d-flex align-items-center gap-2 mb-2 bg-white py-1 px-2 rounded-2">
            <label for="lowercase">Lettere minuscole</label>
            <input id="lowercase" name="lowercase" type="checkbox" checked>
            </div>

            <div class="d-flex align-items-center gap-2 mb-2 bg-white py-1 px-2 rounded-2">
            <label for="numbers">Numeri</label>
            <input id="numbers" name="numbers" type="checkbox" checked>
            </div>

            <div class="d-flex align-items-center gap-2 bg-white py-1 px-2 rounded-2">
            <label for="symbols">Simboli</label>
            <input id="symbols" name="symbols" type="checkbox" checked>
            </div>

            <button type="submit" class="ms-btn border-0 mt-4 py-2 px-5 mx-auto rounded-3 fw-semibold text-white">Genera</button>

        </form>
    </section>
    </main>

</body>

</html>