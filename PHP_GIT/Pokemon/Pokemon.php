<?php
$pokedex = [];

function pokemonGehitu(&$pokedex,$izena, $mota, $maila, $eboluzioa){
$pokedex[$izena]=[
    "mota"=> $mota,
    "maila" =>$maila,
    "eboluzioa"=> $eboluzioa];
}

function pokemonErakutsi(&$pokedex){
    if(count($pokedex)===0){
            echo"Ez duzu pokemonik erregistratuta! <br>";
        }else{
            print_r($pokedex);
            echo"<br>";
    }
}

function mailaIgo(&$pokedex,$izena){
if(array_key_exists($izena, $pokedex)){
    $pokedex[$izena]["maila"]++;
    echo"Maila bat igoko diogu";
}else{
    echo"Pokemon hori ez dago erregistratuta!";
}

}

echo "<h1>Resumen</h1>";

pokemonGehitu($pokedex,"Pikachu","Elektrikoa",25,true);
pokemonGehitu($pokedex,"Raichu","Elektrikoa",35,false);
pokemonGehitu($pokedex,"Charmander","Sua",18,true);
pokemonGehitu($pokedex,"Charizard","Sua / Hegaldaria",42,false);
pokemonGehitu($pokedex,"Blastoise","Ura",40,false);
pokemonGehitu($pokedex,"Venusaur","Belarra / Pozoia",38,false);

pokemonErakutsi($pokedex);
echo"<br>";
mailaIgo($pokedex,"Pikachu");
echo"<br><br>";
pokemonErakutsi($pokedex);



?>