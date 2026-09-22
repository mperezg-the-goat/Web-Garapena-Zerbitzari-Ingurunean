

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include 'header.php';
            echo"<h1>$izenburua</h1>";
                
            function bidertaula($biderzbk,$emaitza){
                for($i=0; $i<=10;$i++){
                $emaitza=$biderzbk*$i;
                echo"$emaitza <br>";
                    }    
                }
        ?>
    </header>
    <?php 
    $zbk= rand(0,4);
    $biderzbk = rand(1,10);
    $emaitza=0;
    global $biderzbk;
    global $emaitza;
    switch ($zbk) {
        case 0:
            echo"Ez du sarbiderik";
            break;
        case 1:
            echo"Ongi etorri, egun on bat pasa!";
            break;
        case 2:
            bidertaula($biderzbk,$emaitza);
            break;
        case 3:
            echo "3";
            break;
        default:
            echo "Zenbakia ez dago 0 eta 3 artean.";
            break;
    }
    ?>
</body>
</html>