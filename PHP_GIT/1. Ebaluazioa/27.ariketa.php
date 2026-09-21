 <?php 
    $desio_zerrenda = ['Frantzia','Portugal','Japon','Italia','Londres'];
    array_push($desio_zerrenda,'China','Mexiko');

    $bisitatuak_2022 = array('Italia', 'Frantzia');
    $bisitatuak_2023 = array('Portugal', 'Japon');

    $bidai_totala = array_merge($bisitatuak_2022 + $bisitatuak_2023);
    
    $destino_ezbisi = array_diff($desio_zerrenda,$bidai_totala);
    sort($destino_ezbisi);
    print_r($destino_ezbisi);    
 ?>