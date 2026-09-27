

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="35_img/style.css/style.css">
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

                function taulaSortu(){
                echo "<h1>IRUDIAK</h1>";
           echo '<img src="35_img/the-batman-jim-lee-arte-conceptual-redes-cover.jpg" alt="">';
           echo "<br>";
           echo '<img src="35_img/thumb-350-1093925.jpg" alt="">';
           echo "<br>";
           echo '<img src="35_img/Venoso.jpg" alt="">';
           echo "<br>";
           echo '<img src="35_img/ultra-ego-vegeta-dragon-ball-super-thumb.jpg" alt="">';
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
            taulaSortu();
            break;
        default:
            echo "Zenbakia ez dago 0 eta 3 artean.";
            break;
    }
    ?>
    
</body>
</html>