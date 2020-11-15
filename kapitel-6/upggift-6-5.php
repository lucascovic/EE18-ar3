<?php
/*
* PHP version 7
* @category   Kontrollera inmatning
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>Parsa epost</h1>
        <form action="#" method="POST">
            <label for="lösen">Ange lösen</label>
            <input class="form-control" type="lösen" name="lösen" required>
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Läs in från formuläret och rensa från hot
        $lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);
        
        // Om vi får data
        if ($lösen) {
        //Minimum 8 characters
        $längd = strlen($lösen);

        if ($längd < 8) {
            echo "<p>Lösenordet är för kort</p>";
        }else {
           
        }

        // Uppercase letters
        $versaler = ["A","B","C","D","E","F","G","H","J","I","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","Å","Ä","Ö"];

        $flagga = false;
        foreach ($versaler as $versal) {
            $pos = strpos($lösen, "$versal");
        if ($pos !== false) {
           $flagga = true;
        } 
    }
    if ($flagga == true) {
        echo "<p>Lösenordet innehåller minst en versaler</p>";
    } else {
     echo "<p>Lösenordet innehåller inga versaler</p>";
    }
    
         
        };
        
        
        // Lowercase letters
        }
        ?>
    </div>
</body>
</html>