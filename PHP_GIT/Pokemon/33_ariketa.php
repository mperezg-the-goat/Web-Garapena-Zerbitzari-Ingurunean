<?php

    // Ikasle berri bat sartzeko erabiliko dugun funtzioa
    function ikasleaSortu ($izena, $adina, $kalifikazioak) {
        global $ikasleak;
        
        $ikasleak[$izena] = [
            'adina' => $adina,
            'kalifikazioak' => $kalifikazioak
        ];
    }

    // Batazbestekoa ateratzeko funtzioa
    function batazbestekoa($kalifikazioak) {
        $batuketa = array_sum($kalifikazioak);
        $kopurua = count($kalifikazioak);
        $promedioa = $batuketa / $kopurua;
        $promedioa = round($promedioa, 2); // Bi dezimal ateratzeko

        return $promedioa;
    }

    // Función para mostrar la información de un ikaslea
    function ikasleaErakutsi ($izena) {
        global $ikasleak;

        if (array_key_exists($izena, $ikasleak)) {
            $ikaslea = $ikasleak[$izena];
            echo "<h3>Izena: $izena</h3>";
            echo "Adina: " . $ikaslea['adina'] . "<br>";
            echo "Kalifikazioak: " . implode(", ", $ikaslea['kalifikazioak']) . "<br>";
           
            $promedioa = batazbestekoa($ikaslea['kalifikazioak']);

            echo "Batazbestekoa: $promedioa<br>";
        } else {
            echo "<br>$izena ikaslea ez dago erregistroan.<br>";
        }
    }
// Ikasleak ezabatzeko funtzioa:
    function ikasleakEzabatu(&$ikasleak,$izena){
    if(array_key_exists($izena,$ikasleak)){
        unset($ikasleak[$izena]);
    }else{
        echo "Ikasle hori ez da exixtitzen";
    }
    }

    $ikasleak = [];

    // 3 ikasle sortu hurrengo datuekin
    ikasleaSortu ('Iker', 20, [7, 5, 6.5, 7, 6, 3]);
    ikasleaSortu ('Maider', 22, [7.4, 8, 9.5, 6, 6, 5.5]);
    ikasleaSortu ('Uxue', 21, [10, 8, 8.5, 7, 8, 9]);

    // 3 ikasle hauen datuak erakutsi
    ikasleaErakutsi ('Iker');
    ikasleaErakutsi ('Maider');
    ikasleaErakutsi ('Laura');

    ikasleakEzabatu($ikasleak,"Iker");
    ikasleaErakutsi ('Iker');

?>