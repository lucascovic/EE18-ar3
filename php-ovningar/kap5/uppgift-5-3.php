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
        <h1>Spara i gästboken</h1>
        <form action="#" method="POST">
            <label for="namn">Ange ditt namn</label>
            <input type="namn" name="namn">
            <label for="mail">Ange din mail</label>
            <input type="mail" name="mail">
            <label for="meddelande">Ange ditt meddelande</label>
            <textarea name="meddelande" id="meddelande" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Spara</button>
            
           
        </form>
        <?php
        // Finns data?
    if (isset($_POST["namn"],$_POST["mail"],$_POST["meddelande"])) {
        //Läs in från  formuläret
        $namn = $_POST["namn"];
        $mail = $_POST["mail"];
        $meddelande = $_POST["meddelande"];
        
       // Läs av från filen
       $fil = fopen("gastbok.txt", "a");
        fwrite($fil, "$namn $mail <br> \n"); 
        fwrite($fil, "$meddelande<br>\n");
        fclose($fil);

        
    }
        ?>
    </div>
</body>
</html>

   