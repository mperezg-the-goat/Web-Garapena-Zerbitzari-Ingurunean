

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasiera</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    include('headers/header.php');

    if(isset($_SESSION['user'])){
    header('Location:Logeatuda.php');
    }else{
       echo "<p>Erabiltzailea edo pasahitza txarto daude.</p>";
    }
    ?>

    <main>
        <section>
            <article>
                <form action="" method="post">
                    <h2>LOGEATU</h2>
                    <label for="">Erabiltzailea</label><br>
                    <input type="text" name="user" id="user"><br>
                    <label for="">Pasahitza</label><br>
                    <input type="password" name="passw" id="passw"><br><br>
                    <input type="submit" value="Logeatu">
                </form>
            </article>
        </section>
    </main>
    
    <?php include('footer/footer.php')?>
</body>
</html>