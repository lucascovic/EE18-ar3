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
        <h1>Hyra bil</h1>
        <form action="#" method="POST">
            <label for="land">Vilket land vann VM i fotboll 1994</label>
            <input type="land" name="land">
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Finns data?
        $land = filter_input(INPUT_POST, "land", FILTER_SANITIZE_STRING);
        
        if ($land) {
        $land = strtolower($land);

        if ($land == "sverige") {
            echo "<p>Det var rätt</p>";
        } else {
            echo "<p>Du hade fel</p>";
        }
        
    }
        ?>
    </div>
</body>
</html>