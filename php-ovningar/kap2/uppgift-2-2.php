<!-- Använd formuläret från uppgift 1.2. Skapa ett skript som tar emot data från detta formulär: Skriptet ska skriva ut "Namn:" följt av namnet på personen, "epostadress:" och personens epostadress och till sist "Vi kommer att kontakta dig inom snarast per " följt av antingen epost eller telefon beroende på vad användaren valt. -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $namn = $_POST["anamn"];
    $email = $_POST["aepost"];
    $nummer = $_POST["mobil"];
    $kontakt = $_POST["kontakt"];
    $val = "";
    
    
    
   
    if ($_POST['kontakt'] == "telefon") {
        $val = $nummer;
    } else {
        $val = $email;
    }
   // Skriv ut svaret
    echo "<p>Namn: $namn Vi kommer att ta kontakt med dig snart per $val</p>"
    ?>

    
</body>
</html>