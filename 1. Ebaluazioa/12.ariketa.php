<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Taula</h2>
    <hr>
    <table border="1">
        <thead>
            <th></th>
            <?php
            for($i =1;$i<=4;$i++) {
                echo"<th>$i</th>";
            }?>
        </thead>

        <tbody>
       <?php 
       for($x =1;$x<=4;$x++){
        echo"<tr>";
        echo"<th>$x</th>";
        for($y=1;$y<=4;++$y){
        echo"<td> $x-$y</td>";
        }
        echo"</tr>";
       }
       ?>
        </tbody>
    </table>
</body>

</html>