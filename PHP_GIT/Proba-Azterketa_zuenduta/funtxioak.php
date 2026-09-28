<?php
require('datuak.php');

function serieakErakutzi($series){
foreach($series as $serie){
echo " <article class='seriea'>
<img src=".$serie['irudia']."><br>
    <h3>".$serie['izenburua']."</h3><br>
    <p>Denboraldia:". $serie['denboraldiak']."</p>
    <p>Balorazioa:". $serie['balorazioa']."</p>";
    if($serie['amaituta'] == false){
        echo"<p>Martxan</p>";
    }else{
    echo"<p>Amaituta</p>";
    }
    echo"</article>";
}
}

function serieaBilatu($series, $izenburua){
    foreach ($series as $serie) {

        if ($serie['izenburua'] == $izenburua) {

            echo "<br><article class='seriea'>
                    <img src='" . $serie['irudia'] . "'>
                    <br>
                    <h3>" . $serie['izenburua'] . "</h3>
                    <br>
                    <p>Denboraldiak: " . $serie['denboraldiak'] . "</p>
                    <p>Balorazioa: " . $serie['balorazioa'] . "</p>";

            if ($serie['amaituta'] == false) {
                echo "<p>Martxan</p>";
            } else {
                echo "<p>Amaituta</p>";
            }

            echo "</article>";
            return;
        }
    }

    echo "<p>Ez da seriea aurkitu</p>";
}



function serieKopuru($series){
$fkopuru = count($series);
echo"$fkopuru";
 }

 function martxanSerie($series){
$amaituK=0;
 if($series['amaituta']==false){
foreach($series as $martxan){
$amaituK=count($martxan);
}
echo"$amaituK";
}
 }



function erakutsiF(){
    ?>
<form action="" method="POST"> 
    <label for="">Seriearen izenburua: </label>
    <input type="text" name="izenburua">
    <input type="submit" value="Bilatu">
    </form>
    <?php 
}
?>
