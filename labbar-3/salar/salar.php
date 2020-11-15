<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skolans salar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Skolans salar</h1>
        <?php
        // Textfilen som skall läsas in
        $tsvfil = "salar.tsv";


        // Är filens läsbar?
        if (is_readable($tsvfil)) {
            echo "<p>filen går att läsa</p>";
            // Läs in filens alla rader
            $rader = file($tsvfil);

            // Loopa igenom alla rader
            foreach ($rader as $rad) {
                echo "<p>$rad</p>";

                // Skippa första raden som innehåller 'id'
                if (substr($rad, 0, 2) == "id") {
                    continue;
                }
                // Plocka ut det som vi behöver
            $delar = explode($rad,"\t");

            // Dela upp raden i dess delar
            $salNrNamn = $delar[1];
            $bokbar = $rader[3];
            }


            

            // Visa salar i en tabell med kolumnrubriker: nr/namn, bokbar
        } else {
            echo "<p>går inte att läsa</p>";
        }






        ?>
    </div>
</body>
</html>