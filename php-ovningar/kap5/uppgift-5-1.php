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
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Tal till text</h1>
        <form action="#" method="POST">
            <textarea name="" id="textarea" cols="30" rows="10"></textarea>
            
        
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        $textarea = file_get_contents("#textarea");
        $handtag = fread("areatext.txt", "w");
        fwrite($handtag, $textarea);
        fclose($handtag);
        ?>
    </div>
</body>
</html>