<?php
$ikasleak = [];

function ikasleaSortu(&$ikasleak,$izena,$adina,$nota){
    $ikasleak[$izena]=[
        "adina"=>$adina,
        "nota"=>$nota
    ];
}

function ikasleaErakutsi(&$ikasleak,$izena){
    if(array_key_exists($izena,$ikasleak)){
        $ikaslea = $ikasleak[$izena];
        echo"Izena: $izena<br>";
        echo"Adina: ".$ikaslea["adina"]."<br>";
        echo"Nota: ".$ikaslea["nota"]."<br>";
    }
}

ikasleaSortu($ikasleak,"Markel",19,10);
ikasleaSortu($ikasleak,"Aitzol",19,8.5);
ikasleaSortu($ikasleak,"June",22,9.5);

ikasleaErakutsi($ikasleak,"Markel");
?>