<?php
    $host = "viaduct.proxy.rlwy.net";
    $username = "root";
    $password = "3FA6e13EcAEa-1a6g4-fadGFa2Ee-5d1";
    $dbName = "railway";
    $port = 15319;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>



