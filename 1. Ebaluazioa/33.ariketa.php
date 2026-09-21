<?php
$ikasleak = [];
function ikasleaSartu(&$ikasleak,$izena,$adina,$nota){ 
   array_push($ikasleak,[
    "izena"=> $izena, 
    "adina"=>$adina,
    "nota"=> $nota]);
}

function batesbezte($ikaslea){
$notaBatez = $ikaslea["nota"];
$batazbestekoa = array_sum($notaBatez) / count($notaBatez);
    return $batazbestekoa;
}



function ikasleaErakutsi($ikasleak){
    if(count($ikasleak)>0){
        foreach($ikasleak as $ikaslea){
        $media = batesbezte($ikaslea);
        echo "Izena:" . $ikaslea["izena"] . "<br>";
        echo "Adina:" . $ikaslea["adina"] . "<br>";
        echo "Notak: " . implode(", ", $ikaslea["nota"]) . "<br>";
        echo "Batez bestekoa:" . number_format($media, 2) . "<br>";
     }
    }else{
        echo "Ez dago erregistrorik";
    }
}
echo"Ikasleak sartzen ditugu\n";
ikasleaSartu($ikasleak,"Markel",20,[8, 7, 9, 6, 10, 8]);
echo"<br>";
ikasleaErakutsi($ikasleak);

?>