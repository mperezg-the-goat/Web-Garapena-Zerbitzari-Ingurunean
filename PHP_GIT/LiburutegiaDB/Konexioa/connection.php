<?php

/**
 * Sortu eta itzuli PDO konexioa MySQL datu-base batera.
 *
 * @param string $dbName Datu-basearen izena konektatzeko.
 * @return PDO PDO objektua datu-base konexioarekin.
 */
function connectDB(string $dbName): PDO {
    
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'root';  // MAMP erabiltzen dugunean password-a jarri behar da. XAMPP erabiltzean ez.

    $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       // Salbuespenak jaurtiko ditu erroreak detektatzeko
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Emaitzak array asoziatibo gisa jasoko dira
        PDO::ATTR_EMULATE_PREPARES => false,              // Prepare-ean emulazioa ez da erabiliko
    ];

    try {
        echo "Konektatuta datu-basearekin: $dbName<br>";
        return new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        die("Errorea datu-basearekin konektatzerakoan: " . $e->getMessage());
    }
}



?>