<?php
session_start();
require_once 'connection.php';

$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);
$eskuragarri = '';

    if($_SERVER['REQUEST_METHOD']==='POST'){

    $kodea = $_POST['kodea'] ?? '';
    
        if(!empty($kodea)){
            $stmt = $pdo->prepare("DELETE FROM liburuak WHERE kodea = :kodea");
            $datuak = [':kodea' => $kodea];
            $stmt->execute($datuak);
            header("Location: Libururen_kontsulta.php");
            exit();
        }

    }else{
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
            <h2>Liburua ezabatu</h2>
            <h4>Ziur zaude liburu hau ezabatu nahi duzula?</h4>
            <br>
            <form action="" method="post">
                <label for="">📋Kodea:</label>
                <input type="text" name="kodea" value="<?= $liburua['kodea'] ?>"><br>
                <label for="">Izenburua:</label>
                <input type="text" name="Izenburua" value="<?= $liburua['titulua'] ?>"><br>
                <label for="">Autorea:</label>
                <input type="text" name="kodea" value="<?= $liburua['autorea'] ?>"><br>
                <label for="">Eskuragarria:</label>
                <?php if($liburua['eskuragarri'] === 1){
                        $eskuragarri ="✅ Bai";
                     }else{
                        $eskuragarri ="❌ Ez";
                     }?>
                <input type="text" name="kodea" value="<?= $eskuragarri ?>"><br>
                <input type="submit" value="🗑️ Bai, ezabatu">
                <input type="button" value="🔙 EZ, itzuli" onclick="window.location.href='Libururen_kontsulta.php'">
                <input type="hidden" name="kodea" value="<?= htmlspecialchars($liburua['kodea'] ?? '') ?>">
            </form>
        </article>
    </section>
</main>

<?php include('includes/footer.php');?>