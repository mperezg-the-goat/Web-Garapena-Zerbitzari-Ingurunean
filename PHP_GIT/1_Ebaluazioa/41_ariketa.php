<?php
// Balidazio-akatsak eta erantzun-mezua gordetzeko aldagaiak
$error_msg = "";
$result_msg = "";
$show_form = true;

// Formularioa bidali den egiaztatu (POST bidez)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Datuak jaso eta aldagaietan gorde (hutsuneak garbituz)
    $izena = isset($_POST['fname']) ? trim($_POST['fname']) : '';
    $abizena = isset($_POST['lname']) ? trim($_POST['lname']) : '';
    $adina = isset($_POST['age']) ? $_POST['age'] : '';
    $alta_data = isset($_POST['alta_data']) ? $_POST['alta_data'] : '';
    
    // Garraioak jaso
    $vehicle1 = isset($_POST['vehicle1']) ? $_POST['vehicle1'] : '';
    $vehicle2 = isset($_POST['vehicle2']) ? $_POST['vehicle2'] : '';
    $vehicle3 = isset($_POST['vehicle3']) ? $_POST['vehicle3'] : '';

    // BALIDAZIOA: Izena eta abizena beteta daudela ziurtatu
    if (empty($izena) || empty($abizena)) {
        $error_msg = "<p style='color: red;'>Mesedez, bete izena eta abizena (derrigorrezkoak dira).</p>";
    } else {
        // Balidazioa gaindituta, ez dugu berriro formularioa erakutsiko
        $show_form = false;
        
        // Logika adinaren arabera:
        if ($adina == "15") {
            $result_msg = "$izena $abizena, oso gaztea zara, zoaz eskolara hobeto.";
        } elseif ($adina == "60") {
            // 15 - 60 artean badago, garraioa begiratuko dugu
            if ($vehicle2 == "Car") {
                $result_msg = "$izena $abizena, kotxea ahal duzun gutxien erabili ikastetxera etortzeko, mesedez.";
            } else {
                $result_msg = "Kaixo $izena $abizena, eskerrik asko datuak betetzeagatik.";
            }
        } elseif ($adina == "100") {
            $result_msg = "$izena $abizena, seguru ez duzula nahiago bidaiatzera dedikatu?";
        } else {
            $result_msg = "Kaixo $izena $abizena, datuak ondo jaso dira.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Ikasleen Datuak</title>
</head>
<body>

<h1>IKASLEEN DATUAK</h1>

<?php 
// Akats-mezua erakutsi behar bada
if (!empty($error_msg)) {
    echo $error_msg;
}

// Emaitza-mezua erakutsi baldintzak betetzen badira
if (!empty($result_msg)) {
    echo "<h2>$result_msg</h2>";
}

// Formularioa erakutsi lehen aldia bada edo balidazioak huts egin badu
if ($show_form): 
?>
<form action="" method="POST">
  <label for="fname">Izena:</label>
  <input type="text" id="fname" name="fname" value="<?php echo isset($izena) ? htmlspecialchars($izena) : ''; ?>"><br><br>
  
  <label for="lname">Abizena:</label>
  <input type="text" id="lname" name="lname" value="<?php echo isset($abizena) ? htmlspecialchars($abizena) : ''; ?>"><br><br>
  
  <p>Adina</p>
  <input type="radio" id="age1" name="age" value="15">
  <label for="age1">0 - 15</label><br>
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">15 - 60</label><br>  
  <input type="radio" id="age3" name="age" value="100">
  <label for="age3">60 - 100</label><br><br>
  
  <p>Zelan zatoz ikastetxera?</p>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Bizikletaz</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Kotxez</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Bus">
  <label for="vehicle3"> Autobusez</label><br><br>
  
  <label for="alta_data">Alta data:</label>
  <input type="date" id="alta_data" name="alta_data"><br><br>
  
  <input type="submit" value="Bidali">
</form>
<?php endif; ?>

</body>
</html>