<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Alta Formularioa</title>
</head>
<body>

<?php
// Formularioa bidali den konprobatu (POST metodoaren bidez)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formularioaren datuak jaso eta ertzetako hutsuneak kendu
    $erabiltzailea = isset($_POST['erabiltzailea']) ? trim($_POST['erabiltzailea']) : '';
    $pasahitza = isset($_POST['pasahitza']) ? trim($_POST['pasahitza']) : '';

    // Bi eremuak beteta dauden egiaztatu
    if (!empty($erabiltzailea) && !empty($pasahitza)) {
        echo "<h2>Ongi etorri, " . htmlspecialchars($erabiltzailea) . "!</h2>";
    } else {
        echo "<p style='color: red;'>Errorea: Datu biak sartu behar dituzu (erabiltzailea eta pasahitza).</p>";
        // Formularioa berriro erakutsi datuak falta badira
        erakutsiFormularioa($erabiltzailea);
    }
} else {
    // Lehenengo aldia denean, formulario hutsa erakutsi
    erakutsiFormularioa();
}

// Formularioa inprimatzeko funtzioa
function erakutsiFormularioa($erabiltzailea = '') {
    ?>
    <h2>Alta Formularioa</h2>
    <form action="" method="POST">
        <label for="erabiltzailea">Erabiltzailea:</label><br>
        <input type="text" id="erabiltzailea" name="erabiltzailea" value="<?php echo htmlspecialchars($erabiltzailea); ?>"><br><br>

        <label for="pasahitza">Pasahitza:</label><br>
        <input type="password" id="pasahitza" name="pasahitza"><br><br>

        <input type="submit" value="Bidali">
    </form>
    <?php
}
?>

</body>
</html>