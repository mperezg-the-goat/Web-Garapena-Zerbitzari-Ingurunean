<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$kolorea = $_GET["kolorea"];
if(empty($kolorea)){
echo "<h1>Ez da kolorea jaso.</h1>";
}else{
echo "<h1 style=background-color:$kolorea ;>Aukeratutako Kolorea: $kolorea izan da</h1>";
}
?>  
<a href="40_ariketa.php">Beste kolore bat aukeratu</a>
</body>
</html>