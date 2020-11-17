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
            <label for="kilometer">Hur många kilometer ska du köra?</label>
            <input type="kilometer" name="kilometer">
            <label for="dagar">Hur många dagar ska du ha bilen?</label>
            <input type="dagar" name="dagar">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $kilometer = filter_input(INPUT_POST, "kilometer", FILTER_SANITIZE_STRING);
        $dagar = filter_input(INPUT_POST, "dagar", FILTER_SANITIZE_STRING);
        if ($kilometer && $dagar) {
            $perKm = $kilometer * 5;
            $perDag = $dagar * 400;
            $totalPris = 500 + $perDag + $perKm;
            echo "<p>Det kommer att kosta $totalPris kr för $kilometer km och $dagar dagar</p>";
        }

        ?>
    </div>
</body>
</html>