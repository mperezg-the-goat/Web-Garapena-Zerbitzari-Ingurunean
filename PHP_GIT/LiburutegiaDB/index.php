<?php
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);
$mensaje='';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $passw = isset($_POST['passw']) ? $_POST['passw'] : '';

    $stmt = $pdo->prepare("SELECT * FROM erabiltzaileak WHERE erabiltzaile_izena = :user AND pasahitza = :passw");
    $datuak = [ ':user' => $user, ':passw' => $passw ];
    $stmt->execute($datuak);

    $fila = $stmt->fetch();

    if ($fila) { 
        header('Location: Logeatuda.php');
        exit; 
    } else { 
        $mensaje = "<p>Erabiltzailea edo pasahitza txarto daude.</p>"; 
    }
}
?>

    <?php
    include('includes/header.php');
    ?>

    <main>
        <section>
            <?php echo $mensaje;   ?>
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

    <?php include('includes/footer.php') ?>
