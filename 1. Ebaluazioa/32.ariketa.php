<?php
$ikasleak = [];
function ikasleaErakutsi($ikasleak){
    if(count($ikasleak)){
        print_r($ikasleak);
    }else{
        echo "Ez dago erregistrorik";
    }
}

ikasleaErakutsi($ikasleak);
echo"<br>";

function ikasleaSartu(&$ikasleak,$izena,$adina,$nota){ 
   array_push($ikasleak,[
    "izena"=> $izena, 
    "adina"=>$adina,
    "nota"=> $nota]);
   print_r($ikasleak);
}

echo"Ikasleak sartzen ditugu\n";
ikasleaSartu($ikasleak,"Markel",20,10);
echo"<br>";
ikasleaErakutsi($ikasleak);

?>