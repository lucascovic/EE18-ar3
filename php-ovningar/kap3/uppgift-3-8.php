<?php
/*
* På det nationella provet i Matematik 1 våren 2018 så fanns följande poänggränser för olika provbetyg.
* Skapa ett skript som frågar användaren hur många poäng hen fick på detta prov. Skriptet ska säga vilket provbetyg användaren fick.
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
        <h1>Poäng från prov</h1>
        <form action="#" method="POST">
            <label for="namn">Ange provpoäng</label>
            <input id="namn" class="form-control" type="text" name="poäng" required>
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        //Finns data? (När man kommer tillbaka till sidan)
        if (isset($_POST["poäng"])) {
            // Ta emot data från formuläret
            $poäng = $_POST["poäng"];
            
            if ($poäng < 15) {
                echo "<p>Du fick F</p>";
            }
            elseif ($poäng >= 15 && $poäng <= 24 ) {
                echo "<p>Du fick E</p>";
            }
            elseif ($poäng >= 25 && $poäng <= 34 ) {
                echo "<p>Du fick D</p>";
            }
            elseif ($poäng >= 35 && $poäng <= 44 ) {
                echo "<p>Du fick C</p>";
            }
            elseif ($poäng >= 45 && $poäng <= 54 ) {
                echo "<p>Du fick B</p>";
            }
            elseif ($poäng >= 55 ) {
                echo "<p>Du fick A</p>";
            }

        }
        ?>
    </div>
</body>
</html>