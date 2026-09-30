<?php

// connection.php inportatu require_once erabiliz
require_once 'connection.php';

$dbName = 'db_ariketak';
$pdo = connectDB($dbName); 

$stmt = $pdo->prepare("SELECT id, username, email, role FROM users ORDER BY id");
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datu base ariketa</title>
</head>
<body>
    
<?php

echo "<h2>USERS taula - FETCH erabiliz</h2>";

if ($stmt->rowCount() > 0) {
    echo "<ul>";
    while ($user = $stmt->fetch()) {
        echo "<li>" . $user['id'] . ": " . $user['username'] . " (" . $user['email'] . ") - " . $user['role'] . "</li>";
    }
    echo "</ul>";
    echo "<p>Guztira: " . $stmt->rowCount() . " erabiltzaile</p>";
} else {
    echo "<p>Ez da erabiltzailerik aurkitu</p>";
}


// Beste modu aaten - FechAll ************************


$stmt->execute(); 
$users = $stmt->fetchAll();

echo "<h2>USERS taula - FETCHALL erabiliz</h2>";

if (!empty($users)) {
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>" . $user['id'] . ": " . $user['username'] . " (" . $user['email'] . ") - " . $user['role'] . "</li>";
    }
    echo "</ul>";
    echo "<p>Guztira: " . count($users) . " erabiltzaile</p>";
} else {
    echo "<p>Ez da erabiltzailerik aurkitu</p>";
}

?>

</body>
</html>