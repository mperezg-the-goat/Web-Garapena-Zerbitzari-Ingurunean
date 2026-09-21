<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Ikaslearen informazioa</h1>
    </header>
<?php 

const UNIBERTZITATEA = "Euskal Herriko Unibertsitatea";
const GRADU_KREDITOAK = "204";
const IKASTAROA_PREZIOA = 1250.75;

$ikasle_izena = "Markel";
$orain_arte_kreditoak = 45;
$batez_besteko_nota = 7.8;
$ikastaro_bukatua = false;

echo"<p>Ikasle izena : $ikasle_izena</p>
<p>UNIBERTZITATEA : " . UNIBERTZITATEA ."</p> 
<p>Orain arteko kreditua: $orain_arte_kreditoak</p>
<p>Batez besteko nota: $batez_besteko_nota</p>
<p>Falta diren kreditua: ". GRADU_KREDITOAK ."</p>
<p>Ikastaroa buketuta: ";
echo $ikastaro_bukatua ? "BAI" : "EZ";
echo"</p><p>Ordaindu beharreko prezioa: ". IKASTAROA_PREZIOA ." €</p>";

?>

</body>

</html>