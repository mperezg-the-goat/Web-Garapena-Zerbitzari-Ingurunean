<?php 

function rest ($zbk){
$zbk--;
echo "dentro de la funcion: $zbk\n";
}

$valor = 5;
rest($valor);
echo "Fuera de la funcion: $valor\n";

?>