<?php
require_once 'connection.php';
$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $titulua = isset($_POST['titulua']) ? trim($_POST['titulua']) : '';
        $autorea   = isset($_POST['autorea']) ? trim($_POST['autorea']) : '';
        $erabilgarri = isset($_POST['erabilgarri']) ? $_POST['erabilgarri'] : '';

        $sql = ("SELECT * FROM liburuak WHERE 1=1");
        $datuak = [];

        if($titulua !== ''){
            $sql.="AND titulua LIKE :titulua";
            $datuak[':titulua'] = '%' . $titulua . '%';
        }

        if($autorea !== ''){
            $sql.="AND autorea LIKE :autorea";
            $datuak[':autorea'] = '%' . $autorea . '%';
        }

        if($erabilgarri === 'Bai' || $erabilgarri === 'Ez'){
            $sql.="AND erabilgarri = :erabilgarri";
            $datuak[':erabilgarri'] = '%' . $erabilgarri . '%';

        }
        $stmt = $pdo->prepare($sql);
        $stmt->execute($datuak);
        $liburuak = $stmt->fetchAll();
    }

include('includes/header.php');
global $liburuak;
?>
<main>
    <section>
        <article>
            <form action="" method="post">
                <label for="">Izenburua</label>
                <input type="text" name="titulua" id="titulua" value="<?= htmlspecialchars($titulua) ?>">
                <label for="">Autorea</label>
                <input type="text" name="autorea" id="autorea" value="<?= htmlspecialchars($autorea) ?>">
                <label for="">Erabilgarria</label>
                <input type="radio" name="erabilgarri" value="Bai" <?= $erabilgarri === 'Bai' ? 'checked' : '' ?>> Bai
                <input type="radio" name="erabilgarri" value="Ez" <?= $erabilgarri === 'Ez' ? 'checked' : '' ?>> Ez
                <input type="radio" name="erabilgarri" value="" <?= $erabilgarri === '' ? 'checked' : '' ?>> Guztiak
                <br><br>
                <input type="submit" value="Bilatu">
            </form>

            <table>
        <thead>
            <tr>
                <th>Kodea</th>
                <th>Izenburua</th>
                <th>Autorea</th>
                <th>Erabilgarri?</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($liburuak) > 0): ?>
                <?php foreach ($liburuak as $liburua): ?>
                    <tr>
                        <td><?= htmlspecialchars($liburua['kodea']) ?></td>
                        <td><?= htmlspecialchars($liburua['titulua']) ?></td>
                        <td><?= htmlspecialchars($liburua['autorea']) ?></td>
                        <td><?= htmlspecialchars($liburua['erabilgarri']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Ez da libururik aurkitu.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
        </article>
    </section>
</main>

<?php include('includes/footer.php') ?>