<?php

/**
 * En enkel blogg som använder en databas
 * 
 * PHP version 7
 * @category   Webbapplikation med databas
 * @author     Lucas Coivc lucascovic@gmail.com
 * @license    PHP CC
 */
include "./resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>artister</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>artister</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link" href="./admin/skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök</a></li>
            </ul>
        </nav>

        <?php
        // Steg 2. SQL frågan
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);

        // Gick det bra?
        if (!$result) {
            die("Något blev fel med SQL-satsen: " . $conn->error);
        } else {
            echo "<p class=\"alert alert-primary\">Hämtade " . $result->num_rows . " inlägg</p>";
        }

        
        // Steg 3
        // Presentera resultatet
        while ($rad = $result->fetch_assoc()) {
            echo "<div class=\"inlägg\">";
            echo "<h5>$rad[artister]</h5>";
            echo "<h6>$rad[postDate]</h6>";
            echo "<h5>$rad[song]</h5>";
            echo "<p>$rad[postText]</p>";
            echo "<img src=\"artist-db/$rad[bild]\">";
            echo "</div>";
        }
        // Steg 4: Stäng ner anslutning till databasen
        $conn->close();
        ?>
    </div>
</body>
</html>