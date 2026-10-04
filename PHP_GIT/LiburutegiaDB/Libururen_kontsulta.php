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
        <button onclick="window.location.href='Liburu_berria.php'">➕ Liburua_sortu</button>
        <article>
            <p>Guztira: <?php echo $L_Totala ?> liburu aurkitu dira</p>
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
                global $liburuak;
                 foreach ($liburuak as $fila) {
                     if($fila['eskuragarri'] === 1){
                         $eskuragarri ="<td class='Bai'>Bai</td>";
                     }else{
                        $eskuragarri ="<td class='Ez'>Ez</td>";
                     }
                    echo "<td>" . $fila['kodea'] . "</td>",
                         "<td>" . $fila['titulua'] . "</td>",
                         "<td>" . $fila['autorea'] . "</td>"
                        . $eskuragarri .
                        "<td>
                        <button class='aldatu' onclick=\"window.location.href='Liburu_aldatu.php?kodea={$fila['kodea']}'\">Aldatu</button>
                        </td>

                        <td>
                        <button class='ezabatu' onclick=\"window.location.href='Liburu_ezabatu.php?kodea={$fila['kodea']}'\">Ezabatu</button>
                        </td> 
                        <tr></tr>";
                } ?>
            </tbody>
        </table>

    </section>
</main>

<?php include('includes/footer.php') ?>