<?php
/*
* En enkel blogg där inlägg lagras i en textfil.
* PHP version 7
* @category   Webbapp
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="#" method="post">
                <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
                <button class="btn btn-primary">Spara inlägg</button>
            </form>
        </main>
        <?php
        // Ta emot data från formuläret
        /* if (isset($_POST["inlagg"])) {
            // Skapa en intern variabel med datan
            $texten = $_POST["inlagg"]; */

            // Läs in från formuläret och rensa från hot
            $texten = filter_input(INPUT_POST, "inlagg", FILTER_SANITIZE_STRING);
            // Om vi får data
            if($texten) {
            // Förbered texten för html-utskrift
            $textenMedBr = str_replace("\n", "<br>", $texten);


            // Klockslag och dagens datum
            setlocale(LC_ALL, "sv_SE.utf8");
            $datumstämpel = strftime("%A %e %B kl: %H:%M");

            // Vad heter textfilen?
            $filnamn = "blogg.txt";

            // Är filen skrivbar?
            if (is_writable($filnamn)){
                // Steg 1 Får vi öppna filen?
                if (!$handle = fopen($filnamn, 'a')) {
                   echo "<p class=\" alart alert-warning\">Filen gick inte att öppna</p>";
                    exit;
                } 
                // Steg 2 Går det bra att skriva i filen?
                if (fwrite($handle, "<p>$datumstämpel<br>$textenMedBr</p>\n") === FALSE) {
                    echo "<p class=\" alart alert-warning\">Det går inte att skriva</p>";
                    exit;
                }
                // Steg 3 Avbryt anslutning med textfilen
            fclose($handle);

            echo "<p class='alert alert-info'>Ditt inlägg laddades upp!</p>";
            }else {
                echo "<p class=\" alart alert-warning\">Filen är inte skrivbar</p>";
            }
         
            // Steg 2 skriv texten
            
            
            
        }
        
        ?>
        <footer>
            2020
        </footer>
    </div>
</body>
</html>