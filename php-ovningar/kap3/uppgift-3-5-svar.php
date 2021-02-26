<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <?php
        // Ta emot data från formuläret
        $belopp = $_POST["belopp"];
        $ränta = $_POST["ränta"];
        $lånetid = $_POST["lånetid"];

        // Start år = 0
        $lånekostnad = $belopp;
        //Räkna ut totala lånekostnaden
        for ($i = 0; $i < $lånetid; $i++) {
          $lånekostnad =  $lånekostnad * (1 + $ränta / 100);
        }
        //Skirv ut resultatet 
        echo "<p>Den totala lånekostnaden efter $lånetid blir $lånekostnad
        kr</p>";
        ?>
        
        
    </div>
</body>
</html>