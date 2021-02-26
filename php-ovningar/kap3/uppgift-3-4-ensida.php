<?php
/*
* Gör ett skript som är en lånekalkylator. Mha radioknappar ska användaren kunna välja mellan 1, 3 och 5 års lånetid. I en ruta ska användaren skriva i lånebeloppet och i nästa räntan i hela procent. Programmet ska sedan räkna ut den totala lånekostnaden. Räknas ut genom ränta på ränta-principen, årsvis). Så för ett tvåårigt lån på 5000 med räntan 4% skulle alltså lånekostnaden bli 5000*1,04*1,04 - 5000. Observera att lånet är "amorteringsfritt".
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ränta-räknare</h1>
        <form action="#" method="POST">
            <label for="tal1">Ange tal 1</label>
            <input id="tal1" class="form-control" type="text" name="tal1" required>
            <label for="tal2">Ange tal 2</label>
            <input id="tal2" class="form-control" name="tal2" type="text" required>
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        if (isset($_POST["tal1"], $_POST["tal2"])) {
            // Ta emot data från formuläret
            $tal1 = $_POST["tal1"] + 1;
            $tal2 = $_POST["tal2"];

            // Är tal1 mindre än tal2?
            if ($tal1 < $tal2) {
                // Skriv ut alla tal mellan tal1 och tal2
                for ($i = $tal1; $i < $tal2; $i++) {
                    $kvadrat = $i * $i;
                    if ($kvadrat <= $tal2) {
                        echo "$kvadrat ";
                    }
                    
                }
            } else {
                echo "<p>Tal1 måste vara mindre än tal2</p>";
            }
        }
        ?>
    </div>
</body>
</html>