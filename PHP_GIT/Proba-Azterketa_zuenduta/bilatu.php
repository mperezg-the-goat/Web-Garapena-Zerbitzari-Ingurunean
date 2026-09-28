

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <div class="goiburua">
            <img src="img/logo.png" alt="Tx_Series logoa">

            <nav>
                <a href="txantillolla.php">Hasiera</a>
                <a href="bilatu.php">Bilatu</a>
                <a href="#">Seriea gehitu</a>
                <a href="estadistika.php">Estatistikak</a>
            </nav>
        </div>
    </header>

    <main>
    <h1>Serieak bilatu</h1>
    <?php
    include ('funtxioak.php');
    require('datuak.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $izenburua = isset($_POST['izenburua']) ? $_POST['izenburua']: '';

    if(!empty($izenburua)){
        erakutsiF();
        serieaBilatu($series,$izenburua);
    }else{
        erakutsiF();
        echo"Ez da aurkitu";
    }

    }else{
        erakutsiF();
    }


?>
    </main>

    <footer>
        <p>Tx_Series - Web Garapena Zerbitzari Ingurunean</p>
    </footer>

</body>
</html>