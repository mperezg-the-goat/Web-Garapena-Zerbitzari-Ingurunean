<?php
$izena = "Miren";
$abizena = "Lopez";
$adina = 21;
$ikasgaia = "DWES";

//1.Ikaslearen izena eta abizena letra larriz eta xehez.
echo strtolower("$izena $abizena");
echo "<br>";
echo strtoupper("$izena $abizena");
echo "<br>";

//2.Izena eta abizena kateatuta (. eragilea erabiliz).
echo $izena ."-". $abizena;
echo "<br>";

//3.Kate osoaren luzera (izen-abizena tartearekin).
echo" $izena $abizena ";
echo strlen(" $izena $abizena ");
echo "<br>";

//4.Lehenengo karakterea eta azkena.
echo substr("$izena",0,-4);
echo "<br>";
echo substr("$abizena", 4);
echo "<br>";

//5.printf erabiliz, esaldi hau.
printf("%s %s (%d urte) %s ikasgaian matrikulatuta dago",$izena,$abizena,$adina,$ikasgaia);
?>