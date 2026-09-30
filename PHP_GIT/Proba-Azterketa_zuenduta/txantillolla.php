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
    if (isset($_SESSION['user'])) {
        include('headerLongin.php');
    } else {
        include('header.php');
    }
    ?>

    <main>

        <h1>Tx_Series</h1>

        <section class="serieak">

            <?php include('funtxioak.php');
            require('datuak.php');
            serieakErakutzi($series);
            ?>
        </section>

    </main>

    <?php
    if (isset($_SESSION['user'])) {
        include('footerLogin.php');
    } else {
        include('footer.php');
    }
    ?>

</body>

</html>