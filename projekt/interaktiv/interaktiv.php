<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interaktiv berättelse</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Interaktiv berättelse</h1>
        <?php
        // Finns data?
        if (isset($_POST["input"], $_POST["chatt"])) {

            // Ta emot data från formuläret
            $input = $_POST["input"];
            $chatt = $_POST["chatt"];

            $chatt .="$input\n";
            if ($input == "lite") {
               $chatt .="Du får dryck och macka. Vill du ha te eller kaffe?\n"; 
            }elseif ($input == "mycket") {
                $chatt .= "Vill du ha gröt eller musli?\n";
            }else {
                $chatt .= "Jag förstod inte vad du skrev.\n";
            }
            

        } else{ $chatt = "Du har precis vaknat. Är du lite eller mycket hungrig?";  

        }
        ?>
        <form action="#" method="POST">

            <textarea id="" cols="30" rows="10" readonly><?php echo $chatt;?></textarea>
            <input id="input" class="form-control" type="text" name="input">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

        
    </div>
</body>
</html>