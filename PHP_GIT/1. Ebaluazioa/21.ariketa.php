<?php
$ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen"];
$Ikopurua =  count($ikasleak);
 echo"Ikaslea totalak: $Ikopurua <br>";

 foreach($ikasleak as $gakoa){
    echo" $gakoa";
 }

    if(in_array("Mikel", $ikasleak)){
    echo"<br> Mikel klasera etorri da.";
    }else{
    echo"<br> Mikel klasera ez da etorri.";
    }

    if(in_array("Nora", $ikasleak)){
    echo"<br> Nora klasera etorri da.";
    }else{
    echo"<br> Nora klasera ez da etorri.";
    }
?>