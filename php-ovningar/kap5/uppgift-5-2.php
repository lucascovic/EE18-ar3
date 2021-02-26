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
        <h1>Läs valfri textfil</h1>
        <form action="#" method="POST">
            <label for="text">Ange textfil</label>
            <input type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Läs</button>
            
           
        </form>
        <?php
        // Finns data?
    if (isset($_POST["filnamn"])) {
        //Läs in från  formuläret
        $filnamn = $_POST["filnamn"];
        
       // Läs av från filen
       $allText = file_get_contents($filnamn);
       //Skriv ut på skärmen
        echo "<p>$allText</p>";

        
    }
        ?>
    </div>
</body>
</html>

   