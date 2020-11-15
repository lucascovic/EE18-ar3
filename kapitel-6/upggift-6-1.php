<?php
/*
* PHP version 7
* @category   Kontrollera inmatning
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>Kontrollera inmatning</h1>
        <form action="#" method="POST">
            <label for="namn">Namn</label>
            <input type="namn" name="namn">
            <label for="adress">Adress</label>
            <input type="adress" name="adress">
            <label for="postnr">Postnr</label>
            <input type="postnr" name="postnr">
            <label for="postort">Postort</label>
            <input type="postort" name="postort">
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Läs in från formuläret och rensa från hot
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
        $postnr = filter_input(INPUT_POST, "postnr", FILTER_SANITIZE_STRING);
        $postort = filter_input(INPUT_POST, "postort", FILTER_SANITIZE_STRING);
        // Om vi får data
        if($namn && $adress && $postnr && $postort) {

        // Kontrollera att alla fälten innehåller minst 3 tecken: strlen()
            if(strlen($namn) < 3){
                echo "<p class\"alert alert-warning\"Namnet måste vara minst 3 tecken långt</p>";
            }
            if(strlen($adress) < 3){
                echo "<p class\"alert alert-warning\"Adress måste vara minst 3 tecken långt</p>";
            }
            
            if(strlen($postort) < 3){
                echo "<p class\"alert alert-warning\"Postort måste vara minst 3 tecken långt</p>";
            }
            
        // Kontrollera att postnumret innehåller 5 tecken strlen()
        if(strlen($postnr) < 5){
            echo "<p class\"alert alert-warning\"Postnr måste vara 5 tecken långt</p>";
        }
        // Kontrollera att postnumret innehåller endast siffror
        if (!is_numeric($postnr)) {
            echo "<p class\"alert alert-warning\"Postnr måste vara siffror</p>";
        }
        }
        ?>
    </div>
</body>
</html>