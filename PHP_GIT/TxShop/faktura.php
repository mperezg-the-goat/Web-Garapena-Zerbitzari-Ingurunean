<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TxShop 📋</title>
</head>

<body>
    <header>
        <?php 
        const DENDA_IZENA="TxShop Txurdinaga";
        echo"<h1>".DENDA_IZENA."</h1>";
        ?>
        <h3>DATA : Iraila 2026</h3>
    </header>
<hr>

    <h3>EROSKETA:</h3>
    <?php
    //Const sortu:
    
    const BEZ_EHUNEKOA=21/100;
    const GARRAIO_PREZIOA =5.99;
    const DOAN_GARRAIO_MUGA =50;

    //BBezte aldagaien sorrera:
    $produktu1_izena = "Ordenagailu sagua";
    $produktu1_prezioa=25.5;
    $produktu1_kantitatea = 2;
    $produktu2_izena = "Teklatua";
    $produktu2_prezioa = 45.00;
    $produktu2_kantitatea = 1;
    $produktu3_izena = "Pantaila kablea";
    $produktu3_prezioa = 15.75;
    $produktu3_kantitatea = 3;

    //Kalkuluak:
    $preziot1=$produktu1_prezioa * $produktu1_kantitatea;
    $preziot2=$produktu2_prezioa * $produktu2_kantitatea;
    $preziot3=$produktu3_prezioa * $produktu3_kantitatea;

    $azpitotala=$preziot1 + $preziot2 + $preziot3;
    $bezkantitate = $azpitotala*BEZ_EHUNEKOA;
    $fakturat = $azpitotala + $bezkantitate;

    //Gehigarriak:
    $produktut=$produktu1_kantitatea + $produktu2_kantitatea + $produktu3_kantitatea;
    $max_prezioa = max($produktu1_prezioa, $produktu2_prezioa, $produktu3_prezioa);
    $batezbes = $azpitotala/3;

    //HTML:
    echo"<p>$produktu1_izena | $produktu1_prezioa € | $produktu1_kantitatea | $preziot1 €</p>";
    echo"<p>$produktu2_izena | $produktu2_prezioa € | $produktu2_kantitatea | $preziot2 €</p>";
    echo"<p>$produktu3_izena | $produktu3_prezioa € | $produktu3_kantitatea | $preziot3 €</p>";
    
    echo"<h3>LABURPENA:</h3>";
    echo"<p>Azpitotala: $azpitotala</p>";
    echo"<p>BEZ: ".BEZ_EHUNEKOA." %</p>";
    echo"<p>Garraio kostua: ".GARRAIO_PREZIOA." €</p>";
    echo"<p>TOTALA: $fakturat €</p>";

    echo"<h3>ESTATISTIKAK:</h3>";
    echo"<p>Produktu kopuru totala: $produktut</p>";
    echo"<p>Produktu garestiena: $max_prezioa €</p>";
    echo"<p>Batez besteko prezioa: $batezbes €</p>";
    ?>

    
</body>

</html>