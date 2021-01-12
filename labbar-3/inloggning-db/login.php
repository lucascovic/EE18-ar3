<?php
/*
* PHP version 7
* @category   Inloggning
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
include "./resurser/conn.php";
session_start();
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
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./login.php">Logga in</a></li>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Logga ut</a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                <li class="nav-item"><a class="nav-link" href="./registrera.php">Registera</a></li>
            </ul>
        </header>
        <main>
            <form action="#" method="post">
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="lösen" required></label>
                <button>Logga in</button>
            </form>
            <?php
            // Ta emot data
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);


            // Kontrollera om data finns 
            if ($anamn && $lösen) {

                // Finns användaren i tabellen?
                $sql = "SELECT * FROM user WHERE anamn = '$anamn'";
                $result = $conn->query($sql);

                // Om användarnamnet inte finns gå vidare med registrering
                if ($result->num_rows == 0) {
                    echo "<p>Användarnamnet finns inte</p>";
                } else {


                    // Plocka ut hashet för användaren
                    $rad = $result->fetch_assoc();
                    $hash = $rad['hash'];
                    // Kontrollera lösenordet
                    if (password_verify($lösen, $hash)) {
                        // Inloggad 
                       echo "<p>Du är inloggad</p>";
                       $_SESSION["anamn"] = $anamn;
                    } else {
                        // Fel
                        echo "<p>Fel användarnamn eller lösen</p>";
                    }
                }
            }
            ?>
        </main>
    </div>
</body>
</html>