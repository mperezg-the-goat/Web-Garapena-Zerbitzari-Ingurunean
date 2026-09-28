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

        <h1>Tx_Series</h1>
        
        <section class="serieak">

            <?php include('funtxioak.php');
            require('datuak.php');
            serieakErakutzi($series);
            ?>
        </section>

    </main>

    <footer>
        <p>Tx_Series - Web Garapena Zerbitzari Ingurunean</p>
    </footer>

</body>
</html>