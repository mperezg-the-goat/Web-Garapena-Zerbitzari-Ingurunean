<?php
session_start();
?>


<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include('headerLongin.php');
    ?>

    <main>
        <h1>Estatistikak</h1>
        <?php
        include('funtxioak.php');
        require('datuak.php');
        ?>

        <h3>Serie Kopurua</h3>
        <?php serieKopuru($series); ?>
        <h3>Martxen dauden serieak</h3>
        <?php martxanSerie($series); ?>
        <h3>Bataz besteko balorazioa</h3>
        <?php batazbeste($series); ?>
        <h3>Balorazio altuera</h3>
        <?php balorazioAltuena($series); ?>



    </main>

      <?php
    include('footerLogin.php');
    ?>

</body>

</html>