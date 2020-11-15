<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://sv.wikipedia.org/wiki/Neymar");

        // Sök början på texten
        $start = strpos($sidan, "mw-headline") ;
        if ($start !== false) {
            echo "<p>Sidan började på position $start</p>";
        } else {
            echo "<p>Hittade inte Sidans början!</p>";
        }

        // Hitta var horoskopet slutar
        $slut = strpos($sidan, "Santos", $start);
        if ($slut !== false) {
            echo "<p>Sidan slutar på position $slut</p>";
        } else {
            echo "<p>Hittade inte Sidans slut!</p>";
       }

       $caNeymarText = substr($sidan, $start + 32, $slut - $start);
       echo $caNeymarText;

       
       // Första delen värdurens rubrik
       /* $start = strpos($caNeymarText, "<div class=\"o-indenter\">");
       $slut = strpos($caNeymarText, "</div>", $start);
       $del1 = substr($caNeymarText, $start, $slut - $start);
       echo "$del1</div>\n";
       
       // Andra delen
       $start = strpos($caNeymarText, "<div class=\"o-indenter\">", $slut);
       $slut = strpos($caNeymarText, "</div>", $start);
       $del2 = substr($caNeymarText, $start, $slut - $start);
       echo "$del2</div>\n"; */

       // Hämta alla div-boxar 

      /*  for ($i = 0; $i < 24; $i++) {
        $start = strpos($caNeymarText, "<p>", $slut);
        $slut = strpos($caNeymarText, "</p>", $start);
        $del2 = substr($caNeymarText, $start, $slut - $start);
        echo "$del2</div>\n";
       } */
       
        ?>
    </div>
</body>
</html>