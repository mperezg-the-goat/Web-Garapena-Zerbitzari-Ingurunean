<?php
$notak = array("Ander"=>"3.5", "Bego"=>"7", "Jon"=>"6.3");
echo"Ander: $notak[Ander] <br>";
echo"Bego: $notak[Bego] <br>";
echo"Jon: $notak[Jon] <br><br>";

//foreach:

    foreach($notak as $gakoa => $balioa){
    echo "$gakoa: $balioa<br>";
    }
?>