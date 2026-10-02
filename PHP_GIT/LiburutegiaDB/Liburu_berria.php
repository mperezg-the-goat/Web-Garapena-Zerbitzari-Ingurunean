<?php
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);
$mensaje='';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $izenburua = isset($_POST['izenburua']) ? $_POST['izenburua'] : '';
    $aukera = isset($_POST['aukera']) ? $_POST['aukera'] : '';
    

    $stmt = $pdo->prepare("INSERT INTO `liburuak`(`titulua`, `autorea`, `eskuragarri`) VALUES (':izenburua',':autor',':aukera')");
    $datuak = [ ':izenburua' => $izenburua, ':autor' => $autor, ':aukera' => $aukera ];
    $stmt->execute($datuak);
}
?>

<?php include('includes/header.php') ?>
<main>
<section>
    <article>
        <h2>Liburu Berria Sortu</h2>
        <br>
        <form action="">
            <label for="">Izenburua (4-50 Karaktere):</label><br>
            <input type="text" name="izenburua" id=""><br>
            <label for="">Autorea:</label><br>
            <input type="text" name="autor" id=""><br>
            <label for="">Eskuragarri dago?</label><br>
            <label for="">Bai</label>
            <input type="radio" name="aukera" id="aukera1" value="1">
            <label for="">Ez</label>
            <input type="radio" name="aukera" id="aukera2" value="0"><br><br>
            <button>💾Gorde</button>
            <button>🔙Itzuli</button>

        </form>
    </article>
</section>
</main>
<?php include('includes/footer.php') ?>