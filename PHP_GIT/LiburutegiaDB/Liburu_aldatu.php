<?php
session_start();
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);

if(isset($_GET['kodea'])){
$kodea=$_GET['kodea'];

$stmt = $pdo->prepare("SELECT * FROM liburuak WHERE kodea = :kodea");
$stmt->execute([$kodea]);
$liburua = $stmt->fetch();

}


if($_SERVER['REQUEST_METHOD']== "POST"){

    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $titulua = isset($_POST['titulua']) ? $_POST['titulua'] : '';
    $aukera = isset($_POST['aukera']) ? $_POST['aukera'] : '';


     $stmt = $pdo->prepare("UPDATE liburuak SET titulua= :titulua,autorea=:autorea,eskuragarri=eskuragarri WHERE kodea = :kodea");
    $stmt->execute([$titulua,$autor,$kodea]);

    header("Location: Liburu_kontsulta.php");
    exit;
}


?>

<?php include('includes/header.php'); ?>

<main>
    <section>
        <article>
            <h2>Liburu Datuak Aldatu</h2>
            <br>
            <form action="Libururen_kontsulta.php" method="post">
                <label for="">Izenburua (4-50 Karaktere):</label><br>
                <input type="text" name="titulua" id="titulua" value="<?php echo $liburua['titulua'] ?>"><br>
                <label for="">Autorea:</label><br>
                <input type="text" name="autor" id="autor" value="<?php echo $liburua['autorea'] ?>"><br>
                <label for="">Eskuragarri dago?</label><br>
                <label for="">Bai</label>
                <input type="radio" name="aukera" id="aukera1" value="1">
                <label for="">Ez</label>
                <input type="radio" name="aukera" id="aukera2" value="0"><br><br>
                <input type="submit" value="💾Aldatu">
                <input type="button" value="🔙Utzi" onclick="window.location.href='Libururen_kontsulta.php'">

            </form>
        </article>
    </section>
</main>

<?php include('includes/footer.php') ?>