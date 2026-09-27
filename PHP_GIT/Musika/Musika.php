<?php
//Arraya sortu:
$artistak = [
    "Bulego" => [
        "estiloa" => "Pop",
        "abestiak" => [
            ["izenburua" => "Pizten ari da", "iraupena" => 210],
            ["izenburua" => "Ezer ez da berdina", "iraupena" => 198],
            ["izenburua" => "Bueltan da", "iraupena" => 205]
        ]
    ],

    "ETS" => [
        "estiloa" => "Rock / Ska",
        "abestiak" => [
            ["izenburua" => "Aukera Berriak", "iraupena" => 190],
            ["izenburua" => "Musikaren Doinua", "iraupena" => 225],
            ["izenburua" => "Ametsetan", "iraupena" => 214],
            ["izenburua" => "Zurekin Batera", "iraupena" => 183]
        ]
    ],

    "Huntza" => [
        "estiloa" => "Folk / Rock",
        "abestiak" => [
            ["izenburua" => "Aldapan gora", "iraupena" => 215],
            ["izenburua" => "Buruz behera", "iraupena" => 205],
            ["izenburua" => "Lasai, lasai", "iraupena" => 220],
            ["izenburua" => "Harro gaude", "iraupena" => 210],
            ["izenburua" => "Ipuinetan", "iraupena" => 195]
        ]
    ],

    "Izaro" => [
        "estiloa" => "Pop / Indie",
        "abestiak" => [
            ["izenburua" => "Libre", "iraupena" => 210],
            ["izenburua" => "Invierno a la vista", "iraupena" => 220],
            ["izenburua" => "Limones", "iraupena" => 205]
        ]
    ]
];


function artistaErakutsi(&$artistak,$izena){
if(array_key_exists($izena,$artistak)){
    echo"<h1>$izena Informazioa</h1>";
        echo"<p>Izena: ".$izena." | Estiloa: " .$artistak[$izena]["estiloa"]."</p>";
        
            foreach($artistak[$izena]["abestiak"] as $abestia){
            echo"<p>Abestiak:". $abestia["izenburua"]." => Iraupena: ".$abestia["iraupena"]."-s</p>";
            }
            echo"<hr>";
    }else{
        echo "<p>Artista $izena ez da exititzen!!</p>";
        }
}

function artistaEzabatu(&$artistak,$izena){
if(array_key_exists($izena,$artistak)){
    unset($artistak[$izena]);
    echo "<p>".$izena. "Ondo ezabatu da!</p>";
    }else{
        echo "<p>Artista $izena ez da exititzen!!</p>";
        }
    }

function iraupenTotala(&$artistak,$izena){
    $iraupenT=0;
if(array_key_exists($izena,$artistak)){
    foreach($artistak[$izena]["abestiak"] as $abestia){
    $iraupenT += array_sum($abestia);
    }
    echo "<p>".$izena." -ren abestien iraupentotala ".$iraupenT. "-s da.</p>";
    }else{
    echo "<p>Artista $izena ez da exititzen!!</p>";
    }

}

artistaErakutsi($artistak,"Bulego");
iraupenTotala($artistak,"Bulego");
artistaEzabatu($artistak,"Bulego");
artistaErakutsi($artistak,"Bulego");
artistaEzabatu($artistak,"Nirvana");

?>