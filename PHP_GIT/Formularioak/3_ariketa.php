<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = isset($_POST['user']) ? trim($_POST['user']): '';
    $passw = isset($_POST['passw']) ? trim($_POST['passw']): '';

    if(!empty($user)&& !empty($passw)){
       echo" <h1>Altan Hemateko</h1>";
    echo"Kaixo ".$user." ongi etorri!!";
    }else{
        erakutsiF();
        echo "<p> Error: datuak falta dira</p>";
    }
}else{
    erakutsiF();
}

function erakutsiF(){
    ?>
<form action="" method="post">
    <h1>Altan Hemateko</h1>
        <label for="">Erabiltzailea:</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="">Pasahitza:</label><br>
        <input type="password" name="passw" id="passw"><br><br>
        <input type="submit" value="Bilatu">
    </form>
    <?php 
}

 ?>
    
</body>
</html>