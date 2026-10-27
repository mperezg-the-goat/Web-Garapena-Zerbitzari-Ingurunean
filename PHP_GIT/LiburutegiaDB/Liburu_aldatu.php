
<?php
session_start();
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $kodea = $_POST['kodea'] ?? '';
    $autorea = $_POST['autorea'] ?? '';
    $titulua = $_POST['titulua'] ?? '';
    $eskuragarri = $_POST['eskuragarri'] ?? '';

    if ($kodea !== '') {
        $stmt = $pdo->prepare("
            UPDATE liburuak
            SET titulua = :titulua,
                autorea = :autorea,
                eskuragarri = :eskuragarri
            WHERE kodea = :kodea
        ");

        $stmt->execute([
            ':titulua' => $titulua,
            ':autorea' => $autorea,
            ':eskuragarri' => $eskuragarri,
            ':kodea' => $kodea
        ]);

        header("Location: Libururen_kontsulta.php");
        exit();
    }

} else {

    $kodea = $_GET['kodea'] ?? '';

    if ($kodea !== '') {
        $stmt = $pdo->prepare(
            "SELECT * FROM liburuak WHERE kodea = :kodea"
        );

        $stmt->execute([':kodea' => $kodea]);
        $liburua = $stmt->fetch();
    }
}

include('includes/header.php');
?>



<main>
    <section>
        <article>
            <h2>Liburu Datuak Aldatu</h2>
            <br>
            <form action="" method="post">
                <label for="">Izenburua (4-50 Karaktere):</label><br>
                <input type="text" name="titulua" id="titulua" value="<?= $liburua['titulua'] ?>"><br>
                <label for="">Autorea:</label><br>
                <input type="text" name="autorea" id="autorea" value="<?= $liburua['autorea'] ?>"><br>
                <label for="">Eskuragarri dago?</label><br>
                <label for="">Bai</label>
                <input type="radio" name="eskuragarri" id="aukera1" value="1"
                <?= $liburua['eskuragarri'] == 1 ? 'checked' : ''; ?>>

                <label for="aukera2">Ez</label>
                <input type="radio" name="eskuragarri" id="aukera2" value="0"
                <?= $liburua['eskuragarri'] == 0 ? 'checked' : ''; ?>>
                <input type="submit" value="💾Aldatu">
                <input type="button" value="🔙Utzi" onclick="window.location.href='Libururen_kontsulta.php'">
                <input type="hidden" name="kodea" value="<?= htmlspecialchars($liburua['kodea'] ?? '') ?>">
            </form>
        </article>
    </section>
</main>

<?php include('includes/footer.php') ?>