<?php
function sum(int $x, int $y) {
        $z = $x + $y;
        echo"$z <br>";
        $m = $z / 2;
        return $m;
    }

    echo sum(15 , 15);
?>