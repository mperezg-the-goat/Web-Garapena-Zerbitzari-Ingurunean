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
        <h1>Serieak bilatu</h1>
        <?php
        include('funtxioak.php');
        require('datuak.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $izenburua = isset($_POST['izenburua']) ? $_POST['izenburua'] : '';

            if (!empty($izenburua)) {
                erakutsiF();
                serieaBilatu($series, $izenburua);
            } else {
                erakutsiF();
                echo "Ez da aurkitu";
            }

        } else {
            erakutsiF();
        }


        ?>
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