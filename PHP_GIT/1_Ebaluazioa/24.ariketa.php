<?php
$paises = array('alemania','brasil','italia','txile','uruguay','australia');
unset($paises[0],$paises[2],$paises[5],);
print_r($paises);

echo"<br>";

array_push($paises,"Argentina","Bolivia");
print_r($paises);

sort($paises);
echo"<br>";
print_r($paises);
?>