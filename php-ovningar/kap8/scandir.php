<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Skanna katalog</h1>
        <?php
        // Välj katalog
        $katalog = ".";

        // Skriv ut vilken katalog som skannas

        echo "<p>Katalogen: '$katalog'</p>";

        // Skanna av katalogen
        $resultat = scandir($katalog);
        // Vad innehåller resultatet?
        var_dump($resultat);

        // Loopa igenom arrayen $resultat
        foreach ($resultat as $objekt) {
            // Skippa . och .. 
            if ($objekt == "." || $objekt == "..") {
               continue;
            }
            // Skippa under katalogen
            if (is_dir($katalog/$objekt)) {
                continue;
            }

            // Skaffa fram lite info om filen
            $info = pathinfo($objekt);
            //var_dump($info);
            echo "<p>$objekt</p>";
        }
        ?>
    </div>
</body>
</html>
