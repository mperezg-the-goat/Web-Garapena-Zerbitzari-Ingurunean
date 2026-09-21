<?php
$zenbakiak = array(1,2,3,4,5,6,7,8,9,10);
$batura=0;
for($i=0;$i<=10;$i++){
    $batura+=$i;
}

// Edo :

$batura = array_sum($zenbakiak);
echo"Emaitza: $batura";
?>