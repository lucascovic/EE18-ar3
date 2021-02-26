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
            <label for="epost">Ange epost</label>
            <input class="form-control" type="epost" name="epost" required>
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
        <?php
        // Läs in från formuläret och rensa från hot
        $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);
        
        // Om vi får data
        if ($epost) {
            
        // Dela upp med explode
        $delar = explode("@", $epost);
        // var_dump($delar);
        echo "<p>Namndelen: $delar[0]; </p>";
        echo "<p>Domän:$delar[1]; </p>";

        // Dela upp substr()
        $namn = substr($epost, 0, 5);
        $domän = substr($epost, -9);
        echo "<p>Namndelen: '$namn', och domän är '$domän'</p>";

        //Dela upp med substr() mha strpost()
        // Hitta position på '@' i $epost
        $position = strpos($epost, "@");
        echo "<p>'@' finns på position $position</p>";
        $namn = substr($epost, 0, $position);
        echo "<p>Namndelen är $namn</p>";
        $domän = substr($epost, $position + 1);
        echo "<p>Domändelen är $domän</p>";

        // Räkna antalet täcken i $epost
        $längd = strlen($epost);
        echo "<p>Antalet tecken är $längd</p>";
        $domän = substr($epost, -($längd - $position - 1));
        echo "<p>Domän är $domän</p>";

        // Kan vi använda strstr()
        $domän = strstr($epost, "@");
        $domän = strstr($domän, 1);
        echo "<p>Domän är '$domän'</p>";
        $namn = strstr($epost, "@", true);
        echo "<p>Namndelen är '$namn'</p>";
        }
        ?>
    </div>
</body>
</html>