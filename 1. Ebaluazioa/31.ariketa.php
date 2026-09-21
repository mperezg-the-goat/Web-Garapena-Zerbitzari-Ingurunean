<?php
function froga (){
        static $a = 0;
        $a++;
        echo $a;
    }
    froga();
    froga();
    froga();
?>