<?php
$ikasle= array('Markel'=>'10', 'Hector'=>'8.5','Ekaitz'=>'7.5');
//echo count($ikasle);

foreach($ikasle as $gakoa=> $balioa){
    echo("$gakoa : $balioa <br>");
}
$batura = array_sum($ikasle);
//echo $batura;
$kantitatea=count($ikasle);
$emaitza=$batura/$kantitatea;
echo"Batez: $emaitza";
?>