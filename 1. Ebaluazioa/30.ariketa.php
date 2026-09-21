<?php
function Beza($prez =50,int $Bez = 21){
$BezA = $Bez/100;
$preB = $prez*$BezA;
$preT = $prez+$preB;
 echo $preT;
}

Beza(60,);
echo"<br>";
Beza();
?>