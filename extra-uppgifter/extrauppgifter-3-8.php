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
        <h1>Prov resultat</h1>
        <form action="#" method="POST">
            <label for="points">Hur många poäng fick du?</label>
            <input type="points" name="points">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $points = filter_input(INPUT_POST, "points", FILTER_SANITIZE_STRING);

        if ($points) {
            if ($points < 15) {
                echo "<p>Du fick F</p>";
            } elseif ($points < 25) {
                echo "<p>Du fick E</p>";
            } elseif ($points < 35) {
                echo "<p>Du fick D</p>";
            } elseif ($points < 45) {
                echo "<p>Du fick C</p>";
            } elseif ($points < 55) {
                echo "<p>Du fick B</p>";
            } elseif ($points = 55) {
                echo "<p>Du fick A</p>";
            }
        }



        ?>
    </div>
</body>
</html>