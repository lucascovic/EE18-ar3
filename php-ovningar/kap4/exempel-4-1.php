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
    // En array som innehåller länder
    $länder = ["Sverige", "Norge", "Finland"];

    // Skriver ut en array
    print_r($länder);
    echo "<p>$länder[0]</p>";
    echo "<p>$länder[1]</p>";
    echo "<p>$länder[2]</p>";
    echo "<p>$länder[3]</p>";
    
    // Utöka arrayen (Lägg till)
    $länder[] = "Danmark";
    
    //Ta bort ett element ur en array (Finalnd)
    // unset($länder[2]);
    print_r($länder);

    // Associativ array (Mycket använtbart i db)
    $elever = []; // tom array
    $elever["Viktor"] = "Gitarr";
    $elever["Lucas"] = "Keyboard";
    $elever["Olle"] = "Munspel";
    print_r($elever);

    // Skriva ut hela arrayen

    //Loopa genom array
    foreach ($länder as $land) {
        echo "<p>$land</p>";
    }
    foreach ($elever as $instrument) {
        echo "<p>$instrument</p>";
    }

    foreach ($elever as $key => $instrument) {
        echo "<p>$key spelar $instrument</p>";
    }

    // Skriv ut en tabell
    /* 
    <table>
        <tr>
            <td>John</td>
            <td>Doe</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>Doe</td>
        </tr>
    </table>
    */
    echo "<table>";
    echo "<tr>";
    echo "<td>John</td>";
    echo "<td>Doe</td>";
    echo "</tr>";
    echo "</table>";

    // Dynamiskt skapad tabell
    echo "<table>";
    foreach ($länder as $land) {
        echo "<tr>";
        echo "<td> $land</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Skriv ut arrayen ellersom en tabell
    echo "<table>";
    echo "<tr>";
        echo "<th>Namn</th><th>instrument</th>";
        echo "</tr>";
    foreach ($elever as $key => $instrument) {
        echo "<tr>";
        echo "<td>$key</td><td> $instrument</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    // Splitta en sträng

    $mening = "Vi och våra partners bearbetar personuppgifter såsom IP-adress, unikt ID och browsingdata. Vissa partner begär inte ditt samtycke till att behandla dina data, utan de litar på sitt legitima affärsintresse. Visa vår lista över partners för att se de syften som de tror att de har ett legitimt intresse för och hur du kan göra invändningar mot det.";

    $allaOrd = explode(" ", $mening);

    // Skriv ut alla ord numrerade 
    echo "<table>";
    echo "<tr>";
    echo "<th>Ordning</th><th>ord</th>";
    echo "</tr>";
    foreach ($allaOrd as $key => $ord) {
        $key = $key +1;
        echo "<tr>";
        echo "<td>$key</td><td>$ord</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>

    

    
</body>
</html>