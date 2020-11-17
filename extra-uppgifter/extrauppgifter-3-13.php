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
        <h1>Dator</h1>
        <form action="#" method="POST">
            <label for="dator">Hur många datorer har du?</label>
            <input type="dator" name="dator">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $dator = filter_input(INPUT_POST, "dator", FILTER_SANITIZE_STRING);

        if ($dator) {

        if ($dator == 1) {
            echo "<p>Du har $dator dator</p>";
        }else {
            echo "<p>Du har $dator datorer</p>";
        }

        }


        ?>
    </div>
</body>
</html>