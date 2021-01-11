<?php
/*
* PHP version 7
* @category   Inloggning
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
include "./resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Inloggning</h1>
        </header>
        <main>
            <form action="#" method="post">
                <label>Förnamn <input type="text" name="fnamn" required></label>
                <label>Efternamn <input type="text" name="enamn" required></label>
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="lösen1" required></label>
                <label>Upprepa lösenord <input type="password" name="lösen2" required></label>
                <button>Registrera</button>
            </form>
            <?php
            // Ta emot data
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösen1 = filter_input(INPUT_POST, "lösen1", FILTER_SANITIZE_STRING);
            $lösen2 = filter_input(INPUT_POST, "lösen2", FILTER_SANITIZE_STRING);

            // Kontrollera om data finns 
            if ($fnamn && $enamn && $anamn && $lösen1 && $lösen2) {

                // @TODO Kontrollera att användarnamnet inte redan finns!

                // Kontrollera att lösenorden matchat
                if ($lösen1 == $lösen2) {

                    // Räkna ut hash
                    $hash = password_hash($lösen1, PASSWORD_DEFAULT);

                    //sql sats
                    $sql = "INSERT INTO user (  fnamn, enamn, anamn, hash) VALUES ('$fnamn', '$enamn', '$anamn', '$hash')";
                    // Kör SQL
                    $conn->query($sql);
                    echo "<p>användaren är registrerad</p>";

                    // Stäng ned anslutningen 
                    $conn->close();
                } else {
                    echo "<p>Lösenorden matchar inte, försök igen!</p>";
                }
            }
            ?>
        </main>
    </div>
</body>
</html>