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
    <title>Folkrikaste land</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Berg och dalbana</h1>
        <form action="#" method="POST">
            <label for="längd">Hur lång är du? (m)</label>
            <input type="längd" name="längd">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $längd = filter_input(INPUT_POST, "längd", FILTER_SANITIZE_STRING);

        if ($längd) 
        {
            
        
        if ($längd < 1.4 || $längd > 1.9) {
            echo "<p>Du är antingen för lång eller kort för att få åka</p>";
        } else {
            echo "<p>Du får åka med på berg och dalbanan</p>";
        }
        
    }


        ?>
    </div>
</body>
</html>