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
            // Matcha "gata"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
            if (preg_match("/gata/", $text)) {
                echo "<p>&#10003; Innehåller 'gata'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'gata'.</p>";
            } 
            // Matcha stora och små bokstäver (Case insensitive)
            if (preg_match("/[a-zåäö]/i", $text)) {
                echo "<p>&#10003; Innehåller 'En bokstav från alfabetet'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'En bokstav från alfabetet'.</p>";
            } 
            // Sök efter 'a'  'aa' 'aaa' en eller flera (+)
            if (preg_match("/a+/i", $text)) {
                echo "<p>&#10003; Innehåller 'en eller flera a i följd'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'en eller flera a i följd'.</p>";
            } 
            // Sök efter 'a' ingen eller flera (*)
            if (preg_match("/a*/i", $text)) {
                echo "<p>&#10003; Innehåller 'en eller flera a i följd'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'en eller flera a i följd'.</p>";
            } 
            
            // Matcha ett antal, tex en ip-adress som 192.168.0.10
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}/", $text)) {
                echo "<p>&#10003; Innehåller 'matchar ip adress'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'en ip adress'.</p>";
            }

            // Matchar saab och sab
            if (preg_match("/sab|saab/i", $text)) {
                echo "<p>&#10003; Matchar 'SAB eller SAAB'.</p>";
            } else {
                echo "<p>&#10005; Matchar INTE 'SAB eller SAAB'.</p>";
            } 
            // Matcha orden Obs eller OBS eller obs
            if (preg_match("/Obs|OBS|obs/", $text)) {
                echo "<p>&#10003; Innehåller '<Obs, OBS eller obs'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'Obs, OBS eller obs'.</p>";
            }

            // Matcha gatuadress tex Sveavägen 12, Sveaväg. 12
            if (preg_match("/sab|saab/i", $text)) {
                echo "<p>&#10003; Matchar 'SAB eller SAAB'.</p>";
            } else {
                echo "<p>&#10005; Matchar INTE 'SAB eller SAAB'.</p>";
            } 
            // Matcha orden Obs eller OBS eller obs
            if (preg_match("/Sveavägen 12|Sveaväg\.12/", $text)) {
                echo "<p>&#10003; Matchar Sveavägen 12 eller Sveaväg.12</p>";
            } else {
                echo "<p>&#10005; Matchar ej Sveavägen 12 eller Sveaväg.12</p>";
            }
        }
        ?>
    </div>
</body>
</html>
