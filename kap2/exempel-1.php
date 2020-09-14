<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapitel 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    /* Skriver vilken dag det är */
    /*   echo "<p>Idag är det \"";
    echo date("l");
    echo "\".</p>"; */

    /* Smartare sätt att skriva */
    // echo "<p>Idag är det \"" . date("l") . "\".</p>";


    /* Med en variabel */
    /* $idag = date("l");
    echo "<p>Idag är det \"" . $idag . "\".</p>"; */

    // Ännu smartare sätt att skriva 
    /* echo "<p>Idag är det \"$idag\" .</p>"; */
    
    // Det är funkar inte 
    /* echo '<p>Idag är det \"$idag\".</p>'; */

    //dagens datum
    // Inte $dDatum säger ingenting
    //Undvik $d
    // Undvik $dat

    //dagens datum
    $dagensDatum = date("d");
    $månad = date("F");
    $dag = date("l");
    /* Idag är monday 14 semptember */
    echo "<p>Idag är $dag $dagensDatum $månad </p>";

    // Hämta ut några server variabler 
    echo "<P>$_SERVER[SERVER_ADDR]</p>"
    ?>
</body>
</html>