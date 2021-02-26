<?php
/*
* PHP version 7
* @category   
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tal till text</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Spara texten i en fil</h1>
        <form action="#" method="POST">
            <label for="text">Ange din text</label>
            <textarea name="texten" id="textarea"></textarea>
            <button type="submit" class="btn btn-primary">Spara</button>
            
           
        </form>
        <?php
        // Finns data?
    if (isset($_POST["texten"])) {
        //Läs in från  formuläret
        $texten = $_POST["texten"];
        echo "<p>$texten</p>";

        //Spara texten i en textfil
        $fil = fopen("text.txt", "w");
        fwrite($fil, $texten);
        fclose($fil);
    }
        ?>
    </div>
</body>
</html>

   