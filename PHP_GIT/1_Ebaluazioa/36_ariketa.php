<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function berreketakegin(){
        echo "<h2>Taula 4x4</h2>";
        for($i =1;$i<=4;$i++) {
            echo"<tr>";
            for($x =1;$x<=4;$x++){
                echo"<td>".$i**$x."</td>";
            }
        }
    }
    
    ?>


    <table border="1">
    <tbody>
       <?php berreketakegin(); ?>
    </tbody>
    </table>
</body>
</html>