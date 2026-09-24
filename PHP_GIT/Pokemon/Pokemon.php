<?php

$pokedex = [];

function pokemonGehitu(&$pokedex,$izena,$mota,$maila,$eboluzioa){
    global $pokedex;
    $pokedex[$izena]= [
        "mota" => $mota,
        "maila" => $maila,
        "eboluzioa" => $eboluzioa
    ];
}

function pokemonEboluzionatuta(&$pokedex,$eboluzionatua){
    if($eboluzionatua === true){
        echo "<h2>Eboluzionatutako Pokémonak:</h2>";
    }else{
    echo "<h2>Eboluzionatu gabeko Pokémonak:</h2>";
    }

    $aurkitua = false;

    foreach($pokedex as $gakoa =>$balioa){
        if($balioa["eboluzioa"] === $eboluzionatua){
            echo "- <strong>" . $gakoa . "</strong> | Mota: " . $balioa["mota"] . " | Maila: " . $balioa["maila"] . "<br>";
            $aurkitua = true;
        }
    }

    if($aurkitua === false){
    echo "Ez dago ezaugarri honekin Pokémonik.<br>";
    }
}

function mailaIgo(&$pokedex,$izena){
    if(array_key_exists($izena,$pokedex)){
        $pokedex[$izena]["maila"]++;
        echo"<p>Maila bat igota</p>";
    }else{
        echo"Pokemon hori ez da erregistratu";
    }
}

pokemonGehitu($pokedex, "Pikachu", "Elektrikoa", 25, true);
pokemonGehitu($pokedex, "Raichu", "Elektrikoa", 35, false);
pokemonGehitu($pokedex, "Charmander", "Sua", 18, true);
pokemonGehitu($pokedex, "Charizard", "Sua / Hegaldaria", 42, false);
pokemonGehitu($pokedex, "Blastoise", "Ura", 40, false);
pokemonGehitu($pokedex, "Venusaur", "Belarra / Pozoia", 38, false);

mailaIgo($pokedex, "Charmander");
pokemonEboluzionatuta($pokedex,true);
pokemonEboluzionatuta($pokedex,false);
?>