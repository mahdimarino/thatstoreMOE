<?php



try {
    $servername = "localhost";
    $dbname = "products";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=products",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
