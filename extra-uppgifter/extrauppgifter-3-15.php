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
        <h1>Tävling</h1>
        <form action="#" method="POST">
            <label for="skola">Har du gått ut gymnasiet? svara med j för ja och n för nej</label>
            <input type="skola" name="skola">
            <label for="ålder">Hur gammal är du?</label>
            <input type="ålder" name="ålder">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $skola = filter_input(INPUT_POST, "skola", FILTER_SANITIZE_STRING);
        $ålder = filter_input(INPUT_POST, "ålder", FILTER_SANITIZE_STRING);

        if ($ålder && $skola) {

        if ($skola = "j" && $ålder < 22) {
            echo "<p>Vi vill gärna anställa dig!</p>";
        }elseif ($skola = "n") {
            echo "<p>Vi söker annan personal!</p>";
        }
       
        }


        ?>
    </div>
</body>
</html>