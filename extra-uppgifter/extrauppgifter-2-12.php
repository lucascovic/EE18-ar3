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
            <label for="max">Ange hur många meter Max hoppade</label>
            <input type="max" name="max">
            <label for="jacob">Ange hur många meter Jacob hoppade</label>
            <input type="jacob" name="jacob">
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Finns data?
        $max = filter_input(INPUT_POST, "max", FILTER_SANITIZE_STRING);
        $jacob = filter_input(INPUT_POST, "jacob", FILTER_SANITIZE_STRING);
        if ($max && $jacob) {
        $total = $max - $jacob;

        echo "<p>Max hoppade $total m mer än Jacob!</p>";
        }
        
        ?>
    </div>
</body>
</html>