<?php
 if(!isset($_POST["user"]) && !isset($_POST["passw"])){
    echo"<h2>Alta Formulario</h2><br> <p>Aldagaiak ez dira exititzen</p>";
 }elseif(!empty($_POST["user"]) &&  !empty($_POST["passw"])){
    echo"<h2>Alta Formulario</h2><br> <p>Aldagaiak ez dute daturik</p>";
 }else{
    $user = $_POST["user"];
    $passw = $_POST["passw"];
     echo"<h2>Alta Formulario</h2><br> <p>Kaixo $user ongiertorri</p>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Alta Formulario</h2>
    <form action="39_ariketa.php" method="POST">
        <label for="user">Erabiltzailea:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="passw">Pasahitza:</label><br>
        <input type="text" id="passw" name="passw"><br>
        <br>
        <input type="submit" value="Bilatu">
    </form>

</body>
</html>