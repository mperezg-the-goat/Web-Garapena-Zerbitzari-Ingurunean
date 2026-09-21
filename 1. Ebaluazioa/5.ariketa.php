<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.Ariketa</title>
</head>
<body>
    <?php 
    
    $Izena = "markel perez";
    
    echo strtolower("$Izena");
     echo "<br>"; 
    echo strtoupper(" $Izena");
    echo "<br>";
    echo substr_count($Izena, "Markel Perez");
    echo "<br>";
    echo substr($Izena,0,-11);
    echo "<br>";
    echo substr($Izena,-1);
    echo "<br>";
    $izena_abizena = explode(" ", $Izena);
    echo $izena_abizena[1];
    echo "<br>";
    ?>
</body>
</html>