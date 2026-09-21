<?php
$aukerak = ["Harri","Horri","Ar"];
global $aukerak;
$JA=0; $MA=0;
$JP=0; $MP=0;

function irabazleaAukeratu($aukerak,$JA,$MA,$JP,$MP){
echo"Jolasa hasiko da...<br>";
while ($JP != 3 && $MP !=3) {
    $zbk = rand(0,2);
    $JA= $zbk; $MP= $zbk;

    if ($JA === $MA) {
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Empate egonda <br>";
    }elseif($JA>$MA){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Irabazi duzu! <br>";
        $JP++;
    }elseif($JA<$MA){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Ordenagailua irabazi duzu!<br>";
        $MP++;
    }

    if($JP ===3){
    echo"<br>Jokalaria Irabazi du!";
    }elseif($MP===3){
    echo"<br>Ordenagailua Irabazi du!";
    }
}
}
 irabazleaAukeratu($aukerak,$JA,$MA,$JP,$MP);
?>