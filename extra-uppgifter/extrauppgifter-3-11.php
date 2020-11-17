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
        <h1>Fik kampanj</h1>
        <form action="#" method="POST">
            <label for="ålder">Hur gammal är du?</label>
            <input type="ålder" name="ålder">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $ålder = filter_input(INPUT_POST, "ålder", FILTER_SANITIZE_STRING);

        if ($ålder) 
        {
            
        
        if ($ålder >= 12 && $ålder < 19|| $ålder > 65) {
            echo "<p>Du får extrapris på kaffe idag</p>";
        } else {
            echo "<p>Du får betala fullpris idag på kaffet</p>";
        }
        
    }


        ?>
    </div>
</body>
</html>