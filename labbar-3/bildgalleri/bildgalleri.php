<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bildgalleri</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="kontainer">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
        <?php
        // Ange katalogen
        $katalog = "bilder";

        echo "<h1>Bildgalleri</h1>";

        // Hämta katalogens innehåll
        $filer = scandir($katalog);
        
        // Loopa igenom alla funna filer
        echo "<div class=\"bilder\">";
        
        
        
        foreach ($filer as $key => $fil) {
            // Visa inte ”." och ”.."
            if ($fil == "." || $fil == "..") {
                continue;
            }

            if (is_dir($katalog/$fil)) {
                continue;
            }
            echo "<div class=\"carousel-item\">";
            // Visa bara bilden om filformat ”.jpg”
            $info = pathinfo($fil);
            //var_dump($info["extension"]);
            if ($info["extension"] == "jpg") {
                if ($key == 2) {
                    echo "<div class=\"carousel-item active\">";
                } else {
                    echo "<div class=\"carousel-item\">";
                }
                
                
                echo "<img src=\"$katalog/$fil\">";
                echo "</div>";
            }
           
            
        }
        
        
        
        ?>
  </div>
  </div>
    </div>
</body>
</html>