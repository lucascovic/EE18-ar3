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
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
            <label>Ange text
                <input type="text" name="text" required>
            </label>
            <button>Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

        if ($text) {
            echo "<h3>Inmattat</h3>";
            echo "<p>Text: <em>'$text'</em></p>";

            echo "<h3>Resultat</h3>";
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
            //Matcha .net .com .org
            if (preg_match("/.net|.com|.org$/", $text)) {
                echo "<p>&#10003; Slutar .net .org eller .com</p>";
            } else {
                echo "<p>&#10005; Slutar inte .net .org eller .com.</p>";
            } 
            //Matcha a-z 0-9 @ - 
            if (preg_match("/[a-z0-9\-@]/", $text)) {
                echo "<p>&#10003; Innehåller a-z småbokstäver, 0-9, @ och -</p>";
            } else {
                echo "<p>&#10005; Innehåller inte småbokstäver, 0-9, @ och -</p>";
            } 

            // Första tecknet måste vara en bokstav
            if (preg_match("/^[a-z]/", $text)) {
                echo "<p>&#10003; Första tecknet är en bokstav</p>";
            } else {
                echo "<p>&#10005; Första tecknet är inte en bokstav</p>";
            } 
            // Mellan 6 till 200 bokstäver
            if (preg_match("/.{6,200}/", $text)) {
                echo "<p>&#10003; Texten är mellan 6 till 200 tecken</p>";
            } else {
                echo "<p>&#10005; Texten är inte mellan 6 till 200 tecken</p>";
            } 
        }
        ?>
    </div>
</body>
</html>
