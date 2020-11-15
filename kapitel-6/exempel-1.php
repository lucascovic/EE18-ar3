<?php
/*
* PHP version 7
* @category   
* @author     LFilhanteringucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filhantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        
        <?php
        // Rensa från mellanslag i början och slutet på en text
        $epost = " lucas@gmail.com ";
        $epostTrimmad = trim($epost);
        echo "<p>**$epost**$epostTrimmad</p>";

        // Omvandla till små eller bara stora bokstäver
        $svar = "Usa"; // USA, usa, uSa
        $svarGemena = strtolower($svar);
        $svarVersaler = strtoupper($svar);
        $svenska = mb_strtoupper("Hej på dig, är det bra?");
        echo "<p>$svenska</p>";

        // Hur många tecken innehåller detta stycke?
        $stycke = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque voluptatem aliquam tempore quasi est nostrum. Voluptatum quam, dignissimos sapiente obcaecati suscipit explicabo odio ab cum. Id, sit. Minus, libero atque.";
        $antal = strlen($stycke);
        echo "<p>$stycke</p>";
        echo "<p>Antalet tecken = $antal</p>";

        // Plocka ut del av en sträng
        $epost = "kruislo@hotmail.com";
        $namn = substr($epost,0 ,7);
        echo "<p>$namn ur $epost</p>";

        $domain = substr($epost,7 ,12);
        echo "<p>$domain ur $epost</p>";

        $domain = substr($epost,-12);
        echo "<p>$domain ur $epost</p>";

        // Plocka ut domän
        $epost = "kruislo@hotmail.com";
        $domain = strstr($epost, "@");
        echo "<p>$domain ur $epost</p>";

        // Hitta positionen ur @-tecknet
        $epost = "kruislo@hotmail.com";
        $position = strpos($epost, "@");
        echo "<p>@ ligger på position $position</p>";

        // Finns hotmail i inmattad epost
        $epost = "kruislo@hotmail.com";
        if (strpos($epost, "hotmail")!== false) {
           echo "<p>Ja, hotmail finns i epost-adressen</p>";
        } else {
            echo "<p>Nej!</p>";
        }

        // Ersätta text i sträng
        $texten = "Lucas är elev i webb.";
        $exchange = str_replace("Lucas", "Gompa", $texten);
        echo "<p>$exchange</p>";
        
         ?>
    </div>
</body>
</html>