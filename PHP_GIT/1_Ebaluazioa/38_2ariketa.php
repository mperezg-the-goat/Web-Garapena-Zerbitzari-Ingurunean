<?php

if (isset($_POST["izena"]) && !empty($_POST["izena"]) && isset($_POST["abizena"]) && !empty($_POST["abizena"]) && isset($_POST["email"]) && !empty($_POST["email"])) {
$izena = $_POST["izena"];
$abizena = $_POST["abizena"];    
$email = $_POST["email"];    
echo"<h3>Kaixo " . $izena . "-" .$abizena. " Zure emaila : ". $email."</h3>";

}else{
    echo "Zure aldagairen bat ez dago definituta";
}

?>