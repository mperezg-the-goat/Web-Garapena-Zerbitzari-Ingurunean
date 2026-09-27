<?php

$izena = isset($_POST['izena']) ? trim($_POST['izena']): '';
$abizena = isset($_POST['abizena']) ? trim($_POST['abizena']): '';
$email = isset($_POST['email']) ? trim($_POST['email']): '';

if(!empty($izena) && !empty($abizena) && !empty($email)){
    echo"Kaixo ".$izena." ".$abizena." Zure email: ".$email." da.";
    }else{
    echo "Aldagairen bat ez du baliorik";
}

?>