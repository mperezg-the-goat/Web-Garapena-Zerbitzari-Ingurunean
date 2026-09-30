<?php
session_start();
include('header.php');
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

    <main>

        <h1>Login</h1>

        <section>
            <article>
                <form action="" method="post">
                    <label for="">Erabiltzailea:</label><br>
                    <input type="text" name="user"><br>
                    <label for="">Pasahitza</label><br>
                    <input type="password" name="passw"><br><br>
                    <input type="submit" name="" id="" value="Saioa Hasi">
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $user = isset($_POST['user']) ? $_POST['user'] : '';
                    $passw = isset($_POST['passw']) ? $_POST['passw'] : '';

                    if ($user == "MP" && $passw == "123") {
                        $_SESSION['user'] = $user;
                        header('Location:txantillolla.php');
                        exit();
                    } else {
                        echo "<p style='color: red;'>Ez da erabiltzailea exititzen!</p>";
                    }
                }
                ?>
            </article>
        </section>

    </main>

    <?php include('footer.php'); ?>

</body>

</html>