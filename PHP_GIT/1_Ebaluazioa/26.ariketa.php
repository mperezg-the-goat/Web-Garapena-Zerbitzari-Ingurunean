<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenbakia asatu</title>
</head>

<body>
    <h1>Zenbakia asatzen...</h1>
    <p>5 saiakera dituzu zenbaki zen dein asmatzeko</p>

    <?php


    $asmatzekozbk = rand(1,10);
    $saiakerak = 0;
    $zbk_erabilita= array();
    do {
        array_push($zbk_erabilita,$zbk);
        $saiakerak++;
        $zbk = rand(1,10);

        if ($zbk === $asmatzekozbk) {
            echo "Saiakera:$saiakerak\n";
            echo "Aukeratutako zenbakia $zbk da.\n";
            echo "Zuzena asmatu duzu!";
            $saiakerak = 5;
        } else if($zbk != $asmatzekozbk) {
            
            echo "Saiakera: $saiakerak\n";
            echo "Aukeratutako zenbakia $zbk da.\n";
            echo"Saiakera okerra, berriro saiatzen... ";
            echo"<br>";
        }
        
            if(in_array($zbk,$zbk_erabilita)){
                echo" Zenbakia $zbk berriro aukeratu duzu, saiatu berriz. <br>";
                $saiakerak--;
            }
    } while ($saiakerak != 5);
    ?>
</body>

</html>