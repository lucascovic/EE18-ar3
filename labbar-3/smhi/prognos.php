<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>SMHI tiodagars prognos</h1>
        <canvas id="myChart"></canvas>

        <?php
        $url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json
    ";

        // Hämta json-data
        $json = file_get_contents($url);

        $jsonData = json_decode($json);

        $approvedTime = $jsonData->approvedTime;
        echo "<p>Prognosen publicerad $approvedTime</p>";
        echo "</div>";

        // Plocka ut tidserien 
        $timeSeries = $jsonData->timeSeries;

        // Skapa en variabel för att samla ihop tidpunkter
        // Alla tidpunkter och alla temperaturer
        $temperarurer = "";
        $tidpunkter = "";
        // Loopa igenom arrayen
        foreach ($timeSeries as $timeData) {
            // Plocka ut tidpunkt
            $validTime = $timeData->validTime;
            $tidpunkter .= "'$validTime', ";
            $temperarurer .= "'$temperaturen', ";
            // Plocka ut temperaturerna 
            $parameters = $timeData->parameters;
            $temperaturen = $parameters[10]->values[0];  
        }


        // Skriv ut lite javascript
        echo "<script>";
        echo "const labels = [$tidpunkter];
        const data = {
        labels: labels,
        datasets: [{
            label: 'Tiodagars prognos',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [$temperarurer],
            tension: 0.4,
        }]
    };
    const config = {
        type: 'line',
        data,
        options: {}
    };
    // === include 'setup' then 'config' above ===

    var myChart = new Chart(
        document.querySelector('#myChart'),
        config
    );";

        echo "</script>";
        ?>
</body>

</html>