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
        <h1>Spara i gästboken</h1>
        <form action="#" method="POST">
            <label for="år">Ange årtal</label>
            <input type="år" name="år">
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Finns data?
        $input = filter_input(INPUT_POST, "år", FILTER_SANITIZE_STRING);
        
        // År 2100
        $år2100 = 2100;

        $årKvar =  $år2100 - $input ;
        echo "<p>$årKvar kvar tills år 2100</p>";
        ?>
    </div>
</body>
</html>