<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skriv ut csv-fil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>NTI lunchrestauranger</h1>
        <form class="bg-light" action="#" method="POST">
            <label>Ange filnamn</label>
            <input class="form-control" type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Läs in</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["filnamn"])) {
            //Läs in från  formuläret
            //Variabler 
            $filnamn = $_POST["filnamn"];
            $antalRader = 0;

            // Läs av från filen
            if (is_readable($filnamn)) {

                //Hitta filen som ges i formuläret
                $rader = file($filnamn);

                //Skapa formuläret
                echo "<p class='alert alert-primary'>Filen hittades</p>";
                
                echo "<table class='table table-striped'>";
                echo "<tr><th>Restaurang</th><th>Gata</th><th>Postnr</th><th>Ort</th></tr>";
    
                //Foreach loop för att visa restauranger och gata o.s.v
                foreach ($rader as $rad) {

                    $delar = explode(",", $rad);
                    echo "<tr><td>$delar[0]</td><td>$delar[1]</td><td>$delar[2]</td><td>$delar[3]</td> </tr>";
                    $antalRader++;
                    
                }
                
                echo "</table>";
                echo "<p class='alert alert-info'>Rader hittade $antalRader</p>";      
            }
            //Om filen inte finns så kommer detta upp istället för tabell 
            else {
                echo "<p class='alert alert-danger'>Filen finns inte</p>";
            }
            
        }

        ?>
    </div>
</body>
</html>