<?php
session_start();
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);
$L_Totala = '';
$eskuragarri = '';

if (isset($_SESSION['user'])) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM liburuak ");
    $stmt->execute();
    $L_Totala = $stmt->fetchColumn();
}

if (isset($_SESSION['user'])) {
    $stmt = $pdo->prepare("SELECT * FROM liburuak ");
    $stmt->execute();
    $liburuak = $stmt->fetchAll();
}
?>

<?php include('includes/header.php'); ?>

<main>
    <section class="kontsulta">
        <h2>Liburu Kontsulta</h2>
        <button><a href="Liburu_berria.php">➕Liburua_sortu</a></button>
        <article>
            <p>Guztira: <?= $L_Totala ?> liburu aurkitu dira</p>
        </article>
        <table>
            <thead>
                <th>Kodea</th>
                <th>Izenburua</th>
                <th>Autorea</th>
                <th>Esaugarri?</th>
                <th colspan="2">Ekintzak</th>
            </thead>
            <tbody>
                <?php
                 foreach ($liburuak as $liburua):
                     if($liburua['eskuragarri'] === 1){
                         $eskuragarri ="<td class='Bai'>Bai</td>";
                     }else{
                        $eskuragarri ="<td class='Ez'>Ez</td>";
                     } ?>
                    <td><?= $liburua['kodea'] ?></td>
                    <td><?= $liburua['titulua'] ?></td>
                    <td><?= $liburua['autorea'] ?></td>
                    <?= $eskuragarri?>
                    <td><a href="Liburu_aldatu.php?kodea=<?= urlencode($liburua['kodea']); ?>">Aldatu</a></td>
                    <td><a href="Liburu_ezabatu.php?kodea=<?= urlencode($liburua['kodea']); ?>">Ezabatu</a></td>
                    <tr></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

    </section>
</main>

<?php include('includes/footer.php') ?>