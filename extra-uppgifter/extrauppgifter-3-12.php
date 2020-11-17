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
        <h1>Idrottsturnering</h1>
        <form action="#" method="POST">
            <label for="plats">Vilken plats kom du?</label>
            <input type="plats" name="plats">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $plats = filter_input(INPUT_POST, "plats", FILTER_SANITIZE_STRING);

        if ($plats) 
        {
            
        
            switch ($plats) {
                case 1:
                    echo "Du fick guld medalj";
                    break;
                case 2:
                    echo "Du fick silver medalj";
                    break;
                case 3:
                    echo "Du fick brons medalj";
                    break;
                default:
                    echo "Du fick ingen medalj";
                    break;
            }
        
    }


        ?>
    </div>
</body>
</html>