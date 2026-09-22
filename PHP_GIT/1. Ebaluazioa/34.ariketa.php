<?php
$aukerak = ["Harri","Horri","Ar"];
global $aukerak;
$JA=0; $MA=0;
$JP=0; $MP=0;

function irabazleaAukeratu($aukerak,$JA,$MA,$JP,$MP){
echo"Jolasa hasiko da...<br><br>";
while ($JP < 3 && $MP < 3) {
    $zbkJ = rand(0,2); $zbkM = rand(0,2);
    $JA= $zbkJ; $MA= $zbkM;

    if ($JA === $MA) {
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Empate egonda <br>";
    }elseif($JA === 1 && $MA ===0){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Irabazi duzu! <br>";
        $JP++;
    }elseif($JA === 0 && $MA ===1){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Ordenagailua irabazi du!<br>";
        $MP++;
    }elseif($JA === 0 && $MA === 2){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Irabazi duzu! <br>";
        $JP++;
    }elseif($JA === 2 && $MA === 0){
         echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Ordenagailua irabazi du!<br>";
        $MP++;
    }elseif($JA === 2 && $MA === 1){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Irabazi duzu! <br>";
        $JP++;
     }elseif($JA === 1 && $MA === 2){
        echo"Jokalariak ".$aukerak[$JA]. " - Makinak ".$aukerak[$MA]. " -Ordenagailua irabazi du! <br>";
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