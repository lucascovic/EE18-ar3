<?php
$user = "luchi";
$db = "labbar";
$host = "localhost";
$pass = "wTKHYwq5TD793Utu";



// Logga in på mysql-servern och välj databas
$conn = new mysqli($host, $user, $pass, $db);

// Gick det att ansluta?

if ($conn->connect_error) {
    die("Kunde inte ansluta " . $conn->connect_error);
} else {
    echo "<p>Najs, gick bra att ansluta.</p>";
}


// Ställ en sql fråga

$sql = "SELECT * FROM bilar";
$result = $conn->query($sql);


// Gick sql att köra
if (!$result) {
    die("Något med fel med SQL satsen");
} else {
    echo "<p>Lista på alla bilar kunde hämtas</p>";
}

// Skriv listan på bilar

while ($rad = $result->fetch_assoc()) {
    echo "<p>$rad</p>";
}

// Stäng ned anslutning
$conn->close();
