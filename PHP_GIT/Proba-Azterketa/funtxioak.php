<?php
require('datuak.php');

function serieakErakutzi($series){
foreach($series as $serie){
echo " <article class='seriea'>
<img src=".$serie['irudia']."><br>
    <h3>".$serie['izenburua']."</h3><br>
    <p>Denboraldia:". $serie['denboraldia']."</p>
    <p>Balorazioa:". $serie['balorazioa']."</p>";
    if($serie['amaituta'] == false){
        echo"<p>Martxan</p>";
    }else{
    echo"<p>Amaituta</p>";
    }
    echo"</article>";
}
}

function serieaBilatu($series,$izenburua){
if(in_array($izenburua,$series)){
    foreach($series[$izenburua] as $serieB){

      echo " <article class='seriea'>
        <img src=".$serieB['irudia']."><br>
            <h3>".$izenburua."</h3><br>
            <p>Denboraldia:". $serieB['denboraldia']."</p>
            <p>Balorazioa:". $serieB[$izenburua]['balorazioa']."</p>";
            if($serieB['amaituta'] == false){
                echo"<p>Martxan</p>";
            }else{
            echo"<p>Amaituta</p>";
            }
            echo"</article>";
    }

}else{
    echo "<p>Ez da filma aurkitu</p>";
}

}

function estadistikak($series){
foreach($series as $serie){
$fkopuru = array_count_values($serie);
 }
 echo "<h1>Film Kopuru: </h1>";

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
