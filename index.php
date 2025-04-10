<?php

session_start();
            
if (isset($_GET["password-length"])) {
    $_SESSION["password"] = $_GET["password-length"];
    header("Location: ./result.php");
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
    <main>
    <section>
        <form action="" method="GET">
            <label for="password-length">Lunghezza password</label>
            <input id="password-length" name="password-length" type="number" min="5" max="15" required>

            <button type="submit">Genera</button>

        </form>
    </section>
    </main>

</body>

</html>