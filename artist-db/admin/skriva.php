<?php

/**
 * En enkel blogg som använder en databas
 * 
 * PHP version 7
 * @category   Webbapplikation med databas
 * @author     Lucas Coivc lucascovic@gmail.com
 * @license    PHP CC
 */
include "../resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artister</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Artister</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="../lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link active" href="./admin/skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="../sok.php">Sök</a></li>
            </ul>
        </nav>
        <form action="#" method="POST" enctype="multipart/form-data">
            <label>Ange Artist <input type="text" name="artister" required></label>
            <label>Ange en låt från artist <input type="text" name="song" required></label>
            <label>Skriv valfritt om artister <textarea name="postText"></textarea></label>
            <label>Lägg till bild</label>
            <input type="file" name="file">
            <button type="submit" name="submit">Ladda upp</button>

        </form>
        <?php
        // Ta emot det som skickas
        $artister = filter_input(INPUT_POST, 'artister', FILTER_SANITIZE_STRING);
        $song = filter_input(INPUT_POST, 'song', FILTER_SANITIZE_STRING);
        $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);

        // Om data finns..
        if ($artister && $song && $postText) {
            $fileDestination = "";
            if (isset($_POST["submit"])) {

                // Ta emot filen
                $file = $_FILES["file"];
                var_dump($file);

                // Information om filen
                $fileName = $file["name"];
                $fileSize = $file["size"];
                $fileType = $file["type"];
                $fileTempName = $file["tmp_name"];
                $error = $file["error"];

                // Tillåtma filtyper 
                $allowed = ["jpeg", "png", "gif"];

                // Bilden filtyp
                $delar = explode("/", $fileType);
                $imageType = $delar[1];

                if (in_array($imageType, $allowed)) {

                    if ($error === 0) {
                        // Är filen för stor?
                        if ($fileSize <= 200000) {
                            // Skapa ett unikt filnamn
                            $fileNameNew = uniqid("", true) . ".$imageType";
                            var_dump($fileNameNew);
                            // Var filen ska hamna 
                            $fileDestination = "../uppladdat/$fileNameNew";
                            var_dump($fileDestination);
                            // Äntligen ! Flytta filen in i mappen
                            move_uploaded_file($fileTempName, $fileDestination);
                        } else {
                            echo "<p>Något gick fel</p>";
                        }
                    } else {
                        echo "<p>Filtypen är inte tillåten</p>";
                    }
                }
            }
            // SQL-satsen
            $sql = "INSERT INTO post (artister, song, postText, bild) VALUES ('$artister', '$song', '$postText', '$fileDestination')";
            var_dump($sql);
            // Steg 2: nu kör vi sql-satsen
            $result = $conn->query($sql);
            var_dump($result);
            // Gick det bra att köra SQL-satsen?
            if (!$result) {
                die("Något blev fel med SQL-satsen");
            } else {
                echo "<p>Inlägget har registrerats</p>";
            }
           
            // Steg 3: Stänga ned anslutningen
            $conn->close();
        }
        ?>
    </div>
</body>
</html>