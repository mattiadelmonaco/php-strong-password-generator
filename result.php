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

    <main id="result-main" class="mx-auto align-items-center p-3 rounded-4 w-75">
        <div class="d-flex flex-column align-items-center">
            <h2>La tua password sicura è: </h2>
            <!-- passwordGenerator è la funzione importata da functions.php -->
            <p class="fs-1 fw-semibold text-success"><?php echo passwordGenerator() ?></p> 
        </div>

    <div class="d-flex justify-content-around gap-2">
        <a href="index.php" class=" ms-a link-dark text-decoration-none p-2 rounded-2"><i class="fa-regular fa-circle-left"></i> Torna indietro</a>
        <a href="result.php" class=" ms-a link-dark text-decoration-none p-2 rounded-2">Genera nuova password</a>
    </div>

    </main>
</body>
</html>