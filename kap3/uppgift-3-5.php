<?php
/*
* Gör ett skript som är en lånekalkylator. Mha radioknappar ska användaren kunna välja mellan 1, 3 och 5 års lånetid. I en ruta ska användaren skriva i lånebeloppet och i nästa räntan i hela procent. Programmet ska sedan räkna ut den totala lånekostnaden. Räknas ut genom ränta på ränta-principen, årsvis). Så för ett tvåårigt lån på 5000 med räntan 4% skulle alltså lånekostnaden bli 5000*1,04*1,04 - 5000. Observera att lånet är "amorteringsfritt".
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
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
        <h1>Ränta-räknare</h1>
        <form action="uppgift-3-5-svar.php" method="POST">
            <label for="belopp">Hur mycket pengar lånar du?</label>
            <input id="belopp" class="form-control" type="text" name="belopp">
            <label for="ränta">Ange ränta i %</label>
            <input id="ränta" class="form-control" name="ränta" type="text">
            <div>
                <label>Hur många år är lånet på?</label> <br>
                <input type="radio" name="lånetid" value="1" checked> 1 år
                <input type="radio" name="lånetid" value="3"> 3 år
                <input type="radio" name="lånetid" value="5"> 5 år
            </div> 
            <button type="submit" class="btn btn-primary">Skicka</button>
            
           
        </form>
    </div>
</body>
</html>

   