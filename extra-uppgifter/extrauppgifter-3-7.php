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
        <h1>Namndag</h1>
        <form action="#" method="POST">
            <label for="namn">Vad heter du?</label>
            <input type="namn" name="namn">
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Finns data?
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        
        if ($namn) {
        $namn = strtolower($namn);

        if ($namn == "Tova") {
            echo "<p>Du har namnsdag idag!</p>";
        } elseif ($namn == "Abbe") {
            echo "<p>Du har namnsdag imorgon!</p>";
        }else {
            echo "<p>Lucas, du har varken namnsdag idag eller imorgon!</p>";
        }

        
    }
        ?>
    </div>
</body>
</html>