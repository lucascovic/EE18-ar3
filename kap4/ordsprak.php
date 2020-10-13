<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="ordsprak.css">
</head>
<body>
<?php
    // Skapa en array med tio ordspråk
    $ordsprak = ["Blyga pojkar får aldrig kyssa vackra flickor.", "Alla goda ting är tre.", "Anfall är bästa försvar", "Bra karl reder sig själv", "Ensam är stark.", "Först till kvarn får först mala.", "Gammal är äldst", "Hunger är den bästa kryddan", "I nöden prövas vännen.", "Kärt barn har många namn", "Man saknar inte kon förrän båset är tomt.", "Mota Olle i grind", "Så länge det finns liv finns det hopp."];
    

    // Slumpa fram ett tal mellan 0 och 9 med funktionen rand()
    rand(0,9);
    

    // Skriv ut ordspråket 
    echo $ordsprak[rand(0,12)];
    echo "<br>";
    echo "<br>";

    // For loop för 6st
    for ($i = 1; $i < 7; $i++) {
        echo $ordsprak[rand(0,9)];
        echo "<br>";
    }
?>
</body>
</html>