<?php
$ikasleak=array(
    'Jone'=>array('Abizena'=>'Martinez Lopez','Adina'=>'20','Zikloa'=>'AS3'),
    'Ander'=>array('Abizena'=>'Urrutia Ron','Adina'=>'19','Zikloa'=>'DW3'),
    'Mikel'=>array('Abizena'=>'Olarreta Andion','Adina'=>'20','Zikloa'=>'DW3')
);

echo "<h1>IKASLEAK</h1>";

foreach($ikasleak as $gakoa => $balioa ){
    echo"Izena: $gakoa <br>";
   
    foreach($balioa as $atala =>$emaitza){
        echo"$atala : $emaitza <br>"; 
    }
    echo"<br>";
}
?>