<?php
echo "<h2>Eskaintza Bereziak</h2>";

$produktuak = [
    ["izena" => "Arkatza", "prezioa" => 15.90],
    ["izena" => "Liburua", "prezioa" => 25.50],
    ["izena" => "Kamiseta", "prezioa" => 35.75],
    ["izena" => "Zapatilak", "prezioa" => 65.00]
];

foreach ($produktuak as $produktua) {
    $prezioa = $produktua["prezioa"];

    if ($prezioa < 20) {
        $deskontua = 0.1;
    } else if ($prezioa >= 20 && $prezioa <= 50) {
        $deskontua = 0.2;
    } else {
        $deskontua = 0.3;
    }

    $zenbatekoa = $deskontua * $prezioa;
    $azkenPrezioa = $prezioa - $zenbatekoa;

    echo "Produktua: " . $produktua["izena"] . "<br>";
    echo "Hasierako prezioa: " . $prezioa . " €<br>";
    echo "Deskontua: " . ($deskontua * 100) . "%<br>";
    echo "Azken prezioa: " . number_format($azkenPrezioa, 2) . " €<br>";
    echo "<hr>";
}
//2.ASTEKO SALMENTAK:
echo "<h2>Asteko Salmaenta</h2>";

$egunak = ["Astelehena", "Asteartea", "Asteazkena", "Osteguna", "Ostirala", "Larunbata", "Igandea"];
$salmentak = [120.50, 95.00, 210.30, 150.00, 310.80, 450.00, 280.40];
$egunK = count($egunak); 
for($i=0;$i<$egunK;$i++){
echo"<li>$egunak[$i] salmentak: $salmentak[$i] €</li>"; 
}
echo"<hr>";
$salmentaT =0.0;
for ($i = 1; $i < $egunK; $i++) {
$salmentaT+=$salmentak[$i];
}
echo "Salmenta Totala: $salmentaT €\n";
echo"Batazbezteko salmentak: ".number_format($salmentaT/$egunK,2)." €";
?>